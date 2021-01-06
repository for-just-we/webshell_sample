<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Bundle\FrameworkBundle\Tests\Functional;

class AnnotatedControllerTest extends WebTestCase
{
    public function getRoutes()
    {
        return array(
            array('/null_request', 'Symfony\Component\HttpFoundation\Request'),
            array('/null_argument', ''),
            array('/null_argument_with_route_param', ''),
            array('/null_argument_with_route_param/value', 'value'),
            array('/argument_with_route_param_and_default', 'value'),
            array('/argument_with_route_param_and_default/custom', 'custom'),
        );
    }
}

?>
