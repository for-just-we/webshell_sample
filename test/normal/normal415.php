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
    public function testProcessMarksEdgesLazyWhenReferencedFromIteratorArgument()
    {
        $container = new ContainerBuilder();
        $container->register('a');
        $container->register('b');

        $container
            ->register('c')
            ->addArgument($ref1 = new Reference('a'))
            ->addArgument(new IteratorArgument(array($ref2 = new Reference('b'))))
        ;

        $graph = $this->process($container);

        $this->assertCount(1, $graph->getNode('a')->getInEdges());
        $this->assertCount(1, $graph->getNode('b')->getInEdges());
        $this->assertCount(2, $edges = $graph->getNode('c')->getOutEdges());

        $this->assertSame($ref1, $edges[0]->getValue());
        $this->assertFalse($edges[0]->isLazy());
        $this->assertSame($ref2, $edges[1]->getValue());
        $this->assertTrue($edges[1]->isLazy());
    }
}
?>
