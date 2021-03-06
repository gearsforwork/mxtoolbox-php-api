<?php declare(strict_types=1);

/**
 * This file is part of the core PHP package for mxtoolbox-api-wrapper.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @package mxtoolbox-api-wrapper
 * @author Nathan King <nkvherus@gmail.com>
 * @version dev
 */

namespace Mxtb;

use Doctrine\Common\Annotations\AnnotationRegistry;
use GuzzleHttp\Client;
use JMS\Serializer\Serializer;
use JMS\Serializer\SerializerBuilder;

class MxToolbox
{
    /** MxToolbox API version */
    const VERSION = 'v1';

    /** Base API URI */
    const MTXB_URI = 'mxtoolbox.com/api/';

    /** Insecure schema */
    const SCHEMA_INSECURE = 'http';

    /** Secure schema */
    const SCHEMA_SECURE = 'https';

    /**
     * @var Client
     */
    private $httpClient;

    /**
     * @var Serializer
     */
    private $serializer;

    /**
     * @var ApiToken
     */
    private $apiToken;

    /**
     * MxToolbox constructor.
     * @param ApiToken|null $apiToken
     * @param $secure
     */
    public function __construct(ApiToken $apiToken, bool $secure = true)
    {
        $this->apiToken = $apiToken;

        $this->httpClient = new Client([
            'base_uri' => $this->getURL($secure),
            'headers' => ['Authorization' => $this->apiToken->get()]
        ]);

        $this->buildAnnotationRegistry();

        $this->serializer = $serializer = SerializerBuilder::create()->build();
    }

    /**
     * Get the HTTP client
     * @return Client
     */
    public function getClient() : Client
    {
        return $this->httpClient;
    }

    /**
     * Set the API token to use
     * @param $apiToken
     * @return MxToolbox
     */
    public function setApiToken(ApiToken $apiToken) : MxToolbox
    {
        $this->apiToken = $apiToken;
        return $this;
    }

    /**
     * Get the instance of the ApiToken
     * @return ApiToken
     */
    public function getApiToken() : ApiToken
    {
        return $this->apiToken;
    }

    /**
     * @return Serializer
     */
    public function getSerializer() : Serializer
    {
        return $this->serializer;
    }

    /**
     * @param bool $secure
     * @return string
     */
    private function getURL(bool $secure = true) : string
    {
        return (($secure) ? self::SCHEMA_SECURE : self::SCHEMA_INSECURE) . '://' . self::MTXB_URI . self::VERSION . '/';
    }

    /**
     * Construct annotations registry for JMS Serializer
     */
    private function buildAnnotationRegistry()
    {
        AnnotationRegistry::registerLoader('class_exists');
    }
}