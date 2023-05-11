<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace airbyte\airbyte_oss\Models\Shared;


/**
 * SelectedFieldInfo - Path to a field/column/property in a stream to be selected. For example, if the field to be selected is a database column called "foo", this will be ["foo"]. Use multiple path elements for nested schemas.
 * 
 * @package airbyte\airbyte_oss\Models\Shared
 * @access public
 */
class SelectedFieldInfo
{
    /**
     * $fieldPath
     * 
     * @var ?array<string> $fieldPath
     */
	#[\JMS\Serializer\Annotation\SerializedName('fieldPath')]
    #[\JMS\Serializer\Annotation\Type('array<string>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $fieldPath = null;
    
	public function __construct()
	{
		$this->fieldPath = null;
	}
}
