# sourceDefinitionSpecification

## Overview

SourceDefinition specification related resources.

### Available Operations

* [getSourceDefinitionSpecification](#getsourcedefinitionspecification) - Get specification for a SourceDefinition.

## getSourceDefinitionSpecification

Get specification for a SourceDefinition.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \airbyte\airbyte_oss\SDK;
use \airbyte\airbyte_oss\Models\Shared\SourceDefinitionIdWithWorkspaceId;

$sdk = SDK::builder()
    ->build();

try {
    $request = new SourceDefinitionIdWithWorkspaceId();
    $request->sourceDefinitionId = '15717230-5377-4dcf-a89d-f975e3566860';
    $request->workspaceId = '92e9c3dd-c5f1-411d-aa10-26d541a4d190';

    $response = $sdk->sourceDefinitionSpecification->getSourceDefinitionSpecification($request);

    if ($response->sourceDefinitionSpecificationRead !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                        | Type                                                                                                                             | Required                                                                                                                         | Description                                                                                                                      |
| -------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                       | [\airbyte\airbyte_oss\Models\Shared\SourceDefinitionIdWithWorkspaceId](../../models/shared/SourceDefinitionIdWithWorkspaceId.md) | :heavy_check_mark:                                                                                                               | The request object to use for the request.                                                                                       |


### Response

**[?\airbyte\airbyte_oss\Models\Operations\GetSourceDefinitionSpecificationResponse](../../models/operations/GetSourceDefinitionSpecificationResponse.md)**

