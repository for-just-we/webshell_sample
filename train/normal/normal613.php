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

    /**
     * Message key to be used by the translation component.
     *
     * @return string
     */
    public function getMessageKey()
    {
        return 'An authentication exception occurred.';
    }

    /**
     * Message data to be used by the translation component.
     *
     * @return array
     */
    public function getMessageData()
    {
        return array();
    }
}
?>
