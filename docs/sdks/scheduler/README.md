# scheduler

### Available Operations

* [executeDestinationCheckConnection](#executedestinationcheckconnection) - Run check connection for a given destination configuration
* [executeSourceCheckConnection](#executesourcecheckconnection) - Run check connection for a given source configuration
* [executeSourceDiscoverSchema](#executesourcediscoverschema) - Run discover schema for a given source a source configuration

## executeDestinationCheckConnection

Run check connection for a given destination configuration

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \airbyte\airbyte_oss\SDK;
use \airbyte\airbyte_oss\Models\Shared\DestinationCoreConfig;

$sdk = SDK::builder()
    ->build();

try {
    $request = new DestinationCoreConfig();
    $request->connectionConfiguration = 'commodi';
    $request->destinationDefinitionId = 'ecbb4e24-3cf7-489f-bafe-da53e5ae6e0a';
    $request->destinationId = 'c184c2b9-c247-4c88-b73a-40e1942f32e5';
    $request->workspaceId = '5055756f-5d56-4d0b-90af-2dfe13db4f62';

    $response = $sdk->scheduler->executeDestinationCheckConnection($request);

    if ($response->checkConnectionRead !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [\airbyte\airbyte_oss\Models\Shared\DestinationCoreConfig](../../models/shared/DestinationCoreConfig.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |


### Response

**[?\airbyte\airbyte_oss\Models\Operations\ExecuteDestinationCheckConnectionResponse](../../models/operations/ExecuteDestinationCheckConnectionResponse.md)**


## executeSourceCheckConnection

Run check connection for a given source configuration

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \airbyte\airbyte_oss\SDK;
use \airbyte\airbyte_oss\Models\Shared\SourceCoreConfig;

$sdk = SDK::builder()
    ->build();

try {
    $request = new SourceCoreConfig();
    $request->connectionConfiguration = 'minus';
    $request->sourceDefinitionId = 'ba3f8941-aebc-40b8-8a69-24d3b2ecfcc8';
    $request->sourceId = 'f895010f-5dd3-4d6f-a180-4e54c82f168a';
    $request->workspaceId = '363c8873-e484-4380-b1f6-b8ca275a60a0';

    $response = $sdk->scheduler->executeSourceCheckConnection($request);

    if ($response->checkConnectionRead !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [\airbyte\airbyte_oss\Models\Shared\SourceCoreConfig](../../models/shared/SourceCoreConfig.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |


### Response

**[?\airbyte\airbyte_oss\Models\Operations\ExecuteSourceCheckConnectionResponse](../../models/operations/ExecuteSourceCheckConnectionResponse.md)**


## executeSourceDiscoverSchema

Run discover schema for a given source a source configuration

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \airbyte\airbyte_oss\SDK;
use \airbyte\airbyte_oss\Models\Shared\SourceCoreConfig;

$sdk = SDK::builder()
    ->build();

try {
    $request = new SourceCoreConfig();
    $request->connectionConfiguration = 'dolore';
    $request->sourceDefinitionId = 'c495cc69-9171-4b51-81bd-b1cf4b888ebd';
    $request->sourceId = 'fc4ccca9-9bc7-4fc0-b2dc-e10873e42b00';
    $request->workspaceId = '6d678878-ba85-481a-9820-8c54fefa9c95';

    $response = $sdk->scheduler->executeSourceDiscoverSchema($request);

    if ($response->sourceDiscoverSchemaRead !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [\airbyte\airbyte_oss\Models\Shared\SourceCoreConfig](../../models/shared/SourceCoreConfig.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |


### Response

**[?\airbyte\airbyte_oss\Models\Operations\ExecuteSourceDiscoverSchemaResponse](../../models/operations/ExecuteSourceDiscoverSchemaResponse.md)**

