<?php declare(strict_types = 1);

/**
 * This file is part of the core PHP package for mxtoolbox-php-api.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @package mxtoolbox-php-api
 * @author Darien Livermore <daz.livermore@hotmail.com>
 * @version dev
 */
 
namespace Mxtb\Model\Lookup\Domain\A;

use Mxtb\Model\Lookup\Domain\AbstractInformationResponse;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Accessor;

class InformationResponse extends AbstractInformationResponse
{
    /**
     * @var string|null
     * @Type("string")
     * @SerializedName("DomainName")
     * @Accessor(getter="getDomainName",setter="setDomainName")
     */
    private $domainName;

    /**
     * @var string|null
     * @Type("string")
     * @SerializedName("IPAddress")
     * @Accessor(getter="getIPAddress",setter="setIPAddress")
     */
    private $ipAddress;

    /**
     * @var string|null
     * @Type("string")
     * @SerializedName("TTL")
     * @Accessor(getter="getTTL",setter="setTTL")
     */
    private $ttl;

    /**
     * @return null|string
     */
    public function getDomainName() : string
    {
        return $this->domainName;
    }

    /**
     * @param string|null $domainName
     * @return InformationResponse
     */
    public function setDomainName(string $domainName = null) : InformationResponse
    {
        $this->domainName = $domainName;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getIPAddress() : string
    {
        return $this->ipAddress;
    }

    /**
     * @param string|null $ipAddress
     * @return InformationResponse
     */
    public function setIPAddress(string $ipAddress = null) : InformationResponse
    {
        $this->ipAddress = $ipAddress;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getTTL() : string
    {
        return $this->ttl;
    }

    /**
     * @param string|null $ttl
     * @return InformationResponse
     */
    public function setTTL(string $ttl = null) : InformationResponse
    {
        $this->ttl = $ttl;
        return $this;
    }
}