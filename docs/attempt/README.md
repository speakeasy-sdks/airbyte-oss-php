# attempt

## Overview

Interactions with attempt related resources.

### Available Operations

* [saveStats](#savestats) - For worker to set sync stats of a running attempt.
* [saveSyncConfig](#savesyncconfig) - For worker to save the AttemptSyncConfig for an attempt.
* [setWorkflowInAttempt](#setworkflowinattempt) - For worker to register the workflow id in attempt.

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
    $request->attemptNumber = 623564;
    $request->jobId = 645894;
    $request->stats = new AttemptStats();
    $request->stats->bytesEmitted = 384382;
    $request->stats->estimatedBytes = 437587;
    $request->stats->estimatedRecords = 297534;
    $request->stats->recordsCommitted = 891773;
    $request->stats->recordsEmitted = 56713;
    $request->stats->stateMessagesEmitted = 963663;
    $request->streamStats = [
        new AttemptStreamStats(),
        new AttemptStreamStats(),
    ];

    $response = $sdk->attempt->saveStats($request);

    if ($response->internalOperationResult !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

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
use \airbyte\airbyte_oss\Models\Shared\StreamState;
use \airbyte\airbyte_oss\Models\Shared\StreamDescriptor;
use \airbyte\airbyte_oss\Models\Shared\ConnectionStateType;

$sdk = SDK::builder()
    ->build();

try {
    $request = new SaveAttemptSyncConfigRequestBody();
    $request->attemptNumber = 383441;
    $request->jobId = 477665;
    $request->syncConfig = new AttemptSyncConfig();
    $request->syncConfig->destinationConfiguration = 'minus';
    $request->syncConfig->sourceConfiguration = 'placeat';
    $request->syncConfig->state = new ConnectionState();
    $request->syncConfig->state->connectionId = '8796ed15-1a05-4dfc-addf-7cc78ca1ba92';
    $request->syncConfig->state->globalState = new GlobalState();
    $request->syncConfig->state->globalState->sharedState = [
        'hic' => 'optio',
        'totam' => 'beatae',
        'commodi' => 'molestiae',
    ];
    $request->syncConfig->state->globalState->streamStates = [
        new StreamState(),
        new StreamState(),
    ];
    $request->syncConfig->state->state = [
        'impedit' => 'cum',
    ];
    $request->syncConfig->state->stateType = ConnectionStateType::STREAM;
    $request->syncConfig->state->streamState = [
        new StreamState(),
    ];

    $response = $sdk->attempt->saveSyncConfig($request);

    if ($response->internalOperationResult !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

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
    $request->attemptNumber = 568434;
    $request->jobId = 135218;
    $request->processingTaskQueue = 'perferendis';
    $request->workflowId = 'ad';

    $response = $sdk->attempt->setWorkflowInAttempt($request);

    if ($response->internalOperationResult !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```
