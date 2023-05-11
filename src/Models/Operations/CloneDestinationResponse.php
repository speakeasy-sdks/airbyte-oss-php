<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace airbyte\airbyte_oss\Models\Operations;


class CloneDestinationResponse
{
	
    public string $contentType;
    
    /**
     * Successful operation
     * 
     * @var ?\airbyte\airbyte_oss\Models\Shared\DestinationRead $destinationRead
     */
	
    public ?\airbyte\airbyte_oss\Models\Shared\DestinationRead $destinationRead = null;
    
    /**
     * Input failed validation
     * 
     * @var ?\airbyte\airbyte_oss\Models\Shared\InvalidInputExceptionInfo $invalidInputExceptionInfo
     */
	
    public ?\airbyte\airbyte_oss\Models\Shared\InvalidInputExceptionInfo $invalidInputExceptionInfo = null;
    
    /**
     * Object with given id was not found.
     * 
     * @var ?\airbyte\airbyte_oss\Models\Shared\NotFoundKnownExceptionInfo $notFoundKnownExceptionInfo
     */
	
    public ?\airbyte\airbyte_oss\Models\Shared\NotFoundKnownExceptionInfo $notFoundKnownExceptionInfo = null;
    
	
    public int $statusCode;
    
	
    public ?\Psr\Http\Message\ResponseInterface $rawResponse = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->destinationRead = null;
		$this->invalidInputExceptionInfo = null;
		$this->notFoundKnownExceptionInfo = null;
		$this->statusCode = 0;
		$this->rawResponse = null;
	}
}
