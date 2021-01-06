<?php


class AuthenticationEvents
{
    /**
     * The AUTHENTICATION_SUCCESS event occurs after a user is authenticated
     * by one provider.
     *
     * @Event("Symfony\Component\Security\Core\Event\AuthenticationEvent")
     */
    const AUTHENTICATION_SUCCESS = 'security.authentication.success';

    /**
     * The AUTHENTICATION_FAILURE event occurs after a user cannot be
     * authenticated by any of the providers.
     *
     * @Event("Symfony\Component\Security\Core\Event\AuthenticationFailureEvent")
     */
    const AUTHENTICATION_FAILURE = 'security.authentication.failure';
}
?>
