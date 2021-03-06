<?php declare(strict_types = 1);

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


namespace Mxtb\Model\Lookup\Network\Smtp;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Accessor;

use Mxtb\Model\Common\AbstractResponse;

abstract class AbstractSMTPResponse extends AbstractResponse
{
    /**
     * @Type("string")
     * @SerializedName("Info")
     * @Accessor(getter="getInfo",setter="setInfo")
     */
    protected $info;

    /**
     * @return null|string
     */
    public function getInfo() : string
    {
        return $this->info;
    }

    /**
     * @param null|string $info
     * @return AbstractSMTPResponse
     */
    public function setInfo(string $info) : AbstractSMTPResponse
    {
        $this->info = $info;
        return $this;
    }
}