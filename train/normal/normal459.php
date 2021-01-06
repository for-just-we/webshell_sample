<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\HttpFoundation;

/**
 * Request represents an HTTP request from an Apache server.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class ApacheRequest extends Request
{
    public function prepareBaseUrl()
    {
        $baseUrl = $this->server->get('SCRIPT_NAME');
        return rtrim(dirname($baseUrl), '/\\');
    }
}
?>
