<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace airbyte\airbyte_oss\Models\Shared;


/**
 * WebBackendGeographiesListResult - Successful operation
 * 
 * @package airbyte\airbyte_oss\Models\Shared
 * @access public
 */
class WebBackendGeographiesListResult
{
    /**
     * $geographies
     * 
     * @var array<\airbyte\airbyte_oss\Models\Shared\GeographyEnum> $geographies
     */
	#[\JMS\Serializer\Annotation\SerializedName('geographies')]
    #[\JMS\Serializer\Annotation\Type('array<enum<airbyte\airbyte_oss\Models\Shared\GeographyEnum>>')]
    public array $geographies;
    
	public function __construct()
	{
		$this->geographies = [];
	}
}
