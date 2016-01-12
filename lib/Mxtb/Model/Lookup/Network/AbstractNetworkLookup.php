<?php
/**
 * This file is part of mxtoolbox-php-api
 *
 * Copyright (c) 2016 Nathan King (nkvherus@gmail.com)
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code
 *
 * @author Nathan King (nkvherus@gmail.com)
 * @copyright 2016 Nathan King (nkvherus@gmail.com)
 */

namespace Mxtb\Model\Lookup\Network;

use Mxtb\Model\Lookup\AbstractLookup;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Accessor;
use Mxtb\Model\Lookup\Network\TranscriptResponse;

class AbstractNetworkLookup extends AbstractLookup
{
    /**
     * @Type(""array<TranscriptResponse>"")
     * @SerializedName("Transcript")
     * @Accessor(getter="getTranscript",setter="setTranscript")
     */
    private $transcript;

    public function getTranscript()
    {
        return $this->transcript;
    }

    public function setTranscript($transcript)
    {
        $this->transcript = $transcript;
        return $this;
    }
}