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

namespace Mxtb\Api\Lookup\Network;

use Mxtb\Api\AbstractApi;
use Mxtb\Model\Lookup\Network\Trace as Model;

class Trace extends AbstractApi
{
    /**
     * Get the trace status of a domain
     * @param string $domain
     * @param array $headers
     * @return mixed
     */
    public function getTrace(string $domain, array $headers = [])
    {
        $json = $this->get('lookup/trace/' . $domain, $headers);

        return $this->deserialize($json, Model::class);
    }
}