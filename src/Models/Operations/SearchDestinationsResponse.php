<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace airbyte\airbyte_oss\Models\Operations;


class SearchDestinationsResponse
{
	
    public string $contentType;
    
    /**
     * Successful operation
     * 
     * @var ?\airbyte\airbyte_oss\Models\Shared\DestinationReadList $destinationReadList
     */
	
    public ?\airbyte\airbyte_oss\Models\Shared\DestinationReadList $destinationReadList = null;
    
    /**
     * Input failed validation
     * 
     * @var ?\airbyte\airbyte_oss\Models\Shared\InvalidInputExceptionInfo $invalidInputExceptionInfo
     */
	
    public ?\airbyte\airbyte_oss\Models\Shared\InvalidInputExceptionInfo $invalidInputExceptionInfo = null;
    
	
    public int $statusCode;
    
	
    public ?\Psr\Http\Message\ResponseInterface $rawResponse = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->destinationReadList = null;
		$this->invalidInputExceptionInfo = null;
		$this->statusCode = 0;
		$this->rawResponse = null;
	}
}
