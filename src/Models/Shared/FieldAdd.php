<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace airbyte\airbyte_oss\Models\Shared;


class FieldAdd
{
    /**
     * JSONSchema representation of the field
     * 
     * @var ?\airbyte\airbyte_oss\Models\Shared\FieldSchema $schema
     */
	#[\JMS\Serializer\Annotation\SerializedName('schema')]
    #[\JMS\Serializer\Annotation\Type('airbyte\airbyte_oss\Models\Shared\FieldSchema')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?FieldSchema $schema = null;
    
	public function __construct()
	{
		$this->schema = null;
	}
}
