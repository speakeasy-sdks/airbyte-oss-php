<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace airbyte\airbyte_oss\Models\Shared;


/**
 * WebBackendConnectionRead - Successful operation
 * 
 * @package airbyte\airbyte_oss\Models\Shared
 * @access public
 */
class WebBackendConnectionRead
{
    /**
     * Describes the difference between two Airbyte catalogs.
     * 
     * @var ?\airbyte\airbyte_oss\Models\Shared\CatalogDiff $catalogDiff
     */
	#[\JMS\Serializer\Annotation\SerializedName('catalogDiff')]
    #[\JMS\Serializer\Annotation\Type('airbyte\airbyte_oss\Models\Shared\CatalogDiff')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?CatalogDiff $catalogDiff = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('catalogId')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $catalogId = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('connectionId')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $connectionId;
    
	#[\JMS\Serializer\Annotation\SerializedName('destination')]
    #[\JMS\Serializer\Annotation\Type('airbyte\airbyte_oss\Models\Shared\DestinationRead')]
    public DestinationRead $destination;
    
	#[\JMS\Serializer\Annotation\SerializedName('destinationId')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $destinationId;
    
	#[\JMS\Serializer\Annotation\SerializedName('geography')]
    #[\JMS\Serializer\Annotation\Type('enum<airbyte\airbyte_oss\Models\Shared\Geography>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?Geography $geography = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('isSyncing')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    public bool $isSyncing;
    
    /**
     * epoch time of the latest sync job. null if no sync job has taken place.
     * 
     * @var ?int $latestSyncJobCreatedAt
     */
	#[\JMS\Serializer\Annotation\SerializedName('latestSyncJobCreatedAt')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $latestSyncJobCreatedAt = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('latestSyncJobStatus')]
    #[\JMS\Serializer\Annotation\Type('enum<airbyte\airbyte_oss\Models\Shared\JobStatus>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?JobStatus $latestSyncJobStatus = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('name')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $name;
    
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
    public NonBreakingChangesPreference $nonBreakingChangesPreference;
    
	#[\JMS\Serializer\Annotation\SerializedName('notifySchemaChanges')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    public bool $notifySchemaChanges;
    
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
     * $operations
     * 
     * @var ?array<\airbyte\airbyte_oss\Models\Shared\OperationRead> $operations
     */
	#[\JMS\Serializer\Annotation\SerializedName('operations')]
    #[\JMS\Serializer\Annotation\Type('array<airbyte\airbyte_oss\Models\Shared\OperationRead>')]
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
     * @var ?\airbyte\airbyte_oss\Models\Shared\ConnectionScheduleType $scheduleType
     */
	#[\JMS\Serializer\Annotation\SerializedName('scheduleType')]
    #[\JMS\Serializer\Annotation\Type('enum<airbyte\airbyte_oss\Models\Shared\ConnectionScheduleType>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?ConnectionScheduleType $scheduleType = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('schemaChange')]
    #[\JMS\Serializer\Annotation\Type('enum<airbyte\airbyte_oss\Models\Shared\SchemaChange>')]
    public SchemaChange $schemaChange;
    
	#[\JMS\Serializer\Annotation\SerializedName('source')]
    #[\JMS\Serializer\Annotation\Type('airbyte\airbyte_oss\Models\Shared\SourceRead')]
    public SourceRead $source;
    
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
     * @var \airbyte\airbyte_oss\Models\Shared\AirbyteCatalog $syncCatalog
     */
	#[\JMS\Serializer\Annotation\SerializedName('syncCatalog')]
    #[\JMS\Serializer\Annotation\Type('airbyte\airbyte_oss\Models\Shared\AirbyteCatalog')]
    public AirbyteCatalog $syncCatalog;
    
	public function __construct()
	{
		$this->catalogDiff = null;
		$this->catalogId = null;
		$this->connectionId = "";
		$this->destination = new \airbyte\airbyte_oss\Models\Shared\DestinationRead();
		$this->destinationId = "";
		$this->geography = null;
		$this->isSyncing = false;
		$this->latestSyncJobCreatedAt = null;
		$this->latestSyncJobStatus = null;
		$this->name = "";
		$this->namespaceDefinition = null;
		$this->namespaceFormat = null;
		$this->nonBreakingChangesPreference = \airbyte\airbyte_oss\Models\Shared\NonBreakingChangesPreference::Ignore;
		$this->notifySchemaChanges = false;
		$this->operationIds = null;
		$this->operations = null;
		$this->prefix = null;
		$this->resourceRequirements = null;
		$this->schedule = null;
		$this->scheduleData = null;
		$this->scheduleType = null;
		$this->schemaChange = \airbyte\airbyte_oss\Models\Shared\SchemaChange::NoChange;
		$this->source = new \airbyte\airbyte_oss\Models\Shared\SourceRead();
		$this->sourceId = "";
		$this->status = \airbyte\airbyte_oss\Models\Shared\ConnectionStatus::Active;
		$this->syncCatalog = new \airbyte\airbyte_oss\Models\Shared\AirbyteCatalog();
	}
}
