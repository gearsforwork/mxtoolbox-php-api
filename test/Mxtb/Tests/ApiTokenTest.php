<?php

/**
 * This file is part of the core PHP package for mxtoolbox-php-api.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @package mxtoolbox-php-api
 * @author Nathan King <nkvherus@gmail.com>
 * @version dev
 */

namespace Mxtb\Tests;

use Mxtb\ApiToken;

class ApiTokenTest extends \PHPUnit_Framework_TestCase
{
    public function testCanSetApiKey()
    {
        // Arrange
        $token = new ApiToken('test-token');

        // Act
        $token->set('new-token');

        // Assert
        $this->assertEquals('new-token', $token->get());
    }

    public function testApiKeyIsString()
    {
        // Arrange
        $token = new ApiToken('test-token');

        // Act
        $tokenValue = $token->get();

        // Assert
        $this->assertTrue(is_string($tokenValue));
    }
}