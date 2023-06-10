# sourceDefinition

## Overview

SourceDefinition related resources.

### Available Operations

* [createCustomSourceDefinition](#createcustomsourcedefinition) - Creates a custom sourceDefinition for the given workspace
* [deleteSourceDefinition](#deletesourcedefinition) - Delete a source definition
* [getSourceDefinition](#getsourcedefinition) - Get source
* [getSourceDefinitionForWorkspace](#getsourcedefinitionforworkspace) - Get a sourceDefinition that is configured for the given workspace
* [grantSourceDefinitionToWorkspace](#grantsourcedefinitiontoworkspace) - grant a private, non-custom sourceDefinition to a given workspace
* [listLatestSourceDefinitions](#listlatestsourcedefinitions) - List the latest sourceDefinitions Airbyte supports
* [listPrivateSourceDefinitions](#listprivatesourcedefinitions) - List all private, non-custom sourceDefinitions, and for each indicate whether the given workspace has a grant for using the definition. Used by admins to view and modify a given workspace's grants.
* [listSourceDefinitions](#listsourcedefinitions) - List all the sourceDefinitions the current Airbyte deployment is configured to use
* [listSourceDefinitionsForWorkspace](#listsourcedefinitionsforworkspace) - List all the sourceDefinitions the given workspace is configured to use
* [revokeSourceDefinitionFromWorkspace](#revokesourcedefinitionfromworkspace) - revoke a grant to a private, non-custom sourceDefinition from a given workspace
* [updateSourceDefinition](#updatesourcedefinition) - Update a sourceDefinition

## createCustomSourceDefinition

Creates a custom sourceDefinition for the given workspace

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \airbyte\airbyte_oss\SDK;
use \airbyte\airbyte_oss\Models\Shared\CustomSourceDefinitionCreate;
use \airbyte\airbyte_oss\Models\Shared\SourceDefinitionCreate;
use \airbyte\airbyte_oss\Models\Shared\ActorDefinitionResourceRequirements;
use \airbyte\airbyte_oss\Models\Shared\ResourceRequirements;
use \airbyte\airbyte_oss\Models\Shared\JobTypeResourceLimit;
use \airbyte\airbyte_oss\Models\Shared\JobType;

$sdk = SDK::builder()
    ->build();

try {
    $request = new CustomSourceDefinitionCreate();
    $request->sourceDefinition = new SourceDefinitionCreate();
    $request->sourceDefinition->dockerImageTag = 'eum';
    $request->sourceDefinition->dockerRepository = 'quasi';
    $request->sourceDefinition->documentationUrl = 'https://legitimate-hatchling.net';
    $request->sourceDefinition->icon = 'aliquid';
    $request->sourceDefinition->name = 'Dr. Willis Cassin';
    $request->sourceDefinition->resourceRequirements = new ActorDefinitionResourceRequirements();
    $request->sourceDefinition->resourceRequirements->default = new ResourceRequirements();
    $request->sourceDefinition->resourceRequirements->default->cpuLimit = 'natus';
    $request->sourceDefinition->resourceRequirements->default->cpuRequest = 'illum';
    $request->sourceDefinition->resourceRequirements->default->memoryLimit = 'a';
    $request->sourceDefinition->resourceRequirements->default->memoryRequest = 'impedit';
    $request->sourceDefinition->resourceRequirements->jobSpecific = [
        new JobTypeResourceLimit(),
        new JobTypeResourceLimit(),
        new JobTypeResourceLimit(),
    ];
    $request->workspaceId = '4d6fecd7-9939-4006-aa6d-2d000355338c';

    $response = $sdk->sourceDefinition->createCustomSourceDefinition($request);

    if ($response->sourceDefinitionRead !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                              | Type                                                                                                                   | Required                                                                                                               | Description                                                                                                            |
| ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                             | [\airbyte\airbyte_oss\Models\Shared\CustomSourceDefinitionCreate](../../models/shared/CustomSourceDefinitionCreate.md) | :heavy_check_mark:                                                                                                     | The request object to use for the request.                                                                             |


### Response

**[?\airbyte\airbyte_oss\Models\Operations\CreateCustomSourceDefinitionResponse](../../models/operations/CreateCustomSourceDefinitionResponse.md)**


## deleteSourceDefinition

Delete a source definition

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \airbyte\airbyte_oss\SDK;
use \airbyte\airbyte_oss\Models\Shared\SourceDefinitionIdRequestBody;

$sdk = SDK::builder()
    ->build();

try {
    $request = new SourceDefinitionIdRequestBody();
    $request->sourceDefinitionId = 'ec086fa2-1e91-452c-b311-9167b8e3c8db';

    $response = $sdk->sourceDefinition->deleteSourceDefinition($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                | Type                                                                                                                     | Required                                                                                                                 | Description                                                                                                              |
| ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                               | [\airbyte\airbyte_oss\Models\Shared\SourceDefinitionIdRequestBody](../../models/shared/SourceDefinitionIdRequestBody.md) | :heavy_check_mark:                                                                                                       | The request object to use for the request.                                                                               |


### Response

**[?\airbyte\airbyte_oss\Models\Operations\DeleteSourceDefinitionResponse](../../models/operations/DeleteSourceDefinitionResponse.md)**


## getSourceDefinition

Get source

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \airbyte\airbyte_oss\SDK;
use \airbyte\airbyte_oss\Models\Shared\SourceDefinitionIdRequestBody;

$sdk = SDK::builder()
    ->build();

try {
    $request = new SourceDefinitionIdRequestBody();
    $request->sourceDefinitionId = '03408d6d-364f-4fd4-9590-6d1263d48e93';

    $response = $sdk->sourceDefinition->getSourceDefinition($request);

    if ($response->sourceDefinitionRead !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                | Type                                                                                                                     | Required                                                                                                                 | Description                                                                                                              |
| ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                               | [\airbyte\airbyte_oss\Models\Shared\SourceDefinitionIdRequestBody](../../models/shared/SourceDefinitionIdRequestBody.md) | :heavy_check_mark:                                                                                                       | The request object to use for the request.                                                                               |


### Response

**[?\airbyte\airbyte_oss\Models\Operations\GetSourceDefinitionResponse](../../models/operations/GetSourceDefinitionResponse.md)**


## getSourceDefinitionForWorkspace

Get a sourceDefinition that is configured for the given workspace

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
    $request->sourceDefinitionId = '5c2c9e81-f30b-4e3e-8320-2d7216576506';
    $request->workspaceId = '641870d9-d21f-49ad-830c-4ecc11a08364';

    $response = $sdk->sourceDefinition->getSourceDefinitionForWorkspace($request);

    if ($response->sourceDefinitionRead !== null) {
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

**[?\airbyte\airbyte_oss\Models\Operations\GetSourceDefinitionForWorkspaceResponse](../../models/operations/GetSourceDefinitionForWorkspaceResponse.md)**


## grantSourceDefinitionToWorkspace

grant a private, non-custom sourceDefinition to a given workspace

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
    $request->sourceDefinitionId = '29068b85-02a5-45e7-b73b-c845e320a319';
    $request->workspaceId = 'f4badf94-7c9a-4867-bc42-426665816ddc';

    $response = $sdk->sourceDefinition->grantSourceDefinitionToWorkspace($request);

    if ($response->privateSourceDefinitionRead !== null) {
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

**[?\airbyte\airbyte_oss\Models\Operations\GrantSourceDefinitionToWorkspaceResponse](../../models/operations/GrantSourceDefinitionToWorkspaceResponse.md)**


## listLatestSourceDefinitions

Guaranteed to retrieve the latest information on supported sources.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \airbyte\airbyte_oss\SDK;

$sdk = SDK::builder()
    ->build();

try {
    $response = $sdk->sourceDefinition->listLatestSourceDefinitions();

    if ($response->sourceDefinitionReadList !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```


### Response

**[?\airbyte\airbyte_oss\Models\Operations\ListLatestSourceDefinitionsResponse](../../models/operations/ListLatestSourceDefinitionsResponse.md)**


## listPrivateSourceDefinitions

List all private, non-custom sourceDefinitions, and for each indicate whether the given workspace has a grant for using the definition. Used by admins to view and modify a given workspace's grants.

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
    $request->workspaceId = 'a8ef51fc-b4c5-493e-812c-daad0ec7afed';

    $response = $sdk->sourceDefinition->listPrivateSourceDefinitions($request);

    if ($response->privateSourceDefinitionReadList !== null) {
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

**[?\airbyte\airbyte_oss\Models\Operations\ListPrivateSourceDefinitionsResponse](../../models/operations/ListPrivateSourceDefinitionsResponse.md)**


## listSourceDefinitions

List all the sourceDefinitions the current Airbyte deployment is configured to use

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \airbyte\airbyte_oss\SDK;

$sdk = SDK::builder()
    ->build();

try {
    $response = $sdk->sourceDefinition->listSourceDefinitions();

    if ($response->sourceDefinitionReadList !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```


### Response

**[?\airbyte\airbyte_oss\Models\Operations\ListSourceDefinitionsResponse](../../models/operations/ListSourceDefinitionsResponse.md)**


## listSourceDefinitionsForWorkspace

List all the sourceDefinitions the given workspace is configured to use

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
    $request->workspaceId = 'bd80df44-8a47-4f93-90c5-8880983dabf9';

    $response = $sdk->sourceDefinition->listSourceDefinitionsForWorkspace($request);

    if ($response->sourceDefinitionReadList !== null) {
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

**[?\airbyte\airbyte_oss\Models\Operations\ListSourceDefinitionsForWorkspaceResponse](../../models/operations/ListSourceDefinitionsForWorkspaceResponse.md)**


## revokeSourceDefinitionFromWorkspace

revoke a grant to a private, non-custom sourceDefinition from a given workspace

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
    $request->sourceDefinitionId = 'ef3ffdd9-f7f0-479a-b4d3-5724cdb0f4d2';
    $request->workspaceId = '81187d56-844e-4ded-85a9-065e628bdfc2';

    $response = $sdk->sourceDefinition->revokeSourceDefinitionFromWorkspace($request);

    if ($response->statusCode === 200) {
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

**[?\airbyte\airbyte_oss\Models\Operations\RevokeSourceDefinitionFromWorkspaceResponse](../../models/operations/RevokeSourceDefinitionFromWorkspaceResponse.md)**


## updateSourceDefinition

Update a sourceDefinition

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \airbyte\airbyte_oss\SDK;
use \airbyte\airbyte_oss\Models\Shared\SourceDefinitionUpdate;
use \airbyte\airbyte_oss\Models\Shared\ActorDefinitionResourceRequirements;
use \airbyte\airbyte_oss\Models\Shared\ResourceRequirements;
use \airbyte\airbyte_oss\Models\Shared\JobTypeResourceLimit;
use \airbyte\airbyte_oss\Models\Shared\JobType;

$sdk = SDK::builder()
    ->build();

try {
    $request = new SourceDefinitionUpdate();
    $request->dockerImageTag = 'consequatur';
    $request->resourceRequirements = new ActorDefinitionResourceRequirements();
    $request->resourceRequirements->default = new ResourceRequirements();
    $request->resourceRequirements->default->cpuLimit = 'nesciunt';
    $request->resourceRequirements->default->cpuRequest = 'quia';
    $request->resourceRequirements->default->memoryLimit = 'quidem';
    $request->resourceRequirements->default->memoryRequest = 'voluptas';
    $request->resourceRequirements->jobSpecific = [
        new JobTypeResourceLimit(),
        new JobTypeResourceLimit(),
        new JobTypeResourceLimit(),
        new JobTypeResourceLimit(),
    ];
    $request->sourceDefinitionId = '879923b7-e135-484f-bae1-2c6891f82ce1';

    $response = $sdk->sourceDefinition->updateSourceDefinition($request);

    if ($response->sourceDefinitionRead !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [\airbyte\airbyte_oss\Models\Shared\SourceDefinitionUpdate](../../models/shared/SourceDefinitionUpdate.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |


### Response

**[?\airbyte\airbyte_oss\Models\Operations\UpdateSourceDefinitionResponse](../../models/operations/UpdateSourceDefinitionResponse.md)**

