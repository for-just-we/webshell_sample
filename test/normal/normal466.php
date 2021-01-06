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
    
    public function inspectApplication()
    {
        $this->commands = array();
        $this->namespaces = array();

        $all = $this->application->all($this->namespace ? $this->application->findNamespace($this->namespace) : null);
        foreach ($this->sortCommands($all) as $namespace => $commands) {
            $names = array();

            /** @var Command $command */
            foreach ($commands as $name => $command) {
                if (!$command->getName() || (!$this->showHidden && $command->isHidden())) {
                    continue;
                }

                if ($command->getName() === $name) {
                    $this->commands[$name] = $command;
                } else {
                    $this->aliases[$name] = $command;
                }

                $names[] = $name;
            }

            $this->namespaces[$namespace] = array('id' => $namespace, 'commands' => $names);
        }
    }

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