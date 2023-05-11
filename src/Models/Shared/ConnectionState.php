<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace airbyte\airbyte_oss\Models\Shared;


/**
 * ConnectionState - Contains the state for a connection. The stateType field identifies what type of state it is. Only the field corresponding to that type will be set, the rest will be null. If stateType=not_set, then none of the fields will be set.
 * 
 * @package airbyte\airbyte_oss\Models\Shared
 * @access public
 */
class ConnectionState
{
	#[\JMS\Serializer\Annotation\SerializedName('connectionId')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $connectionId;
    
	#[\JMS\Serializer\Annotation\SerializedName('globalState')]
    #[\JMS\Serializer\Annotation\Type('airbyte\airbyte_oss\Models\Shared\GlobalState')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?GlobalState $globalState = null;
    
    /**
     * $state
     * 
     * @var ?array<string, mixed> $state
     */
	#[\JMS\Serializer\Annotation\SerializedName('state')]
    #[\JMS\Serializer\Annotation\Type('array<string, mixed>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $state = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('stateType')]
    #[\JMS\Serializer\Annotation\Type('enum<airbyte\airbyte_oss\Models\Shared\ConnectionStateTypeEnum>')]
    public ConnectionStateTypeEnum $stateType;
    
    /**
     * $streamState
     * 
     * @var ?array<\airbyte\airbyte_oss\Models\Shared\StreamState> $streamState
     */
	#[\JMS\Serializer\Annotation\SerializedName('streamState')]
    #[\JMS\Serializer\Annotation\Type('array<airbyte\airbyte_oss\Models\Shared\StreamState>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $streamState = null;
    
	public function __construct()
	{
		$this->connectionId = "";
		$this->globalState = null;
		$this->state = null;
		$this->stateType = \airbyte\airbyte_oss\Models\Shared\ConnectionStateTypeEnum::GLOBAL;
		$this->streamState = null;
	}
}
