<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace airbyte\airbyte_oss\Models\Shared;


class ConnectionCreate
{
	#[\JMS\Serializer\Annotation\SerializedName('destinationId')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $destinationId;
    
	#[\JMS\Serializer\Annotation\SerializedName('geography')]
    #[\JMS\Serializer\Annotation\Type('enum<airbyte\airbyte_oss\Models\Shared\Geography>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?Geography $geography = null;
    
    /**
     * Optional name of the connection
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
     * @var ?\airbyte\airbyte_oss\Models\Shared\NamespaceDefinitionType $namespaceDefinition
     */
	#[\JMS\Serializer\Annotation\SerializedName('namespaceDefinition')]
    #[\JMS\Serializer\Annotation\Type('enum<airbyte\airbyte_oss\Models\Shared\NamespaceDefinitionType>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?NamespaceDefinitionType $namespaceDefinition = null;
    
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
    #[\JMS\Serializer\Annotation\Type('enum<airbyte\airbyte_oss\Models\Shared\NonBreakingChangesPreference>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?NonBreakingChangesPreference $nonBreakingChangesPreference = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('notifySchemaChanges')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $notifySchemaChanges = null;
    
    /**
     * $operationIds
     * 
     * @var ?array<string> $operationIds
     */
	#[\JMS\Serializer\Annotation\SerializedName('operationIds')]
    #[\JMS\Serializer\Annotation\Type('array<string>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $operationIds = null;
    
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
     * @var ?\airbyte\airbyte_oss\Models\Shared\ConnectionScheduleType $scheduleType
     */
	#[\JMS\Serializer\Annotation\SerializedName('scheduleType')]
    #[\JMS\Serializer\Annotation\Type('enum<airbyte\airbyte_oss\Models\Shared\ConnectionScheduleType>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?ConnectionScheduleType $scheduleType = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('sourceCatalogId')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $sourceCatalogId = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('sourceId')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $sourceId;
    
    /**
     * Active means that data is flowing through the connection. Inactive means it is not. Deprecated means the connection is off and cannot be re-activated. the schema field describes the elements of the schema that will be synced.
     * 
     * @var \airbyte\airbyte_oss\Models\Shared\ConnectionStatus $status
     */
	#[\JMS\Serializer\Annotation\SerializedName('status')]
    #[\JMS\Serializer\Annotation\Type('enum<airbyte\airbyte_oss\Models\Shared\ConnectionStatus>')]
    public ConnectionStatus $status;
    
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
		$this->destinationId = "";
		$this->geography = null;
		$this->name = null;
		$this->namespaceDefinition = null;
		$this->namespaceFormat = null;
		$this->nonBreakingChangesPreference = null;
		$this->notifySchemaChanges = null;
		$this->operationIds = null;
		$this->prefix = null;
		$this->resourceRequirements = null;
		$this->schedule = null;
		$this->scheduleData = null;
		$this->scheduleType = null;
		$this->sourceCatalogId = null;
		$this->sourceId = "";
		$this->status = \airbyte\airbyte_oss\Models\Shared\ConnectionStatus::Active;
		$this->syncCatalog = null;
	}
}
