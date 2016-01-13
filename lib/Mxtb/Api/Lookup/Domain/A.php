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

namespace Mxtb\Api\Lookup\Domain;

use Mxtb\Api\AbstractApi;
use Mxtb\Model\Lookup\Domain\A as Model;

class A extends AbstractApi
{
    /**
     * Get the a status of a domain
     * @param string $domain
     * @param array $headers
     * @return mixed
     */
    public function getA(string $domain, array $headers = [])
    {
        $json = $this->get('lookup/a/' . $domain, $headers);

        return $this->deserialize($json, Model::class);
    }
}