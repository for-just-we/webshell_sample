<?php


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

    
    public function getParameterOption($values, $default = false, $onlyParams = false)
    {
        $values = (array) $values;

        foreach ($this->parameters as $k => $v) {
            if ($onlyParams && ('--' === $k || (\is_int($k) && '--' === $v))) {
                return $default;
            }

            if (\is_int($k)) {
                if (\in_array($v, $values)) {
                    return true;
                }
            } elseif (\in_array($k, $values)) {
                return $v;
            }
        }

        return $default;
    }

    
}
?>
