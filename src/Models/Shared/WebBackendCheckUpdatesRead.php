<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace airbyte\airbyte_oss\Models\Shared;


/**
 * WebBackendCheckUpdatesRead - Summary of source and destination definitions that could be updated
 * 
 * @package airbyte\airbyte_oss\Models\Shared
 * @access public
 */
class WebBackendCheckUpdatesRead
{
	#[\JMS\Serializer\Annotation\SerializedName('destinationDefinitions')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $destinationDefinitions;
    
	#[\JMS\Serializer\Annotation\SerializedName('sourceDefinitions')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $sourceDefinitions;
    
	public function __construct()
	{
		$this->destinationDefinitions = 0;
		$this->sourceDefinitions = 0;
	}
}
