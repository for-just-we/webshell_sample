<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * Config Authentication plugin for phpMyAdmin
 *
 * @package    PhpMyAdmin-Authentication
 * @subpackage Config
 */
declare(strict_types=1);

namespace PhpMyAdmin\Plugins\Auth;

use PhpMyAdmin\Plugins\AuthenticationPlugin;
use PhpMyAdmin\Response;
use PhpMyAdmin\Server\Select;
use PhpMyAdmin\Url;
use PhpMyAdmin\Util;

/**
 * Handles the config authentication method
 *
 * @package PhpMyAdmin-Authentication
 */
class AuthenticationConfig extends AuthenticationPlugin
{
    /**
     * AuthenticationConfig constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Displays authentication form
     *
     * @return boolean always true
     */
    public function showLoginForm()
    {
        $response = Response::getInstance();
        if ($response->isAjax()) {
            $response->setRequestStatus(false);
            // reload_flag removes the token parameter from the URL and reloads
            $response->addJSON('reload_flag', '1');
            if (defined('TESTSUITE')) {
                return true;
            } else {
                exit;
            }
        }

        return true;
    }

    /**
     * Gets authentication credentials
     *
     * @return boolean always true
     */
    public function readCredentials()
    {
        if ($GLOBALS['token_provided'] && $GLOBALS['token_mismatch']) {
            return false;
        }

        $this->user = $GLOBALS['cfg']['Server']['user'];
        $this->password = $GLOBALS['cfg']['Server']['password'];

        return true;
    }
}
?>
