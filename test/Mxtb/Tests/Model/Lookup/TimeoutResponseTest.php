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

namespace Mxtb\Tests\Model\Lookup;

use Mxtb\Model\Lookup\TimeoutResponse;

class TimeoutResponseTest extends \PHPUnit_Framework_TestCase
{
    public function testCanSetInfo()
    {
        // Arrange
        $response = new TimeoutResponse();

        // Act
        $response->setInfo('test info');

        // Assert
        $this->assertEquals('test info', $response->getInfo());
    }
}