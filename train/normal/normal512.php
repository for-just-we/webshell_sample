<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Cache\Traits;

use Symfony\Component\Cache\CacheItem;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 *
 * @internal
 */
trait ArrayTrait
{

    private $storeSerialized;
    private $values = array();
    private $expiries = array();

    /**
     * {@inheritdoc}
     */
    public function hasItem($key)
    {
        if (\is_string($key) && isset($this->expiries[$key]) && $this->expiries[$key] > microtime(true)) {
            return true;
        }
        CacheItem::validateKey($key);

        return isset($this->expiries[$key]) && !$this->deleteItem($key);
    }
}
?>
