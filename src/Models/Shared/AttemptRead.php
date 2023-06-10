<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace airbyte\airbyte_oss\Models\Shared;


class AttemptRead
{
	#[\JMS\Serializer\Annotation\SerializedName('bytesSynced')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $bytesSynced = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('createdAt')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $createdAt;
    
	#[\JMS\Serializer\Annotation\SerializedName('endedAt')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $endedAt = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('failureSummary')]
    #[\JMS\Serializer\Annotation\Type('airbyte\airbyte_oss\Models\Shared\AttemptFailureSummary')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?AttemptFailureSummary $failureSummary = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $id;
    
	#[\JMS\Serializer\Annotation\SerializedName('recordsSynced')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $recordsSynced = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('status')]
    #[\JMS\Serializer\Annotation\Type('enum<airbyte\airbyte_oss\Models\Shared\AttemptStatus>')]
    public AttemptStatus $status;
    
    /**
     * $streamStats
     * 
     * @var ?array<\airbyte\airbyte_oss\Models\Shared\AttemptStreamStats> $streamStats
     */
	#[\JMS\Serializer\Annotation\SerializedName('streamStats')]
    #[\JMS\Serializer\Annotation\Type('array<airbyte\airbyte_oss\Models\Shared\AttemptStreamStats>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $streamStats = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('totalStats')]
    #[\JMS\Serializer\Annotation\Type('airbyte\airbyte_oss\Models\Shared\AttemptStats')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?AttemptStats $totalStats = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('updatedAt')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $updatedAt;
    
	public function __construct()
	{
		$this->bytesSynced = null;
		$this->createdAt = 0;
		$this->endedAt = null;
		$this->failureSummary = null;
		$this->id = 0;
		$this->recordsSynced = null;
		$this->status = \airbyte\airbyte_oss\Models\Shared\AttemptStatus::Running;
		$this->streamStats = null;
		$this->totalStats = null;
		$this->updatedAt = 0;
	}
}
