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
    public function testProcessDetectsFactoryReferences()
    {
        $container = new ContainerBuilder();

        $container
            ->register('foo', 'stdClass')
            ->setFactory(array('stdClass', 'getInstance'));

        $container
            ->register('bar', 'stdClass')
            ->setFactory(array(new Reference('foo'), 'getInstance'));

        $graph = $this->process($container);

        $this->assertTrue($graph->hasNode('foo'));
        $this->assertCount(1, $graph->getNode('foo')->getInEdges());
    }
}
?>
