<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace airbyte\airbyte_oss\Models\Shared;


/**
 * CheckOperationRead - Successful operation
 * 
 * @package airbyte\airbyte_oss\Models\Shared
 * @access public
 */
class CheckOperationRead
{
	#[\JMS\Serializer\Annotation\SerializedName('message')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $message = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('status')]
    #[\JMS\Serializer\Annotation\Type('enum<airbyte\airbyte_oss\Models\Shared\CheckOperationReadStatus>')]
    public CheckOperationReadStatus $status;
    
	public function __construct()
	{
		$this->message = null;
		$this->status = \airbyte\airbyte_oss\Models\Shared\CheckOperationReadStatus::SUCCEEDED;
	}
}
