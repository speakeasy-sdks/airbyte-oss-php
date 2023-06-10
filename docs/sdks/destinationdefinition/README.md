# destinationDefinition

## Overview

DestinationDefinition related resources.

### Available Operations

* [createCustomDestinationDefinition](#createcustomdestinationdefinition) - Creates a custom destinationDefinition for the given workspace
* [deleteDestinationDefinition](#deletedestinationdefinition) - Delete a destination definition
* [getDestinationDefinition](#getdestinationdefinition) - Get destinationDefinition
* [getDestinationDefinitionForWorkspace](#getdestinationdefinitionforworkspace) - Get a destinationDefinition that is configured for the given workspace
* [grantDestinationDefinitionToWorkspace](#grantdestinationdefinitiontoworkspace) - grant a private, non-custom destinationDefinition to a given workspace
* [listDestinationDefinitions](#listdestinationdefinitions) - List all the destinationDefinitions the current Airbyte deployment is configured to use
* [listDestinationDefinitionsForWorkspace](#listdestinationdefinitionsforworkspace) - List all the destinationDefinitions the given workspace is configured to use
* [listLatestDestinationDefinitions](#listlatestdestinationdefinitions) - List the latest destinationDefinitions Airbyte supports
* [listPrivateDestinationDefinitions](#listprivatedestinationdefinitions) - List all private, non-custom destinationDefinitions, and for each indicate whether the given workspace has a grant for using the definition. Used by admins to view and modify a given workspace's grants.
* [revokeDestinationDefinitionFromWorkspace](#revokedestinationdefinitionfromworkspace) - revoke a grant to a private, non-custom destinationDefinition from a given workspace
* [updateDestinationDefinition](#updatedestinationdefinition) - Update destinationDefinition

## createCustomDestinationDefinition

Creates a custom destinationDefinition for the given workspace

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \airbyte\airbyte_oss\SDK;
use \airbyte\airbyte_oss\Models\Shared\CustomDestinationDefinitionCreate;
use \airbyte\airbyte_oss\Models\Shared\DestinationDefinitionCreate;
use \airbyte\airbyte_oss\Models\Shared\ActorDefinitionResourceRequirements;
use \airbyte\airbyte_oss\Models\Shared\ResourceRequirements;
use \airbyte\airbyte_oss\Models\Shared\JobTypeResourceLimit;
use \airbyte\airbyte_oss\Models\Shared\JobType;

$sdk = SDK::builder()
    ->build();

try {
    $request = new CustomDestinationDefinitionCreate();
    $request->destinationDefinition = new DestinationDefinitionCreate();
    $request->destinationDefinition->dockerImageTag = 'id';
    $request->destinationDefinition->dockerRepository = 'ab';
    $request->destinationDefinition->documentationUrl = 'https://super-tonic.name';
    $request->destinationDefinition->icon = 'laborum';
    $request->destinationDefinition->name = 'Derek Leuschke PhD';
    $request->destinationDefinition->resourceRequirements = new ActorDefinitionResourceRequirements();
    $request->destinationDefinition->resourceRequirements->default = new ResourceRequirements();
    $request->destinationDefinition->resourceRequirements->default->cpuLimit = 'ex';
    $request->destinationDefinition->resourceRequirements->default->cpuRequest = 'quo';
    $request->destinationDefinition->resourceRequirements->default->memoryLimit = 'ex';
    $request->destinationDefinition->resourceRequirements->default->memoryRequest = 'ut';
    $request->destinationDefinition->resourceRequirements->jobSpecific = [
        new JobTypeResourceLimit(),
        new JobTypeResourceLimit(),
    ];
    $request->workspaceId = 'b08b6189-1baa-40fe-9ade-008e6f8c5f35';

    $response = $sdk->destinationDefinition->createCustomDestinationDefinition($request);

    if ($response->destinationDefinitionRead !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                        | Type                                                                                                                             | Required                                                                                                                         | Description                                                                                                                      |
| -------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                       | [\airbyte\airbyte_oss\Models\Shared\CustomDestinationDefinitionCreate](../../models/shared/CustomDestinationDefinitionCreate.md) | :heavy_check_mark:                                                                                                               | The request object to use for the request.                                                                                       |


### Response

**[?\airbyte\airbyte_oss\Models\Operations\CreateCustomDestinationDefinitionResponse](../../models/operations/CreateCustomDestinationDefinitionResponse.md)**


## deleteDestinationDefinition

Delete a destination definition

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \airbyte\airbyte_oss\SDK;
use \airbyte\airbyte_oss\Models\Shared\DestinationDefinitionIdRequestBody;

$sdk = SDK::builder()
    ->build();

try {
    $request = new DestinationDefinitionIdRequestBody();
    $request->destinationDefinitionId = '0d8cdb5a-3418-4143-8104-21813d5208ec';

    $response = $sdk->destinationDefinition->deleteDestinationDefinition($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                          | Type                                                                                                                               | Required                                                                                                                           | Description                                                                                                                        |
| ---------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                         | [\airbyte\airbyte_oss\Models\Shared\DestinationDefinitionIdRequestBody](../../models/shared/DestinationDefinitionIdRequestBody.md) | :heavy_check_mark:                                                                                                                 | The request object to use for the request.                                                                                         |


### Response

**[?\airbyte\airbyte_oss\Models\Operations\DeleteDestinationDefinitionResponse](../../models/operations/DeleteDestinationDefinitionResponse.md)**


## getDestinationDefinition

Get destinationDefinition

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \airbyte\airbyte_oss\SDK;
use \airbyte\airbyte_oss\Models\Shared\DestinationDefinitionIdRequestBody;

$sdk = SDK::builder()
    ->build();

try {
    $request = new DestinationDefinitionIdRequestBody();
    $request->destinationDefinitionId = 'e7e253b6-6845-41c6-86e2-05e16deab3fe';

    $response = $sdk->destinationDefinition->getDestinationDefinition($request);

    if ($response->destinationDefinitionRead !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                          | Type                                                                                                                               | Required                                                                                                                           | Description                                                                                                                        |
| ---------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                         | [\airbyte\airbyte_oss\Models\Shared\DestinationDefinitionIdRequestBody](../../models/shared/DestinationDefinitionIdRequestBody.md) | :heavy_check_mark:                                                                                                                 | The request object to use for the request.                                                                                         |


### Response

**[?\airbyte\airbyte_oss\Models\Operations\GetDestinationDefinitionResponse](../../models/operations/GetDestinationDefinitionResponse.md)**


## getDestinationDefinitionForWorkspace

Get a destinationDefinition that is configured for the given workspace

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
    $request->destinationDefinitionId = 'c9578a64-5842-473a-8418-d162309fb092';
    $request->workspaceId = '9921aefb-9f58-4c4d-86e6-8e4be056013f';

    $response = $sdk->destinationDefinition->getDestinationDefinitionForWorkspace($request);

    if ($response->destinationDefinitionRead !== null) {
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

**[?\airbyte\airbyte_oss\Models\Operations\GetDestinationDefinitionForWorkspaceResponse](../../models/operations/GetDestinationDefinitionForWorkspaceResponse.md)**


## grantDestinationDefinitionToWorkspace

grant a private, non-custom destinationDefinition to a given workspace

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
    $request->destinationDefinitionId = '59da757a-59ec-4fef-a6ef-1caa3383c2be';
    $request->workspaceId = 'b477373c-8d72-4f64-91db-1f2c4310661e';

    $response = $sdk->destinationDefinition->grantDestinationDefinitionToWorkspace($request);

    if ($response->privateDestinationDefinitionRead !== null) {
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

**[?\airbyte\airbyte_oss\Models\Operations\GrantDestinationDefinitionToWorkspaceResponse](../../models/operations/GrantDestinationDefinitionToWorkspaceResponse.md)**


## listDestinationDefinitions

List all the destinationDefinitions the current Airbyte deployment is configured to use

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \airbyte\airbyte_oss\SDK;

$sdk = SDK::builder()
    ->build();

try {
    $response = $sdk->destinationDefinition->listDestinationDefinitions();

    if ($response->destinationDefinitionReadList !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```


### Response

**[?\airbyte\airbyte_oss\Models\Operations\ListDestinationDefinitionsResponse](../../models/operations/ListDestinationDefinitionsResponse.md)**


## listDestinationDefinitionsForWorkspace

List all the destinationDefinitions the given workspace is configured to use

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \airbyte\airbyte_oss\SDK;
use \airbyte\airbyte_oss\Models\Shared\WorkspaceIdRequestBody;

$sdk = SDK::builder()
    ->build();

try {
    $request = new WorkspaceIdRequestBody();
    $request->workspaceId = '96349e1c-f9e0-46e3-a437-000ae6b6bc9b';

    $response = $sdk->destinationDefinition->listDestinationDefinitionsForWorkspace($request);

    if ($response->destinationDefinitionReadList !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [\airbyte\airbyte_oss\Models\Shared\WorkspaceIdRequestBody](../../models/shared/WorkspaceIdRequestBody.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |


### Response

**[?\airbyte\airbyte_oss\Models\Operations\ListDestinationDefinitionsForWorkspaceResponse](../../models/operations/ListDestinationDefinitionsForWorkspaceResponse.md)**


## listLatestDestinationDefinitions

Guaranteed to retrieve the latest information on supported destinations.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \airbyte\airbyte_oss\SDK;

$sdk = SDK::builder()
    ->build();

try {
    $response = $sdk->destinationDefinition->listLatestDestinationDefinitions();

    if ($response->destinationDefinitionReadList !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```


### Response

**[?\airbyte\airbyte_oss\Models\Operations\ListLatestDestinationDefinitionsResponse](../../models/operations/ListLatestDestinationDefinitionsResponse.md)**


## listPrivateDestinationDefinitions

List all private, non-custom destinationDefinitions, and for each indicate whether the given workspace has a grant for using the definition. Used by admins to view and modify a given workspace's grants.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \airbyte\airbyte_oss\SDK;
use \airbyte\airbyte_oss\Models\Shared\WorkspaceIdRequestBody;

$sdk = SDK::builder()
    ->build();

try {
    $request = new WorkspaceIdRequestBody();
    $request->workspaceId = '8f759eac-55a9-4741-9311-352965bb8a72';

    $response = $sdk->destinationDefinition->listPrivateDestinationDefinitions($request);

    if ($response->privateDestinationDefinitionReadList !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [\airbyte\airbyte_oss\Models\Shared\WorkspaceIdRequestBody](../../models/shared/WorkspaceIdRequestBody.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |


### Response

**[?\airbyte\airbyte_oss\Models\Operations\ListPrivateDestinationDefinitionsResponse](../../models/operations/ListPrivateDestinationDefinitionsResponse.md)**


## revokeDestinationDefinitionFromWorkspace

revoke a grant to a private, non-custom destinationDefinition from a given workspace

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
    $request->destinationDefinitionId = '02611435-e139-4dbc-a259-b1abda8c070e';
    $request->workspaceId = '1084cb06-72d1-4ad8-b9ee-b9665b85efbd';

    $response = $sdk->destinationDefinition->revokeDestinationDefinitionFromWorkspace($request);

    if ($response->statusCode === 200) {
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

**[?\airbyte\airbyte_oss\Models\Operations\RevokeDestinationDefinitionFromWorkspaceResponse](../../models/operations/RevokeDestinationDefinitionFromWorkspaceResponse.md)**


## updateDestinationDefinition

Update destinationDefinition

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \airbyte\airbyte_oss\SDK;
use \airbyte\airbyte_oss\Models\Shared\DestinationDefinitionUpdate;
use \airbyte\airbyte_oss\Models\Shared\ActorDefinitionResourceRequirements;
use \airbyte\airbyte_oss\Models\Shared\ResourceRequirements;
use \airbyte\airbyte_oss\Models\Shared\JobTypeResourceLimit;
use \airbyte\airbyte_oss\Models\Shared\JobType;

$sdk = SDK::builder()
    ->build();

try {
    $request = new DestinationDefinitionUpdate();
    $request->destinationDefinitionId = '02bae0be-2d78-4225-9e3e-a4b5197f9244';
    $request->dockerImageTag = 'nesciunt';
    $request->resourceRequirements = new ActorDefinitionResourceRequirements();
    $request->resourceRequirements->default = new ResourceRequirements();
    $request->resourceRequirements->default->cpuLimit = 'at';
    $request->resourceRequirements->default->cpuRequest = 'officia';
    $request->resourceRequirements->default->memoryLimit = 'dignissimos';
    $request->resourceRequirements->default->memoryRequest = 'optio';
    $request->resourceRequirements->jobSpecific = [
        new JobTypeResourceLimit(),
        new JobTypeResourceLimit(),
        new JobTypeResourceLimit(),
        new JobTypeResourceLimit(),
    ];

    $response = $sdk->destinationDefinition->updateDestinationDefinition($request);

    if ($response->destinationDefinitionRead !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                            | Type                                                                                                                 | Required                                                                                                             | Description                                                                                                          |
| -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                           | [\airbyte\airbyte_oss\Models\Shared\DestinationDefinitionUpdate](../../models/shared/DestinationDefinitionUpdate.md) | :heavy_check_mark:                                                                                                   | The request object to use for the request.                                                                           |


### Response

**[?\airbyte\airbyte_oss\Models\Operations\UpdateDestinationDefinitionResponse](../../models/operations/UpdateDestinationDefinitionResponse.md)**

