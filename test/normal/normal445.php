<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Security\Core\Authentication\Provider;

use Symfony\Component\Security\Core\Authentication\Token\AnonymousToken;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Core\Exception\BadCredentialsException;

/**
 * AnonymousAuthenticationProvider validates AnonymousToken instances.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class AnonymousAuthenticationProvider implements AuthenticationProviderInterface
{
    /**
     * Used to determine if the token is created by the application
     * instead of a malicious client.
     *
     * @var string
     */
    private $secret;

    /**
     * {@inheritdoc}
     */
    public function supports(TokenInterface $token)
    {
        return $token instanceof AnonymousToken;
    }
}
?>
