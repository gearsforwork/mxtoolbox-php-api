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

namespace Mxtb\Model\Lookup\Network;

class TranscriptResponse
{
    /**
     * @var string
     */
    private $transcript;
	
    /**
     * @return string|null
     */
    public function getTranscript() : string
    {
        return $this->transcript;
    }

    /**
     * @param string|null $transcript
     */
    public function setTranscript(string $transcript) : TranscriptResponse
    {
        $this->transcript = $transcript;
        return $this;
    }
}