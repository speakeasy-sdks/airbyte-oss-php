# state

## Overview

Interactions with state related resources.

### Available Operations

* [createOrUpdateState](#createorupdatestate) - Create or update the state for a connection.
* [getState](#getstate) - Fetch the current state for a connection.

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
    $request->connectionId = '46569462-4070-484f-bab3-7cef02225194';
    $request->connectionState = new ConnectionState();
    $request->connectionState->connectionId = 'db55410a-dc66-49af-90a2-6c7cdc981f06';
    $request->connectionState->globalState = new GlobalState();
    $request->connectionState->globalState->sharedState = new StateBlob();
    $request->connectionState->globalState->streamStates = [
        new StreamState(),
        new StreamState(),
        new StreamState(),
    ];
    $request->connectionState->state = new StateBlob();
    $request->connectionState->stateType = ConnectionStateType::Legacy;
    $request->connectionState->streamState = [
        new StreamState(),
        new StreamState(),
        new StreamState(),
    ];

    $response = $sdk->state->createOrUpdateState($request);

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


## getState

Fetch the current state for a connection.

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
    $request->connectionId = '1d6bb33c-faa3-448c-b1bf-407ee4fcf0c4';

    $response = $sdk->state->getState($request);

    if ($response->connectionState !== null) {
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

**[?\airbyte\airbyte_oss\Models\Operations\GetStateResponse](../../models/operations/GetStateResponse.md)**

