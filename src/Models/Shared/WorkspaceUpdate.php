<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace airbyte\airbyte_oss\Models\Shared;


/**
 * WorkspaceUpdate - Used to apply a patch-style update to a workspace, which means that null properties remain unchanged
 * 
 * @package airbyte\airbyte_oss\Models\Shared
 * @access public
 */
class WorkspaceUpdate
{
	#[\JMS\Serializer\Annotation\SerializedName('anonymousDataCollection')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $anonymousDataCollection = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('defaultGeography')]
    #[\JMS\Serializer\Annotation\Type('enum<airbyte\airbyte_oss\Models\Shared\Geography>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?Geography $defaultGeography = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('displaySetupWizard')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $displaySetupWizard = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('email')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $email = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('initialSetupComplete')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $initialSetupComplete = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('news')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $news = null;
    
    /**
     * $notifications
     * 
     * @var ?array<\airbyte\airbyte_oss\Models\Shared\Notification> $notifications
     */
	#[\JMS\Serializer\Annotation\SerializedName('notifications')]
    #[\JMS\Serializer\Annotation\Type('array<airbyte\airbyte_oss\Models\Shared\Notification>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $notifications = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('securityUpdates')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $securityUpdates = null;
    
    /**
     * $webhookConfigs
     * 
     * @var ?array<\airbyte\airbyte_oss\Models\Shared\WebhookConfigWrite> $webhookConfigs
     */
	#[\JMS\Serializer\Annotation\SerializedName('webhookConfigs')]
    #[\JMS\Serializer\Annotation\Type('array<airbyte\airbyte_oss\Models\Shared\WebhookConfigWrite>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $webhookConfigs = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('workspaceId')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $workspaceId;
    
	public function __construct()
	{
		$this->anonymousDataCollection = null;
		$this->defaultGeography = null;
		$this->displaySetupWizard = null;
		$this->email = null;
		$this->initialSetupComplete = null;
		$this->news = null;
		$this->notifications = null;
		$this->securityUpdates = null;
		$this->webhookConfigs = null;
		$this->workspaceId = "";
	}
}
