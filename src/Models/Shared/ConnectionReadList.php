<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace airbyte\airbyte_oss\Models\Shared;


/**
 * ConnectionReadList - Successful operation
 * 
 * @package airbyte\airbyte_oss\Models\Shared
 * @access public
 */
class ConnectionReadList
{
    /**
     * $connections
     * 
     * @var array<\airbyte\airbyte_oss\Models\Shared\ConnectionRead> $connections
     */
	#[\JMS\Serializer\Annotation\SerializedName('connections')]
    #[\JMS\Serializer\Annotation\Type('array<airbyte\airbyte_oss\Models\Shared\ConnectionRead>')]
    public array $connections;
    
	public function __construct()
	{
		$this->connections = [];
	}
}
