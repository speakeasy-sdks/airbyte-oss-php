<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace airbyte\airbyte_oss\Models\Operations;


class SyncConnectionResponse
{
	
    public string $contentType;
    
    /**
     * Input failed validation
     * 
     * @var ?\airbyte\airbyte_oss\Models\Shared\InvalidInputExceptionInfo $invalidInputExceptionInfo
     */
	
    public ?\airbyte\airbyte_oss\Models\Shared\InvalidInputExceptionInfo $invalidInputExceptionInfo = null;
    
    /**
     * Successful operation
     * 
     * @var ?\airbyte\airbyte_oss\Models\Shared\JobInfoRead $jobInfoRead
     */
	
    public ?\airbyte\airbyte_oss\Models\Shared\JobInfoRead $jobInfoRead = null;
    
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
		$this->invalidInputExceptionInfo = null;
		$this->jobInfoRead = null;
		$this->notFoundKnownExceptionInfo = null;
		$this->statusCode = 0;
		$this->rawResponse = null;
	}
}
