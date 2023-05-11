<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace airbyte\airbyte_oss\Models\Operations;


class SaveSyncConfigResponse
{
	
    public string $contentType;
    
    /**
     * Successful Operation
     * 
     * @var ?\airbyte\airbyte_oss\Models\Shared\InternalOperationResult $internalOperationResult
     */
	
    public ?\airbyte\airbyte_oss\Models\Shared\InternalOperationResult $internalOperationResult = null;
    
	
    public int $statusCode;
    
	
    public ?\Psr\Http\Message\ResponseInterface $rawResponse = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->internalOperationResult = null;
		$this->statusCode = 0;
		$this->rawResponse = null;
	}
}
