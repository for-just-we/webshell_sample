<?php
/**
 * AuthenticationServiceException is thrown when an authenticated token becomes un-authenticated between requests.
 *
 * In practice, this is due to the User changing between requests (e.g. password changes),
 * causes the token to become un-authenticated.
 *
 * @author Ryan Weaver <ryan@knpuniversity.com>
 */
class AuthenticationExpiredException
{
    /**
     * {@inheritdoc}
     */
    public function getMessageKey()
    {
        return 'Authentication expired because your account information has changed.';
    }
}
?>
