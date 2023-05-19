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
use \airbyte\airbyte_oss\Models\Shared\StreamState;
use \airbyte\airbyte_oss\Models\Shared\StreamDescriptor;
use \airbyte\airbyte_oss\Models\Shared\ConnectionStateType;

$sdk = SDK::builder()
    ->build();

try {
    $request = new ConnectionStateCreateOrUpdate();
    $request->connectionId = '4cfc1c76-230f-4841-bb1b-d23fdb14db6b';
    $request->connectionState = new ConnectionState();
    $request->connectionState->connectionId = 'e5a68599-8e22-4ae2-8da1-6fc2b271a289';
    $request->connectionState->globalState = new GlobalState();
    $request->connectionState->globalState->sharedState = [
        'ullam' => 'molestiae',
        'itaque' => 'rem',
        'nemo' => 'non',
        'recusandae' => 'omnis',
    ];
    $request->connectionState->globalState->streamStates = [
        new StreamState(),
    ];
    $request->connectionState->state = [
        'dolor' => 'occaecati',
        'quibusdam' => 'magni',
    ];
    $request->connectionState->stateType = ConnectionStateType::GLOBAL;
    $request->connectionState->streamState = [
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
    $request->connectionId = '46569462-4070-484f-bab3-7cef02225194';

    $response = $sdk->state->getState($request);

    if ($response->connectionState !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```
