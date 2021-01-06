<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Form\ChoiceList;

/**
 * A list of choices with arbitrary data types.
 *
 * The user of this class is responsible for assigning string values to the
 * choices. Both the choices and their values are passed to the constructor.
 * Each choice must have a corresponding value (with the same array key) in
 * the value array.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class ArrayChoiceList implements ChoiceListInterface
{
    public function getValues()
    {
        return array_map('strval', array_keys($this->choices));
    }
}
?>
