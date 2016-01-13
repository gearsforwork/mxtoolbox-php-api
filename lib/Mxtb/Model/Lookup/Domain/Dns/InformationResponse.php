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
 
namespace Mxtb\Model\Lookup\Domain\Dns;

use Mxtb\Model\Lookup\Domain\AbstractInformationResponse;

class InformationResponse extends AbstractInformationResponse
{
    /**
     * @var string|null
     */
    private $domainName;

    /**
     * @var string|null
     */
    private $ipAddress;

    /**
     * @var string|null
     */
    private $ttl;

    /**
     * @var string|null
     */
    private $status;

    /**
     * @var string|null
     */
    private $time;

    /**
     * @var string|null
     */
    private $auth;

    /**
     * @var string|null
     */
    private $parent;

    /**
     * @var string|null
     */
    private $local;

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

    /**
     * @return null|string
     */
    public function getStatus() : string
    {
        return $this->status;
    }

    /**
     * @param string|null $status
     * @return InformationResponse
     */
    public function setStatus(string $status = null) : InformationResponse
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getTime() : string
    {
        return $this->time;
    }

    /**
     * @param string|null $time
     * @return InformationResponse
     */
    public function setTime(string $time = null) : InformationResponse
    {
        $this->time = $time;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getAuth() : string
    {
        return $this->auth;
    }

    /**
     * @param string|null $auth
     * @return InformationResponse
     */
    public function setAuth(string $auth = null) : InformationResponse
    {
        $this->auth = $auth;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getParent() : string
    {
        return $this->parent;
    }

    /**
     * @param string|null $parent
     * @return InformationResponse
     */
    public function setParent(string $parent = null) : InformationResponse
    {
        $this->parent = $parent;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getLocal() : string
    {
        return $this->local;
    }

    /**
     * @param string|null $local
     * @return InformationResponse
     */
    public function setLocal(string $local = null) : InformationResponse
    {
        $this->local = $local;
        return $this;
    }
}