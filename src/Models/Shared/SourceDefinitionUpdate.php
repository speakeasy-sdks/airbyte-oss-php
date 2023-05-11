<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace airbyte\airbyte_oss\Models\Shared;


/**
 * SourceDefinitionUpdate - Update the SourceDefinition. Currently, the only allowed attribute to update is the default docker image version.
 * 
 * @package airbyte\airbyte_oss\Models\Shared
 * @access public
 */
class SourceDefinitionUpdate
{
	#[\JMS\Serializer\Annotation\SerializedName('dockerImageTag')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $dockerImageTag;
    
    /**
     * actor definition specific resource requirements. if default is set, these are the requirements that should be set for ALL jobs run for this actor definition. it is overriden by the job type specific configurations. if not set, the platform will use defaults. these values will be overriden by configuration at the connection level.
     * 
     * @var ?\airbyte\airbyte_oss\Models\Shared\ActorDefinitionResourceRequirements $resourceRequirements
     */
	#[\JMS\Serializer\Annotation\SerializedName('resourceRequirements')]
    #[\JMS\Serializer\Annotation\Type('airbyte\airbyte_oss\Models\Shared\ActorDefinitionResourceRequirements')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?ActorDefinitionResourceRequirements $resourceRequirements = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('sourceDefinitionId')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $sourceDefinitionId;
    
	public function __construct()
	{
		$this->dockerImageTag = "";
		$this->resourceRequirements = null;
		$this->sourceDefinitionId = "";
	}
}
