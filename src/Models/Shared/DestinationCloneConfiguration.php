<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace airbyte\airbyte_oss\Models\Shared;


class DestinationCloneConfiguration
{
    /**
     * The values required to configure the destination. The schema for this must match the schema return by destination_definition_specifications/get for the destinationDefinition.
     * 
     * @var mixed $connectionConfiguration
     */
	#[\JMS\Serializer\Annotation\SerializedName('connectionConfiguration')]
    #[\JMS\Serializer\Annotation\Type('mixed')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public mixed $connectionConfiguration = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('name')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $name = null;
    
	public function __construct()
	{
		$this->connectionConfiguration = null;
		$this->name = null;
	}
}
