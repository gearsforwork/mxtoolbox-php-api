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

namespace Mxtb\Model\Lookup\Domain;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Accessor;
use Mxtb\Model\Lookup\Domain\Txt\InformationResponse;

class Txt extends AbstractDomainLookup
{
    /**
     * @Type("array<Mxtb\Model\Lookup\Domain\Txt\InformationResponse>")
     * @SerializedName("Information")
     * @Accessor(getter="getInformation",setter="setInformation")
     */
    private $information;

    /**
     * @return InformationResponse[]|null
     */
    public function getInformation()
    {
        return $this->information;
    }

    /**
     * @param InformationResponse[]|null $information
     * @return Txt
     */
    public function setInformation(array $information = null) : Txt
	{
        $this->information = $information;
        return $this;
    }
}