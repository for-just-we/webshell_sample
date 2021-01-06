<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Security\Core\Authentication\Token;

use Symfony\Component\Security\Core\Role\Role;

/**
 * AnonymousToken represents an anonymous token.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class AnonymousToken extends AbstractToken
{
    private $secret;

    /**
     * {@inheritdoc}
     */
    public function unserialize($serialized)
    {
        list($this->secret, $parentStr) = unserialize($serialized);
        parent::unserialize($parentStr);
    }
}
?>
