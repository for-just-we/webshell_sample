<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Translation\Util;

/**
 * ArrayConverter generates tree like structure from a message catalogue.
 * e.g. this
 *   'foo.bar1' => 'test1',
 *   'foo.bar2' => 'test2'
 * converts to follows:
 *   foo:
 *     bar1: test1
 *     bar2: test2.
 *
 * @author Gennady Telegin <gtelegin@gmail.com>
 */
class ArrayConverter
{
    /**
     * Converts linear messages array to tree-like array.
     * For example this rray('foo.bar' => 'value') will be converted to array('foo' => array('bar' => 'value')).
     *
     * @param array $messages Linear messages array
     *
     * @return array Tree-like messages array
     */
    public function expandToTree(array $messages)
    {
        $tree = array();

        foreach ($messages as $id => $value) {
            $referenceToElement = &self::getElementByPath($tree, explode('.', $id));

            $referenceToElement = $value;

            unset($referenceToElement);
        }

        return $tree;
    }

   
}
?>
