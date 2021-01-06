<?php

/**
 * AuthenticationException is the base class for all authentication exceptions.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Alexander <iam.asm89@gmail.com>
 */
class AuthenticationException
{
    private $token;

    /**
     * Get the token.
     *
     * @return TokenInterface
     */
    public function getToken()
    {
        return $this->token;
    }

    public function setToken(TokenInterface $token)
    {
        $this->token = $token;
    }

    public function serialize()
    {
        return serialize(array(
            $this->token
        ));
    }

    public function unserialize($str)
    {
        list(
            $this->token
        ) = unserialize($str);
    }
}
?>
