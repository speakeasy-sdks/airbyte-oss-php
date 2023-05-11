<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace airbyte\airbyte_oss\Models\Shared;


class AttemptStats
{
	#[\JMS\Serializer\Annotation\SerializedName('bytesEmitted')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $bytesEmitted = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('estimatedBytes')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $estimatedBytes = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('estimatedRecords')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $estimatedRecords = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('recordsCommitted')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $recordsCommitted = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('recordsEmitted')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $recordsEmitted = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('stateMessagesEmitted')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $stateMessagesEmitted = null;
    
	public function __construct()
	{
		$this->bytesEmitted = null;
		$this->estimatedBytes = null;
		$this->estimatedRecords = null;
		$this->recordsCommitted = null;
		$this->recordsEmitted = null;
		$this->stateMessagesEmitted = null;
	}
}
