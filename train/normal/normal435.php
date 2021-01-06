<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Routing\Loader;

use Doctrine\Common\Annotations\Reader;
use Symfony\Component\Config\Loader\LoaderInterface;
use Symfony\Component\Config\Loader\LoaderResolverInterface;
use Symfony\Component\Config\Resource\FileResource;
use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

/**
 * AnnotationClassLoader loads routing information from a PHP class and its methods.
 *
 * You need to define an implementation for the getRouteDefaults() method. Most of the
 * time, this method should define some PHP callable to be called for the route
 * (a controller in MVC speak).
 *
 * The @Route annotation can be set on the class (for global parameters),
 * and on each method.
 *
 * The @Route annotation main value is the route path. The annotation also
 * recognizes several parameters: requirements, options, defaults, schemes,
 * methods, host, and name. The name parameter is mandatory.
 * Here is an example of how you should be able to use it:
 *
 *     /**
 *      * @Route("/Blog")
 *      * /
 *     class Blog
 *     {
 *         /**
 *          * @Route("/", name="blog_index")
 *          * /
 *         public function index()
 *         {
 *         }
 *
 *         /**
 *          * @Route("/{id}", name="blog_post", requirements = {"id" = "\d+"})
 *          * /
 *         public function show()
 *         {
 *         }
 *     }
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
abstract class AnnotationClassLoader implements LoaderInterface
{
    protected $reader;

    /**
     * @var string
     */
    protected $routeAnnotationClass = 'Symfony\\Component\\Routing\\Annotation\\Route';

    /**
     * @var int
     */
    protected $defaultRouteIndex = 0;

    /**
     * Loads from annotations from a class.
     *
     * @param string      $class A class name
     * @param string|null $type  The resource type
     *
     * @return RouteCollection A RouteCollection instance
     *
     * @throws \InvalidArgumentException When route can't be parsed
     */
    public function load($class, $type = null)
    {
        if (!class_exists($class)) {
            throw new \InvalidArgumentException(sprintf('Class "%s" does not exist.', $class));
        }

        $class = new \ReflectionClass($class);
        if ($class->isAbstract()) {
            throw new \InvalidArgumentException(sprintf('Annotations from class "%s" cannot be read as it is abstract.', $class->getName()));
        }

        $globals = $this->getGlobals($class);

        $collection = new RouteCollection();
        $collection->addResource(new FileResource($class->getFileName()));

        foreach ($class->getMethods() as $method) {
            $this->defaultRouteIndex = 0;
            foreach ($this->reader->getMethodAnnotations($method) as $annot) {
                if ($annot instanceof $this->routeAnnotationClass) {
                    $this->addRoute($collection, $annot, $globals, $class, $method);
                }
            }
        }

        if (0 === $collection->count() && $class->hasMethod('__invoke')) {
            foreach ($this->reader->getClassAnnotations($class) as $annot) {
                if ($annot instanceof $this->routeAnnotationClass) {
                    $globals['path'] = '';
                    $globals['name'] = '';
                    $globals['localized_paths'] = array();

                    $this->addRoute($collection, $annot, $globals, $class, $class->getMethod('__invoke'));
                }
            }
        }

        return $collection;
    }

}
?>