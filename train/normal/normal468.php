<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Console\Descriptor;

use Symfony\Component\Console\Application;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Exception\CommandNotFoundException;

/**
 * @author Jean-François Simon <jeanfrancois.simon@sensiolabs.com>
 *
 * @internal
 */
class ApplicationDescription
{
    public function sortCommands(array $commands): array
    {
        $namespacedCommands = array();
        $globalCommands = array();
        foreach ($commands as $name => $command) {
            $key = $this->application->extractNamespace($name, 1);
            if (!$key) {
                $globalCommands['_global'][$name] = $command;
            } else {
                $namespacedCommands[$key][$name] = $command;
            }
        }
        ksort($namespacedCommands);
        $namespacedCommands = array_merge($globalCommands, $namespacedCommands);

        foreach ($namespacedCommands as &$commandsSet) {
            ksort($commandsSet);
        }
        // unset reference to keep scope clear
        unset($commandsSet);

        return $namespacedCommands;
    }
}
?>