<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\Argument\ArgumentInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Definition;
use Symfony\Component\DependencyInjection\Reference;

/**
 * Run this pass before passes that need to know more about the relation of
 * your services.
 *
 * This class will populate the ServiceReferenceGraph with information. You can
 * retrieve the graph in other passes from the compiler.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 * @author Nicolas Grekas <p@tchwork.com>
 */
class AnalyzeServiceReferencesPass extends AbstractRecursivePass implements RepeatablePassInterface
{
    private $graph;
    private $currentDefinition;
    private $onlyConstructorArguments;
    private $hasProxyDumper;
    private $lazy;
    private $definitions;
    private $aliases;

    /**
     * @param bool $onlyConstructorArguments Sets this Service Reference pass to ignore method calls
     */
    public function __construct(bool $onlyConstructorArguments = false, bool $hasProxyDumper = true)
    {
        $this->onlyConstructorArguments = $onlyConstructorArguments;
        $this->hasProxyDumper = $hasProxyDumper;
        $this->enableExpressionProcessing();
    }
}
?>
