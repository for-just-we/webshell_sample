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


    /**
     * {@inheritdoc}
     */
    public function getFirstArgument()
    {
        foreach ($this->parameters as $key => $value) {
            if ($key && '-' === $key[0]) {
                continue;
            }

            return $value;
        }
    }

}
?>
