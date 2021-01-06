<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */


use Symfony\Component\Cache\CacheItem;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 *
 * @internal
 */
class ArrayTrait
{
    private $values = array();

    public function unfreeze(string $key, bool &$isHit)
    {
        if ('N;' === $value = $this->values[$key]) {
            return null;
        }
        if (\is_string($value) && isset($value[2]) && ':' === $value[1]) {
            try {
                $value = unserialize($value);
            } catch (\Exception $e) {
                CacheItem::log($this->logger, 'Failed to unserialize key "{key}"', array('key' => $key, 'exception' => $e));
                $value = false;
            }
            if (false === $value) {
                $this->values[$key] = $value = null;
                $isHit = false;
            }
        }

        return $value;
    }
}
?>
