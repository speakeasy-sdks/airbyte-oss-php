<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace airbyte\airbyte_oss\Models\Shared;


class FieldRemove
{
    /**
     * JSONSchema representation of the field
     * 
     * @var ?array<string, mixed> $schema
     */
	#[\JMS\Serializer\Annotation\SerializedName('schema')]
    #[\JMS\Serializer\Annotation\Type('array<string, mixed>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $schema = null;
    
	public function __construct()
	{
		$this->schema = null;
	}
}
