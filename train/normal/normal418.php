<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\DependencyInjection\Tests\Compiler;

use PHPUnit\Framework\TestCase;
use Symfony\Component\DependencyInjection\Argument\IteratorArgument;
use Symfony\Component\DependencyInjection\Compiler\AnalyzeServiceReferencesPass;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Definition;
use Symfony\Component\DependencyInjection\Reference;

class AnalyzeServiceReferencesPassTest extends TestCase
{
    public function testProcessDoesNotSaveDuplicateReferences()
    {
        $container = new ContainerBuilder();

        $container
            ->register('a')
        ;
        $container
            ->register('b')
            ->addArgument(new Definition(null, array($ref1 = new Reference('a'))))
            ->addArgument(new Definition(null, array($ref2 = new Reference('a'))))
        ;

        $graph = $this->process($container);

        $this->assertCount(2, $graph->getNode('a')->getInEdges());
    }
}
?>
