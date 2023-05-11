<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace airbyte\airbyte_oss\Models\Shared;


class DestinationAuthSpecification
{
	#[\JMS\Serializer\Annotation\SerializedName('auth_type')]
    #[\JMS\Serializer\Annotation\Type('enum<airbyte\airbyte_oss\Models\Shared\DestinationAuthSpecificationAuthTypeEnum>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?DestinationAuthSpecificationAuthTypeEnum $authType = null;
    
    /**
     * An object containing any metadata needed to describe this connector's Oauth flow
     * 
     * @var ?\airbyte\airbyte_oss\Models\Shared\OAuth2Specification $oauth2Specification
     */
	#[\JMS\Serializer\Annotation\SerializedName('oauth2Specification')]
    #[\JMS\Serializer\Annotation\Type('airbyte\airbyte_oss\Models\Shared\OAuth2Specification')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?OAuth2Specification $oauth2Specification = null;
    
	public function __construct()
	{
		$this->authType = null;
		$this->oauth2Specification = null;
	}
}
