<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace airbyte\airbyte_oss\Models\Shared;


class InvalidInputProperty
{
	#[\JMS\Serializer\Annotation\SerializedName('invalidValue')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $invalidValue = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('message')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $message = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('propertyPath')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $propertyPath;
    
	public function __construct()
	{
		$this->invalidValue = null;
		$this->message = null;
		$this->propertyPath = "";
	}
}
