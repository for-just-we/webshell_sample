<?php


/**
 * AuthenticationCredentialsNotFoundException is thrown when an authentication is rejected
 * because no Token is available.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Alexander <iam.asm89@gmail.com>
 */
class AuthenticationCredentialsNotFoundException
{
    /**
     * {@inheritdoc}
     */
    public function getMessageKey()
    {
        return 'Authentication credentials could not be found.';
    }
}
?>