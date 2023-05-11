<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace airbyte\airbyte_oss\Models\Shared;


/**
 * JobDebugInfoRead - Successful operation
 * 
 * @package airbyte\airbyte_oss\Models\Shared
 * @access public
 */
class JobDebugInfoRead
{
    /**
     * $attempts
     * 
     * @var array<\airbyte\airbyte_oss\Models\Shared\AttemptInfoRead> $attempts
     */
	#[\JMS\Serializer\Annotation\SerializedName('attempts')]
    #[\JMS\Serializer\Annotation\Type('array<airbyte\airbyte_oss\Models\Shared\AttemptInfoRead>')]
    public array $attempts;
    
	#[\JMS\Serializer\Annotation\SerializedName('job')]
    #[\JMS\Serializer\Annotation\Type('airbyte\airbyte_oss\Models\Shared\JobDebugRead')]
    public JobDebugRead $job;
    
	#[\JMS\Serializer\Annotation\SerializedName('workflowState')]
    #[\JMS\Serializer\Annotation\Type('airbyte\airbyte_oss\Models\Shared\WorkflowStateRead')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?WorkflowStateRead $workflowState = null;
    
	public function __construct()
	{
		$this->attempts = [];
		$this->job = new \airbyte\airbyte_oss\Models\Shared\JobDebugRead();
		$this->workflowState = null;
	}
}
