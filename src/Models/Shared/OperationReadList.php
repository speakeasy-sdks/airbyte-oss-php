<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace airbyte\airbyte_oss\Models\Shared;


/**
 * OperationReadList - Successful operation
 * 
 * @package airbyte\airbyte_oss\Models\Shared
 * @access public
 */
class OperationReadList
{
    /**
     * $operations
     * 
     * @var array<\airbyte\airbyte_oss\Models\Shared\OperationRead> $operations
     */
	#[\JMS\Serializer\Annotation\SerializedName('operations')]
    #[\JMS\Serializer\Annotation\Type('array<airbyte\airbyte_oss\Models\Shared\OperationRead>')]
    public array $operations;
    
	public function __construct()
	{
		$this->operations = [];
	}
}
