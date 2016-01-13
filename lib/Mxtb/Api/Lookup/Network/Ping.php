<?php

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

namespace Mxtb\Api\Lookup\Network;

use Mxtb\Api\AbstractApi;
use Mxtb\Model\Lookup\Network\Ping as Model;

class Ping extends AbstractApi
{
    /**
     * Get the ping status of a domain
     * @param string $domain
     * @param array $headers
     * @return mixed
     */
    public function getPing(string $domain, array $headers = [])
    {
        $json = $this->get('lookup/ping/' . $domain, $headers);

        return $this->deserialize($json, Model::class);
    }
}