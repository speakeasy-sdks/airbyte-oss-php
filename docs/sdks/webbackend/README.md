# webBackend

## Overview

Endpoints for the Airbyte web application. Those APIs should not be called outside the web application implementation and are not
guaranteeing any backwards compatibility.


### Available Operations

* [getStateType](#getstatetype) - Fetch the current state type for a connection.
* [webBackendCheckUpdates](#webbackendcheckupdates) - Returns a summary of source and destination definitions that could be updated.
* [webBackendCreateConnection](#webbackendcreateconnection) - Create a connection
* [webBackendGetConnection](#webbackendgetconnection) - Get a connection
* [webBackendGetWorkspaceState](#webbackendgetworkspacestate) - Returns the current state of a workspace
* [webBackendListConnectionsForWorkspace](#webbackendlistconnectionsforworkspace) - Returns all non-deleted connections for a workspace.
* [webBackendListGeographies](#webbackendlistgeographies) - Returns available geographies can be selected to run data syncs in a particular geography.
The 'auto' entry indicates that the sync will be automatically assigned to a geography according
to the platform default behavior. Entries other than 'auto' are two-letter country codes that
follow the ISO 3166-1 alpha-2 standard.

* [webBackendUpdateConnection](#webbackendupdateconnection) - Update a connection

## getStateType

Fetch the current state type for a connection.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \airbyte\airbyte_oss\SDK;
use \airbyte\airbyte_oss\Models\Shared\ConnectionIdRequestBody;

$sdk = SDK::builder()
    ->build();

try {
    $request = new ConnectionIdRequestBody();
    $request->connectionId = '2b78f156-2639-48a0-9c76-6324ccb06c8c';

    $response = $sdk->webBackend->getStateType($request);

    if ($response->connectionStateType !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                    | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                   | [\airbyte\airbyte_oss\Models\Shared\ConnectionIdRequestBody](../../models/shared/ConnectionIdRequestBody.md) | :heavy_check_mark:                                                                                           | The request object to use for the request.                                                                   |


### Response

**[?\airbyte\airbyte_oss\Models\Operations\GetStateTypeResponse](../../models/operations/GetStateTypeResponse.md)**


## webBackendCheckUpdates

Returns a summary of source and destination definitions that could be updated.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \airbyte\airbyte_oss\SDK;

$sdk = SDK::builder()
    ->build();

try {
    $response = $sdk->webBackend->webBackendCheckUpdates();

    if ($response->webBackendCheckUpdatesRead !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```


### Response

**[?\airbyte\airbyte_oss\Models\Operations\WebBackendCheckUpdatesResponse](../../models/operations/WebBackendCheckUpdatesResponse.md)**


## webBackendCreateConnection

Create a connection

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \airbyte\airbyte_oss\SDK;
use \airbyte\airbyte_oss\Models\Shared\WebBackendConnectionCreate;
use \airbyte\airbyte_oss\Models\Shared\Geography;
use \airbyte\airbyte_oss\Models\Shared\NamespaceDefinitionType;
use \airbyte\airbyte_oss\Models\Shared\NonBreakingChangesPreference;
use \airbyte\airbyte_oss\Models\Shared\OperationCreate;
use \airbyte\airbyte_oss\Models\Shared\OperatorConfiguration;
use \airbyte\airbyte_oss\Models\Shared\OperatorDbt;
use \airbyte\airbyte_oss\Models\Shared\OperatorNormalization;
use \airbyte\airbyte_oss\Models\Shared\OperatorNormalizationOption;
use \airbyte\airbyte_oss\Models\Shared\OperatorType;
use \airbyte\airbyte_oss\Models\Shared\OperatorWebhook;
use \airbyte\airbyte_oss\Models\Shared\OperatorWebhookDbtCloud;
use \airbyte\airbyte_oss\Models\Shared\OperatorWebhookWebhookType;
use \airbyte\airbyte_oss\Models\Shared\ResourceRequirements;
use \airbyte\airbyte_oss\Models\Shared\ConnectionSchedule;
use \airbyte\airbyte_oss\Models\Shared\ConnectionScheduleTimeUnit;
use \airbyte\airbyte_oss\Models\Shared\ConnectionScheduleData;
use \airbyte\airbyte_oss\Models\Shared\ConnectionScheduleDataBasicSchedule;
use \airbyte\airbyte_oss\Models\Shared\ConnectionScheduleDataBasicScheduleTimeUnit;
use \airbyte\airbyte_oss\Models\Shared\ConnectionScheduleDataCron;
use \airbyte\airbyte_oss\Models\Shared\ConnectionScheduleType;
use \airbyte\airbyte_oss\Models\Shared\ConnectionStatus;
use \airbyte\airbyte_oss\Models\Shared\AirbyteCatalog;
use \airbyte\airbyte_oss\Models\Shared\AirbyteStreamAndConfiguration;
use \airbyte\airbyte_oss\Models\Shared\AirbyteStreamConfiguration;
use \airbyte\airbyte_oss\Models\Shared\DestinationSyncMode;
use \airbyte\airbyte_oss\Models\Shared\SelectedFieldInfo;
use \airbyte\airbyte_oss\Models\Shared\SyncMode;
use \airbyte\airbyte_oss\Models\Shared\AirbyteStream;
use \airbyte\airbyte_oss\Models\Shared\StreamJsonSchema;

$sdk = SDK::builder()
    ->build();

try {
    $request = new WebBackendConnectionCreate();
    $request->destinationId = 'a12d0252-9270-4b8d-9722-dd895b8bcf24';
    $request->geography = Geography::Eu;
    $request->name = 'Kent Hickle';
    $request->namespaceDefinition = NamespaceDefinitionType::Destination;
    $request->namespaceFormat = '${SOURCE_NAMESPACE}';
    $request->nonBreakingChangesPreference = NonBreakingChangesPreference::Ignore;
    $request->operationIds = [
        '52f74533-994d-478d-a3b6-e9389f5abb7f',
    ];
    $request->operations = [
        new OperationCreate(),
        new OperationCreate(),
    ];
    $request->prefix = 'commodi';
    $request->resourceRequirements = new ResourceRequirements();
    $request->resourceRequirements->cpuLimit = 'fugit';
    $request->resourceRequirements->cpuRequest = 'ullam';
    $request->resourceRequirements->memoryLimit = 'ullam';
    $request->resourceRequirements->memoryRequest = 'doloremque';
    $request->schedule = new ConnectionSchedule();
    $request->schedule->timeUnit = ConnectionScheduleTimeUnit::Weeks;
    $request->schedule->units = 184204;
    $request->scheduleData = new ConnectionScheduleData();
    $request->scheduleData->basicSchedule = new ConnectionScheduleDataBasicSchedule();
    $request->scheduleData->basicSchedule->timeUnit = ConnectionScheduleDataBasicScheduleTimeUnit::Days;
    $request->scheduleData->basicSchedule->units = 237189;
    $request->scheduleData->cron = new ConnectionScheduleDataCron();
    $request->scheduleData->cron->cronExpression = 'totam';
    $request->scheduleData->cron->cronTimeZone = 'qui';
    $request->scheduleType = ConnectionScheduleType::Basic;
    $request->sourceCatalogId = 'c483afd2-315b-4ba6-9016-4e06f5bf6ae5';
    $request->sourceId = '91bc8bde-f361-42b6-bc20-5fda840774a6';
    $request->status = ConnectionStatus::Inactive;
    $request->syncCatalog = new AirbyteCatalog();
    $request->syncCatalog->streams = [
        new AirbyteStreamAndConfiguration(),
        new AirbyteStreamAndConfiguration(),
        new AirbyteStreamAndConfiguration(),
    ];

    $response = $sdk->webBackend->webBackendCreateConnection($request);

    if ($response->webBackendConnectionRead !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                          | Type                                                                                                               | Required                                                                                                           | Description                                                                                                        |
| ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                         | [\airbyte\airbyte_oss\Models\Shared\WebBackendConnectionCreate](../../models/shared/WebBackendConnectionCreate.md) | :heavy_check_mark:                                                                                                 | The request object to use for the request.                                                                         |


### Response

**[?\airbyte\airbyte_oss\Models\Operations\WebBackendCreateConnectionResponse](../../models/operations/WebBackendCreateConnectionResponse.md)**


## webBackendGetConnection

Get a connection

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \airbyte\airbyte_oss\SDK;
use \airbyte\airbyte_oss\Models\Shared\WebBackendConnectionRequestBody;

$sdk = SDK::builder()
    ->build();

try {
    $request = new WebBackendConnectionRequestBody();
    $request->connectionId = '9a35d086-b6f6-46fe-b020-e9f443b4257b';
    $request->withRefreshedCatalog = false;

    $response = $sdk->webBackend->webBackendGetConnection($request);

    if ($response->webBackendConnectionRead !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                    | Type                                                                                                                         | Required                                                                                                                     | Description                                                                                                                  |
| ---------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                   | [\airbyte\airbyte_oss\Models\Shared\WebBackendConnectionRequestBody](../../models/shared/WebBackendConnectionRequestBody.md) | :heavy_check_mark:                                                                                                           | The request object to use for the request.                                                                                   |


### Response

**[?\airbyte\airbyte_oss\Models\Operations\WebBackendGetConnectionResponse](../../models/operations/WebBackendGetConnectionResponse.md)**


## webBackendGetWorkspaceState

Returns the current state of a workspace

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \airbyte\airbyte_oss\SDK;
use \airbyte\airbyte_oss\Models\Shared\WebBackendWorkspaceState;

$sdk = SDK::builder()
    ->build();

try {
    $request = new WebBackendWorkspaceState();
    $request->workspaceId = '992c8dbd-a6a6-41ef-a219-8258fd0a9eba';

    $response = $sdk->webBackend->webBackendGetWorkspaceState($request);

    if ($response->webBackendWorkspaceStateResult !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                      | Type                                                                                                           | Required                                                                                                       | Description                                                                                                    |
| -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                     | [\airbyte\airbyte_oss\Models\Shared\WebBackendWorkspaceState](../../models/shared/WebBackendWorkspaceState.md) | :heavy_check_mark:                                                                                             | The request object to use for the request.                                                                     |


### Response

**[?\airbyte\airbyte_oss\Models\Operations\WebBackendGetWorkspaceStateResponse](../../models/operations/WebBackendGetWorkspaceStateResponse.md)**


## webBackendListConnectionsForWorkspace

Returns all non-deleted connections for a workspace.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \airbyte\airbyte_oss\SDK;
use \airbyte\airbyte_oss\Models\Shared\WebBackendConnectionListRequestBody;

$sdk = SDK::builder()
    ->build();

try {
    $request = new WebBackendConnectionListRequestBody();
    $request->destinationId = [
        '7f7d3ef0-4964-40d6-a183-1c87adf596fd',
        'f1ad837a-e80c-41c1-9c95-ba998678fa3f',
    ];
    $request->sourceId = [
        '96991af3-88ce-4036-9444-8c7977a0ef2f',
        '536028ef-eef9-4341-92ed-7e253f4c157d',
    ];
    $request->workspaceId = 'eaa7170f-445a-4ccf-a67a-af9bbad185fe';

    $response = $sdk->webBackend->webBackendListConnectionsForWorkspace($request);

    if ($response->webBackendConnectionReadList !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                            | Type                                                                                                                                 | Required                                                                                                                             | Description                                                                                                                          |
| ------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                                           | [\airbyte\airbyte_oss\Models\Shared\WebBackendConnectionListRequestBody](../../models/shared/WebBackendConnectionListRequestBody.md) | :heavy_check_mark:                                                                                                                   | The request object to use for the request.                                                                                           |


### Response

**[?\airbyte\airbyte_oss\Models\Operations\WebBackendListConnectionsForWorkspaceResponse](../../models/operations/WebBackendListConnectionsForWorkspaceResponse.md)**


## webBackendListGeographies

Returns all available geographies in which a data sync can run.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \airbyte\airbyte_oss\SDK;

$sdk = SDK::builder()
    ->build();

try {
    $response = $sdk->webBackend->webBackendListGeographies();

    if ($response->webBackendGeographiesListResult !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```


### Response

**[?\airbyte\airbyte_oss\Models\Operations\WebBackendListGeographiesResponse](../../models/operations/WebBackendListGeographiesResponse.md)**


## webBackendUpdateConnection

Apply a patch-style update to a connection. Only fields present on the update request body will be updated.
Any operations that lack an ID will be created. Then, the newly created operationId will be applied to the
connection along with the rest of the operationIds in the request body.
Apply a patch-style update to a connection. Only fields present on the update request body will be updated.
Note that if a catalog is present in the request body, the connection's entire catalog will be replaced
with the catalog from the request. This means that to modify a single stream, the entire new catalog
containing the updated stream needs to be sent.


### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \airbyte\airbyte_oss\SDK;
use \airbyte\airbyte_oss\Models\Shared\WebBackendConnectionUpdate;
use \airbyte\airbyte_oss\Models\Shared\Geography;
use \airbyte\airbyte_oss\Models\Shared\NamespaceDefinitionType;
use \airbyte\airbyte_oss\Models\Shared\NonBreakingChangesPreference;
use \airbyte\airbyte_oss\Models\Shared\WebBackendOperationCreateOrUpdate;
use \airbyte\airbyte_oss\Models\Shared\OperatorConfiguration;
use \airbyte\airbyte_oss\Models\Shared\OperatorDbt;
use \airbyte\airbyte_oss\Models\Shared\OperatorNormalization;
use \airbyte\airbyte_oss\Models\Shared\OperatorNormalizationOption;
use \airbyte\airbyte_oss\Models\Shared\OperatorType;
use \airbyte\airbyte_oss\Models\Shared\OperatorWebhook;
use \airbyte\airbyte_oss\Models\Shared\OperatorWebhookDbtCloud;
use \airbyte\airbyte_oss\Models\Shared\OperatorWebhookWebhookType;
use \airbyte\airbyte_oss\Models\Shared\ResourceRequirements;
use \airbyte\airbyte_oss\Models\Shared\ConnectionSchedule;
use \airbyte\airbyte_oss\Models\Shared\ConnectionScheduleTimeUnit;
use \airbyte\airbyte_oss\Models\Shared\ConnectionScheduleData;
use \airbyte\airbyte_oss\Models\Shared\ConnectionScheduleDataBasicSchedule;
use \airbyte\airbyte_oss\Models\Shared\ConnectionScheduleDataBasicScheduleTimeUnit;
use \airbyte\airbyte_oss\Models\Shared\ConnectionScheduleDataCron;
use \airbyte\airbyte_oss\Models\Shared\ConnectionScheduleType;
use \airbyte\airbyte_oss\Models\Shared\ConnectionStatus;
use \airbyte\airbyte_oss\Models\Shared\AirbyteCatalog;
use \airbyte\airbyte_oss\Models\Shared\AirbyteStreamAndConfiguration;
use \airbyte\airbyte_oss\Models\Shared\AirbyteStreamConfiguration;
use \airbyte\airbyte_oss\Models\Shared\DestinationSyncMode;
use \airbyte\airbyte_oss\Models\Shared\SelectedFieldInfo;
use \airbyte\airbyte_oss\Models\Shared\SyncMode;
use \airbyte\airbyte_oss\Models\Shared\AirbyteStream;
use \airbyte\airbyte_oss\Models\Shared\StreamJsonSchema;

$sdk = SDK::builder()
    ->build();

try {
    $request = new WebBackendConnectionUpdate();
    $request->connectionId = '431d6bf5-c838-4fbb-8c20-cb67fc4b425e';
    $request->geography = Geography::Us;
    $request->name = 'Rogelio Howe';
    $request->namespaceDefinition = NamespaceDefinitionType::Source;
    $request->namespaceFormat = '${SOURCE_NAMESPACE}';
    $request->nonBreakingChangesPreference = NonBreakingChangesPreference::Disable;
    $request->notifySchemaChanges = false;
    $request->operations = [
        new WebBackendOperationCreateOrUpdate(),
        new WebBackendOperationCreateOrUpdate(),
        new WebBackendOperationCreateOrUpdate(),
    ];
    $request->prefix = 'reiciendis';
    $request->resourceRequirements = new ResourceRequirements();
    $request->resourceRequirements->cpuLimit = 'voluptate';
    $request->resourceRequirements->cpuRequest = 'tempore';
    $request->resourceRequirements->memoryLimit = 'in';
    $request->resourceRequirements->memoryRequest = 'omnis';
    $request->schedule = new ConnectionSchedule();
    $request->schedule->timeUnit = ConnectionScheduleTimeUnit::Months;
    $request->schedule->units = 950337;
    $request->scheduleData = new ConnectionScheduleData();
    $request->scheduleData->basicSchedule = new ConnectionScheduleDataBasicSchedule();
    $request->scheduleData->basicSchedule->timeUnit = ConnectionScheduleDataBasicScheduleTimeUnit::Months;
    $request->scheduleData->basicSchedule->units = 711572;
    $request->scheduleData->cron = new ConnectionScheduleDataCron();
    $request->scheduleData->cron->cronExpression = 'iusto';
    $request->scheduleData->cron->cronTimeZone = 'esse';
    $request->scheduleType = ConnectionScheduleType::Cron;
    $request->skipReset = false;
    $request->sourceCatalogId = '5c38d4ba-f91e-4506-af89-0a54b475f16f';
    $request->status = ConnectionStatus::Active;
    $request->syncCatalog = new AirbyteCatalog();
    $request->syncCatalog->streams = [
        new AirbyteStreamAndConfiguration(),
        new AirbyteStreamAndConfiguration(),
    ];

    $response = $sdk->webBackend->webBackendUpdateConnection($request);

    if ($response->webBackendConnectionRead !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                          | Type                                                                                                               | Required                                                                                                           | Description                                                                                                        |
| ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                         | [\airbyte\airbyte_oss\Models\Shared\WebBackendConnectionUpdate](../../models/shared/WebBackendConnectionUpdate.md) | :heavy_check_mark:                                                                                                 | The request object to use for the request.                                                                         |


### Response

**[?\airbyte\airbyte_oss\Models\Operations\WebBackendUpdateConnectionResponse](../../models/operations/WebBackendUpdateConnectionResponse.md)**

