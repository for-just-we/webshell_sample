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

    private $values = array();
    private $expiries = array();


    /**
     * {@inheritdoc}
     */
    public function deleteItem($key)
    {
        if (!\is_string($key) || !isset($this->expiries[$key])) {
            CacheItem::validateKey($key);
        }
        unset($this->values[$key], $this->expiries[$key]);

        return true;
    }

  
}
?>
