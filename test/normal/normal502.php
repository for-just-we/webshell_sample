<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */


/**
 * ArrayInput represents an input provided as an array.
 *
 * Usage:
 *
 *     $input = new ArrayInput(array('name' => 'foo', '--bar' => 'foobar'));
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class ArrayInput
{
    private $parameters;

    
     
    public function __toString()
    {
        $params = array();
        foreach ($this->parameters as $param => $val) {
            if ($param && '-' === $param[0]) {
                if (\is_array($val)) {
                    foreach ($val as $v) {
                        $params[] = $param.('' != $v ? '='.$this->escapeToken($v) : '');
                    }
                } else {
                    $params[] = $param.('' != $val ? '='.$this->escapeToken($val) : '');
                }
            } else {
                $params[] = \is_array($val) ? implode(' ', array_map(array($this, 'escapeToken'), $val)) : $this->escapeToken($val);
            }
        }

        return implode(' ', $params);
    }
}
?>
