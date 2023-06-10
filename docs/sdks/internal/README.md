# internal

### Available Operations

* [createOrUpdateState](#createorupdatestate) - Create or update the state for a connection.
* [getAttemptNormalizationStatusesForJob](#getattemptnormalizationstatusesforjob) - Get normalization status to determine if we can bypass normalization phase
* [saveStats](#savestats) - For worker to set sync stats of a running attempt.
* [saveSyncConfig](#savesyncconfig) - For worker to save the AttemptSyncConfig for an attempt.
* [setWorkflowInAttempt](#setworkflowinattempt) - For worker to register the workflow id in attempt.
* [writeDiscoverCatalogResult](#writediscovercatalogresult) - Should only called from worker, to write result from discover activity back to DB.

## createOrUpdateState

Create or update the state for a connection.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \airbyte\airbyte_oss\SDK;
use \airbyte\airbyte_oss\Models\Shared\ConnectionStateCreateOrUpdate;
use \airbyte\airbyte_oss\Models\Shared\ConnectionState;
use \airbyte\airbyte_oss\Models\Shared\GlobalState;
use \airbyte\airbyte_oss\Models\Shared\StateBlob;
use \airbyte\airbyte_oss\Models\Shared\StreamState;
use \airbyte\airbyte_oss\Models\Shared\StreamDescriptor;
use \airbyte\airbyte_oss\Models\Shared\ConnectionStateType;

$sdk = SDK::builder()
    ->build();

try {
    $request = new ConnectionStateCreateOrUpdate();
    $request->connectionId = '607f3c93-c73b-49da-bf2c-eda7e23f2257';
    $request->connectionState = new ConnectionState();
    $request->connectionState->connectionId = '411faf4b-7544-4e47-ae80-2857a5b40463';
    $request->connectionState->globalState = new GlobalState();
    $request->connectionState->globalState->sharedState = new StateBlob();
    $request->connectionState->globalState->streamStates = [
        new StreamState(),
        new StreamState(),
        new StreamState(),
    ];
    $request->connectionState->state = new StateBlob();
    $request->connectionState->stateType = ConnectionStateType::Stream;
    $request->connectionState->streamState = [
        new StreamState(),
        new StreamState(),
        new StreamState(),
        new StreamState(),
    ];

    $response = $sdk->internal->createOrUpdateState($request);

    if ($response->connectionState !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                | Type                                                                                                                     | Required                                                                                                                 | Description                                                                                                              |
| ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                               | [\airbyte\airbyte_oss\Models\Shared\ConnectionStateCreateOrUpdate](../../models/shared/ConnectionStateCreateOrUpdate.md) | :heavy_check_mark:                                                                                                       | The request object to use for the request.                                                                               |


### Response

**[?\airbyte\airbyte_oss\Models\Operations\CreateOrUpdateStateResponse](../../models/operations/CreateOrUpdateStateResponse.md)**


## getAttemptNormalizationStatusesForJob

Get normalization status to determine if we can bypass normalization phase

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \airbyte\airbyte_oss\SDK;
use \airbyte\airbyte_oss\Models\Shared\JobIdRequestBody;

$sdk = SDK::builder()
    ->build();

try {
    $request = new JobIdRequestBody();
    $request->id = 345138;

    $response = $sdk->internal->getAttemptNormalizationStatusesForJob($request);

    if ($response->attemptNormalizationStatusReadList !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [\airbyte\airbyte_oss\Models\Shared\JobIdRequestBody](../../models/shared/JobIdRequestBody.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |


### Response

**[?\airbyte\airbyte_oss\Models\Operations\GetAttemptNormalizationStatusesForJobResponse](../../models/operations/GetAttemptNormalizationStatusesForJobResponse.md)**


## saveStats

For worker to set sync stats of a running attempt.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \airbyte\airbyte_oss\SDK;
use \airbyte\airbyte_oss\Models\Shared\SaveStatsRequestBody;
use \airbyte\airbyte_oss\Models\Shared\AttemptStats;
use \airbyte\airbyte_oss\Models\Shared\AttemptStreamStats;

$sdk = SDK::builder()
    ->build();

try {
    $request = new SaveStatsRequestBody();
    $request->attemptNumber = 475325;
    $request->jobId = 330600;
    $request->stats = new AttemptStats();
    $request->stats->bytesEmitted = 969206;
    $request->stats->estimatedBytes = 66207;
    $request->stats->estimatedRecords = 265632;
    $request->stats->recordsCommitted = 13865;
    $request->stats->recordsEmitted = 13508;
    $request->stats->stateMessagesEmitted = 911657;
    $request->streamStats = [
        new AttemptStreamStats(),
        new AttemptStreamStats(),
    ];

    $response = $sdk->internal->saveStats($request);

    if ($response->internalOperationResult !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [\airbyte\airbyte_oss\Models\Shared\SaveStatsRequestBody](../../models/shared/SaveStatsRequestBody.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |


### Response

**[?\airbyte\airbyte_oss\Models\Operations\SaveStatsResponse](../../models/operations/SaveStatsResponse.md)**


## saveSyncConfig

For worker to save the AttemptSyncConfig for an attempt.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \airbyte\airbyte_oss\SDK;
use \airbyte\airbyte_oss\Models\Shared\SaveAttemptSyncConfigRequestBody;
use \airbyte\airbyte_oss\Models\Shared\AttemptSyncConfig;
use \airbyte\airbyte_oss\Models\Shared\ConnectionState;
use \airbyte\airbyte_oss\Models\Shared\GlobalState;
use \airbyte\airbyte_oss\Models\Shared\StateBlob;
use \airbyte\airbyte_oss\Models\Shared\StreamState;
use \airbyte\airbyte_oss\Models\Shared\StreamDescriptor;
use \airbyte\airbyte_oss\Models\Shared\ConnectionStateType;

$sdk = SDK::builder()
    ->build();

try {
    $request = new SaveAttemptSyncConfigRequestBody();
    $request->attemptNumber = 413758;
    $request->jobId = 256114;
    $request->syncConfig = new AttemptSyncConfig();
    $request->syncConfig->destinationConfiguration = 'dolorum';
    $request->syncConfig->sourceConfiguration = 'possimus';
    $request->syncConfig->state = new ConnectionState();
    $request->syncConfig->state->connectionId = '7334ec1b-781b-436a-8808-8d100efada20';
    $request->syncConfig->state->globalState = new GlobalState();
    $request->syncConfig->state->globalState->sharedState = new StateBlob();
    $request->syncConfig->state->globalState->streamStates = [
        new StreamState(),
    ];
    $request->syncConfig->state->state = new StateBlob();
    $request->syncConfig->state->stateType = ConnectionStateType::NotSet;
    $request->syncConfig->state->streamState = [
        new StreamState(),
        new StreamState(),
        new StreamState(),
        new StreamState(),
    ];

    $response = $sdk->internal->saveSyncConfig($request);

    if ($response->internalOperationResult !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                      | Type                                                                                                                           | Required                                                                                                                       | Description                                                                                                                    |
| ------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                                     | [\airbyte\airbyte_oss\Models\Shared\SaveAttemptSyncConfigRequestBody](../../models/shared/SaveAttemptSyncConfigRequestBody.md) | :heavy_check_mark:                                                                                                             | The request object to use for the request.                                                                                     |


### Response

**[?\airbyte\airbyte_oss\Models\Operations\SaveSyncConfigResponse](../../models/operations/SaveSyncConfigResponse.md)**


## setWorkflowInAttempt

For worker to register the workflow id in attempt.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \airbyte\airbyte_oss\SDK;
use \airbyte\airbyte_oss\Models\Shared\SetWorkflowInAttemptRequestBody;

$sdk = SDK::builder()
    ->build();

try {
    $request = new SetWorkflowInAttemptRequestBody();
    $request->attemptNumber = 27982;
    $request->jobId = 278325;
    $request->processingTaskQueue = 'qui';
    $request->workflowId = 'qui';

    $response = $sdk->internal->setWorkflowInAttempt($request);

    if ($response->internalOperationResult !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                    | Type                                                                                                                         | Required                                                                                                                     | Description                                                                                                                  |
| ---------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                   | [\airbyte\airbyte_oss\Models\Shared\SetWorkflowInAttemptRequestBody](../../models/shared/SetWorkflowInAttemptRequestBody.md) | :heavy_check_mark:                                                                                                           | The request object to use for the request.                                                                                   |


### Response

**[?\airbyte\airbyte_oss\Models\Operations\SetWorkflowInAttemptResponse](../../models/operations/SetWorkflowInAttemptResponse.md)**


## writeDiscoverCatalogResult

Should only called from worker, to write result from discover activity back to DB.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \airbyte\airbyte_oss\SDK;
use \airbyte\airbyte_oss\Models\Shared\SourceDiscoverSchemaWriteRequestBody;
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
    $request = new SourceDiscoverSchemaWriteRequestBody();
    $request->catalog = new AirbyteCatalog();
    $request->catalog->streams = [
        new AirbyteStreamAndConfiguration(),
        new AirbyteStreamAndConfiguration(),
        new AirbyteStreamAndConfiguration(),
        new AirbyteStreamAndConfiguration(),
    ];
    $request->configurationHash = 'harum';
    $request->connectorVersion = 'explicabo';
    $request->sourceId = '164cf9ab-8366-4c72-bffd-a9e06bee4825';

    $response = $sdk->internal->writeDiscoverCatalogResult($request);

    if ($response->discoverCatalogResult !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                              | Type                                                                                                                                   | Required                                                                                                                               | Description                                                                                                                            |
| -------------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                             | [\airbyte\airbyte_oss\Models\Shared\SourceDiscoverSchemaWriteRequestBody](../../models/shared/SourceDiscoverSchemaWriteRequestBody.md) | :heavy_check_mark:                                                                                                                     | The request object to use for the request.                                                                                             |


### Response

**[?\airbyte\airbyte_oss\Models\Operations\WriteDiscoverCatalogResultResponse](../../models/operations/WriteDiscoverCatalogResultResponse.md)**

