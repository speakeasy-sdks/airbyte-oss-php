<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace airbyte\airbyte_oss\Models\Shared;


/**
 * WebBackendConnectionUpdate - Used to apply a patch-style update to a connection, which means that null properties remain unchanged
 * 
 * @package airbyte\airbyte_oss\Models\Shared
 * @access public
 */
class WebBackendConnectionUpdate
{
	#[\JMS\Serializer\Annotation\SerializedName('connectionId')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $connectionId;
    
	#[\JMS\Serializer\Annotation\SerializedName('geography')]
    #[\JMS\Serializer\Annotation\Type('enum<airbyte\airbyte_oss\Models\Shared\GeographyEnum>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?GeographyEnum $geography = null;
    
    /**
     * Name that will be set to the connection
     * 
     * @var ?string $name
     */
	#[\JMS\Serializer\Annotation\SerializedName('name')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $name = null;
    
    /**
     * Method used for computing final namespace in destination
     * 
     * @var ?\airbyte\airbyte_oss\Models\Shared\NamespaceDefinitionTypeEnum $namespaceDefinition
     */
	#[\JMS\Serializer\Annotation\SerializedName('namespaceDefinition')]
    #[\JMS\Serializer\Annotation\Type('enum<airbyte\airbyte_oss\Models\Shared\NamespaceDefinitionTypeEnum>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?NamespaceDefinitionTypeEnum $namespaceDefinition = null;
    
    /**
     * Used when namespaceDefinition is 'customformat'. If blank then behaves like namespaceDefinition = 'destination'. If "${SOURCE_NAMESPACE}" then behaves like namespaceDefinition = 'source'.
     * 
     * @var ?string $namespaceFormat
     */
	#[\JMS\Serializer\Annotation\SerializedName('namespaceFormat')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $namespaceFormat = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('nonBreakingChangesPreference')]
    #[\JMS\Serializer\Annotation\Type('enum<airbyte\airbyte_oss\Models\Shared\NonBreakingChangesPreferenceEnum>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?NonBreakingChangesPreferenceEnum $nonBreakingChangesPreference = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('notifySchemaChanges')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $notifySchemaChanges = null;
    
    /**
     * $operations
     * 
     * @var ?array<\airbyte\airbyte_oss\Models\Shared\WebBackendOperationCreateOrUpdate> $operations
     */
	#[\JMS\Serializer\Annotation\SerializedName('operations')]
    #[\JMS\Serializer\Annotation\Type('array<airbyte\airbyte_oss\Models\Shared\WebBackendOperationCreateOrUpdate>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $operations = null;
    
    /**
     * Prefix that will be prepended to the name of each stream when it is written to the destination.
     * 
     * @var ?string $prefix
     */
	#[\JMS\Serializer\Annotation\SerializedName('prefix')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $prefix = null;
    
    /**
     * optional resource requirements to run workers (blank for unbounded allocations)
     * 
     * @var ?\airbyte\airbyte_oss\Models\Shared\ResourceRequirements $resourceRequirements
     */
	#[\JMS\Serializer\Annotation\SerializedName('resourceRequirements')]
    #[\JMS\Serializer\Annotation\Type('airbyte\airbyte_oss\Models\Shared\ResourceRequirements')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?ResourceRequirements $resourceRequirements = null;
    
    /**
     * if null, then no schedule is set.
     * 
     * @var ?\airbyte\airbyte_oss\Models\Shared\ConnectionSchedule $schedule
     */
	#[\JMS\Serializer\Annotation\SerializedName('schedule')]
    #[\JMS\Serializer\Annotation\Type('airbyte\airbyte_oss\Models\Shared\ConnectionSchedule')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?ConnectionSchedule $schedule = null;
    
    /**
     * schedule for when the the connection should run, per the schedule type
     * 
     * @var ?\airbyte\airbyte_oss\Models\Shared\ConnectionScheduleData $scheduleData
     */
	#[\JMS\Serializer\Annotation\SerializedName('scheduleData')]
    #[\JMS\Serializer\Annotation\Type('airbyte\airbyte_oss\Models\Shared\ConnectionScheduleData')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?ConnectionScheduleData $scheduleData = null;
    
    /**
     * determine how the schedule data should be interpreted
     * 
     * @var ?\airbyte\airbyte_oss\Models\Shared\ConnectionScheduleTypeEnum $scheduleType
     */
	#[\JMS\Serializer\Annotation\SerializedName('scheduleType')]
    #[\JMS\Serializer\Annotation\Type('enum<airbyte\airbyte_oss\Models\Shared\ConnectionScheduleTypeEnum>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?ConnectionScheduleTypeEnum $scheduleType = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('skipReset')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $skipReset = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('sourceCatalogId')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $sourceCatalogId = null;
    
    /**
     * Active means that data is flowing through the connection. Inactive means it is not. Deprecated means the connection is off and cannot be re-activated. the schema field describes the elements of the schema that will be synced.
     * 
     * @var ?\airbyte\airbyte_oss\Models\Shared\ConnectionStatusEnum $status
     */
	#[\JMS\Serializer\Annotation\SerializedName('status')]
    #[\JMS\Serializer\Annotation\Type('enum<airbyte\airbyte_oss\Models\Shared\ConnectionStatusEnum>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?ConnectionStatusEnum $status = null;
    
    /**
     * describes the available schema (catalog).
     * 
     * @var ?\airbyte\airbyte_oss\Models\Shared\AirbyteCatalog $syncCatalog
     */
	#[\JMS\Serializer\Annotation\SerializedName('syncCatalog')]
    #[\JMS\Serializer\Annotation\Type('airbyte\airbyte_oss\Models\Shared\AirbyteCatalog')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?AirbyteCatalog $syncCatalog = null;
    
	public function __construct()
	{
		$this->connectionId = "";
		$this->geography = null;
		$this->name = null;
		$this->namespaceDefinition = null;
		$this->namespaceFormat = null;
		$this->nonBreakingChangesPreference = null;
		$this->notifySchemaChanges = null;
		$this->operations = null;
		$this->prefix = null;
		$this->resourceRequirements = null;
		$this->schedule = null;
		$this->scheduleData = null;
		$this->scheduleType = null;
		$this->skipReset = null;
		$this->sourceCatalogId = null;
		$this->status = null;
		$this->syncCatalog = null;
	}
}
