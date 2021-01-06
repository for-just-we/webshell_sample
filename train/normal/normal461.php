<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\HttpFoundation\Tests;

use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpFoundation\ApacheRequest;

class ApacheRequestTest extends TestCase
{
    /**
     * @dataProvider provideServerVars
     */
    public function testUriMethods($server, $expectedRequestUri, $expectedBaseUrl, $expectedPathInfo)
    {
        $request = new ApacheRequest();
        $request->server->replace($server);

        $this->assertEquals($expectedRequestUri, $request->getRequestUri(), '->getRequestUri() is correct');
        $this->assertEquals($expectedBaseUrl, $request->getBaseUrl(), '->getBaseUrl() is correct');
        $this->assertEquals($expectedPathInfo, $request->getPathInfo(), '->getPathInfo() is correct');
    }
}
?>
