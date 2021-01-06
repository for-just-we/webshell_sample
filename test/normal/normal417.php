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
    public function testProcessDetectsReferencesFromInlinedFactoryDefinitions()
    {
        $container = new ContainerBuilder();

        $container
            ->register('a')
        ;

        $factory = new Definition();
        $factory->setFactory(array(new Reference('a'), 'a'));

        $container
            ->register('b')
            ->addArgument($factory)
        ;

        $graph = $this->process($container);

        $this->assertTrue($graph->hasNode('a'));
        $this->assertCount(1, $refs = $graph->getNode('a')->getInEdges());
    }
}
?>
