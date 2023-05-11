<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace airbyte\airbyte_oss\Models\Shared;


class SourceSnippetRead
{
	#[\JMS\Serializer\Annotation\SerializedName('icon')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $icon = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('name')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $name;
    
	#[\JMS\Serializer\Annotation\SerializedName('sourceDefinitionId')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $sourceDefinitionId;
    
	#[\JMS\Serializer\Annotation\SerializedName('sourceId')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $sourceId;
    
	#[\JMS\Serializer\Annotation\SerializedName('sourceName')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $sourceName;
    
	public function __construct()
	{
		$this->icon = null;
		$this->name = "";
		$this->sourceDefinitionId = "";
		$this->sourceId = "";
		$this->sourceName = "";
	}
}
