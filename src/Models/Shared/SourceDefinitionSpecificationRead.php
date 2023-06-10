<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace airbyte\airbyte_oss\Models\Shared;


/**
 * SourceDefinitionSpecificationRead - Successful operation
 * 
 * @package airbyte\airbyte_oss\Models\Shared
 * @access public
 */
class SourceDefinitionSpecificationRead
{
	#[\JMS\Serializer\Annotation\SerializedName('advancedAuth')]
    #[\JMS\Serializer\Annotation\Type('airbyte\airbyte_oss\Models\Shared\AdvancedAuth')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?AdvancedAuth $advancedAuth = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('authSpecification')]
    #[\JMS\Serializer\Annotation\Type('airbyte\airbyte_oss\Models\Shared\SourceAuthSpecification')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?SourceAuthSpecification $authSpecification = null;
    
    /**
     * The specification for what values are required to configure the sourceDefinition.
     * 
     * @var ?\airbyte\airbyte_oss\Models\Shared\SourceDefinitionSpecification $connectionSpecification
     */
	#[\JMS\Serializer\Annotation\SerializedName('connectionSpecification')]
    #[\JMS\Serializer\Annotation\Type('airbyte\airbyte_oss\Models\Shared\SourceDefinitionSpecification')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?SourceDefinitionSpecification $connectionSpecification = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('documentationUrl')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $documentationUrl = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('jobInfo')]
    #[\JMS\Serializer\Annotation\Type('airbyte\airbyte_oss\Models\Shared\SynchronousJobRead')]
    public SynchronousJobRead $jobInfo;
    
	#[\JMS\Serializer\Annotation\SerializedName('sourceDefinitionId')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $sourceDefinitionId;
    
	public function __construct()
	{
		$this->advancedAuth = null;
		$this->authSpecification = null;
		$this->connectionSpecification = null;
		$this->documentationUrl = null;
		$this->jobInfo = new \airbyte\airbyte_oss\Models\Shared\SynchronousJobRead();
		$this->sourceDefinitionId = "";
	}
}
