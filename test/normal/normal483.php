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
  
    /**
     * Creates a list with the given choices and values.
     *
     * The given choice array must have the same array keys as the value array.
     *
     * @param iterable      $choices The selectable choices
     * @param callable|null $value   The callable for creating the value
     *                               for a choice. If `null` is passed,
     *                               incrementing integers are used as
     *                               values
     */
    public function __construct(iterable $choices, callable $value = null)
    {
        if ($choices instanceof Traversable) {
            $choices = iterator_to_array($choices);
        }

        if (null === $value && $this->castableToString($choices)) {
            $value = function ($choice) {
                return false === $choice ? '0' : (string) $choice;
            };
        }

        if (null !== $value) {
            // If a deterministic value generator was passed, use it later
            $this->valueCallback = $value;
        } else {
            // Otherwise simply generate incrementing integers as values
            $i = 0;
            $value = function () use (&$i) {
                return $i++;
            };
        }

        // If the choices are given as recursive array (i.e. with explicit
        // choice groups), flatten the array. The grouping information is needed
        // in the view only.
        $this->flatten($choices, $value, $choicesByValues, $keysByValues, $structuredValues);

        $this->choices = $choicesByValues;
        $this->originalKeys = $keysByValues;
        $this->structuredValues = $structuredValues;
    }

}
?>
