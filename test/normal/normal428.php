<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Bundle\FrameworkBundle\Tests\Functional\Bundle\TestBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AnnotatedController
{
    /**
     * @Route("/argument_with_route_param_and_default/{value}", defaults={"value": "value"}, name="argument_with_route_param_and_default")
     */
    public function argumentWithoutDefaultWithRouteParamAndDefaultAction($value)
    {
        return new Response($value);
    }
}
?>
