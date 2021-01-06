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
    public function testProcessMarksEdgesLazyWhenReferencedServiceIsLazy()
    {
        $container = new ContainerBuilder();

        $container
            ->register('a')
            ->setLazy(true)
            ->addArgument($ref1 = new Reference('b'))
        ;

        $container
            ->register('b')
            ->addArgument($ref2 = new Reference('a'))
        ;

        $graph = $this->process($container);

        $this->assertCount(1, $graph->getNode('b')->getInEdges());
        $this->assertCount(1, $edges = $graph->getNode('a')->getInEdges());

        $this->assertSame($ref2, $edges[0]->getValue());
        $this->assertTrue($edges[0]->isLazy());
    }
}
?>
