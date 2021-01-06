<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Console\Input;

use Symfony\Component\Console\Exception\RuntimeException;

/**
 * ArgvInput represents an input coming from the CLI arguments.
 *
 * Usage:
 *
 *     $input = new ArgvInput();
 *
 * By default, the `$_SERVER['argv']` array is used for the input values.
 *
 * This can be overridden by explicitly passing the input values in the constructor:
 *
 *     $input = new ArgvInput($_SERVER['argv']);
 *
 * If you pass it yourself, don't forget that the first element of the array
 * is the name of the running application.
 *
 * When passing an argument to the constructor, be sure that it respects
 * the same rules as the argv one. It's almost always better to use the
 * `StringInput` when you want to provide your own input.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @see http://www.gnu.org/software/libc/manual/html_node/Argument-Syntax.html
 * @see http://www.opengroup.org/onlinepubs/009695399/basedefs/xbd_chap12.html#tag_12_02
 */
class ArgvInput
{

    
    private function parseShortOptionSet($name)
    {
        $len = strlen($name);
        for ($i = 0; $i < $len; ++$i) {
            if (!$this->definition->hasShortcut($name[$i])) {
                $encoding = mb_detect_encoding($name, null, true);
                throw new RuntimeException(sprintf('The "-%s" option does not exist.', false === $encoding ? $name[$i] : mb_substr($name, $i, 1, $encoding)));
            }

            $option = $this->definition->getOptionForShortcut($name[$i]);
            if ($option->acceptValue()) {
                $this->addLongOption($option->getName(), $i === $len - 1 ? null : substr($name, $i + 1));

                break;
            } else {
                $this->addLongOption($option->getName(), null);
            }
        }
    }

}
?>
