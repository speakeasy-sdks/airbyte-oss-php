# destinationDefinitionSpecification

## Overview

DestinationDefinitionSpecification related resources.

### Available Operations

* [getDestinationDefinitionSpecification](#getdestinationdefinitionspecification) - Get specification for a destinationDefinition

## getDestinationDefinitionSpecification

Get specification for a destinationDefinition

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \airbyte\airbyte_oss\SDK;
use \airbyte\airbyte_oss\Models\Shared\DestinationDefinitionIdWithWorkspaceId;

$sdk = SDK::builder()
    ->build();

try {
    $request = new DestinationDefinitionIdWithWorkspaceId();
    $request->destinationDefinitionId = '52b895c5-37c6-4454-afb0-b34896c3ca5a';
    $request->workspaceId = 'cfbe2fd5-7075-4779-a917-7deac646ecb5';

    $response = $sdk->destinationDefinitionSpecification->getDestinationDefinitionSpecification($request);

    if ($response->destinationDefinitionSpecificationRead !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                  | Type                                                                                                                                       | Required                                                                                                                                   | Description                                                                                                                                |
| ------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                                                 | [\airbyte\airbyte_oss\Models\Shared\DestinationDefinitionIdWithWorkspaceId](../../models/shared/DestinationDefinitionIdWithWorkspaceId.md) | :heavy_check_mark:                                                                                                                         | The request object to use for the request.                                                                                                 |


### Response

**[?\airbyte\airbyte_oss\Models\Operations\GetDestinationDefinitionSpecificationResponse](../../models/operations/GetDestinationDefinitionSpecificationResponse.md)**

