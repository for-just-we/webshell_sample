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
    /**
     * {@inheritdoc}
     */
    public function prepareRequestUri()
    {
        return $this->server->get('REQUEST_URI');
    }
}
?>