# destination

## Overview

Destination related resources.

### Available Operations

* [checkConnectionToDestination](#checkconnectiontodestination) - Check connection to the destination
* [checkConnectionToDestinationForUpdate](#checkconnectiontodestinationforupdate) - Check connection for a proposed update to a destination
* [cloneDestination](#clonedestination) - Clone destination
* [createDestination](#createdestination) - Create a destination
* [deleteDestination](#deletedestination) - Delete the destination
* [getDestination](#getdestination) - Get configured destination
* [listDestinationsForWorkspace](#listdestinationsforworkspace) - List configured destinations for a workspace
* [searchDestinations](#searchdestinations) - Search destinations
* [updateDestination](#updatedestination) - Update a destination

## checkConnectionToDestination

Check connection to the destination

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \airbyte\airbyte_oss\SDK;
use \airbyte\airbyte_oss\Models\Shared\DestinationIdRequestBody;

$sdk = SDK::builder()
    ->build();

try {
    $request = new DestinationIdRequestBody();
    $request->destinationId = '8f3a8d8f-5c0b-42f2-bb7b-194a276b2691';

    $response = $sdk->destination->checkConnectionToDestination($request);

    if ($response->checkConnectionRead !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                      | Type                                                                                                           | Required                                                                                                       | Description                                                                                                    |
| -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                     | [\airbyte\airbyte_oss\Models\Shared\DestinationIdRequestBody](../../models/shared/DestinationIdRequestBody.md) | :heavy_check_mark:                                                                                             | The request object to use for the request.                                                                     |


### Response

**[?\airbyte\airbyte_oss\Models\Operations\CheckConnectionToDestinationResponse](../../models/operations/CheckConnectionToDestinationResponse.md)**


## checkConnectionToDestinationForUpdate

Check connection for a proposed update to a destination

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \airbyte\airbyte_oss\SDK;
use \airbyte\airbyte_oss\Models\Shared\DestinationUpdate;

$sdk = SDK::builder()
    ->build();

try {
    $request = new DestinationUpdate();
    $request->connectionConfiguration = 'suscipit';
    $request->destinationId = 'fe1f08f4-294e-4369-8f44-7f603e8b445e';
    $request->name = 'Mark Rolfson';

    $response = $sdk->destination->checkConnectionToDestinationForUpdate($request);

    if ($response->checkConnectionRead !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [\airbyte\airbyte_oss\Models\Shared\DestinationUpdate](../../models/shared/DestinationUpdate.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |


### Response

**[?\airbyte\airbyte_oss\Models\Operations\CheckConnectionToDestinationForUpdateResponse](../../models/operations/CheckConnectionToDestinationForUpdateResponse.md)**


## cloneDestination

Clone destination

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \airbyte\airbyte_oss\SDK;
use \airbyte\airbyte_oss\Models\Shared\DestinationCloneRequestBody;
use \airbyte\airbyte_oss\Models\Shared\DestinationCloneConfiguration;

$sdk = SDK::builder()
    ->build();

try {
    $request = new DestinationCloneRequestBody();
    $request->destinationCloneId = '5efd20e4-57e1-4858-b6a8-9fbe3a5aa8e4';
    $request->destinationConfiguration = new DestinationCloneConfiguration();
    $request->destinationConfiguration->connectionConfiguration = 'atque';
    $request->destinationConfiguration->name = 'Miss April Stiedemann';

    $response = $sdk->destination->cloneDestination($request);

    if ($response->destinationRead !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                            | Type                                                                                                                 | Required                                                                                                             | Description                                                                                                          |
| -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                           | [\airbyte\airbyte_oss\Models\Shared\DestinationCloneRequestBody](../../models/shared/DestinationCloneRequestBody.md) | :heavy_check_mark:                                                                                                   | The request object to use for the request.                                                                           |


### Response

**[?\airbyte\airbyte_oss\Models\Operations\CloneDestinationResponse](../../models/operations/CloneDestinationResponse.md)**


## createDestination

Create a destination

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \airbyte\airbyte_oss\SDK;
use \airbyte\airbyte_oss\Models\Shared\DestinationCreate;

$sdk = SDK::builder()
    ->build();

try {
    $request = new DestinationCreate();
    $request->connectionConfiguration = 'magnam';
    $request->destinationDefinitionId = '075088e5-1862-4065-a904-f3b1194b8abf';
    $request->name = 'Patricia Farrell';
    $request->workspaceId = '9f9dfe0a-b7da-48a5-8ce1-87f86bc173d6';

    $response = $sdk->destination->createDestination($request);

    if ($response->destinationRead !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [\airbyte\airbyte_oss\Models\Shared\DestinationCreate](../../models/shared/DestinationCreate.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |


### Response

**[?\airbyte\airbyte_oss\Models\Operations\CreateDestinationResponse](../../models/operations/CreateDestinationResponse.md)**


## deleteDestination

Delete the destination

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \airbyte\airbyte_oss\SDK;
use \airbyte\airbyte_oss\Models\Shared\DestinationIdRequestBody;

$sdk = SDK::builder()
    ->build();

try {
    $request = new DestinationIdRequestBody();
    $request->destinationId = '89eee952-6f8d-4986-a881-ead4f0e10125';

    $response = $sdk->destination->deleteDestination($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                      | Type                                                                                                           | Required                                                                                                       | Description                                                                                                    |
| -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                     | [\airbyte\airbyte_oss\Models\Shared\DestinationIdRequestBody](../../models/shared/DestinationIdRequestBody.md) | :heavy_check_mark:                                                                                             | The request object to use for the request.                                                                     |


### Response

**[?\airbyte\airbyte_oss\Models\Operations\DeleteDestinationResponse](../../models/operations/DeleteDestinationResponse.md)**


## getDestination

Get configured destination

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \airbyte\airbyte_oss\SDK;
use \airbyte\airbyte_oss\Models\Shared\DestinationIdRequestBody;

$sdk = SDK::builder()
    ->build();

try {
    $request = new DestinationIdRequestBody();
    $request->destinationId = '63f94e29-e973-4e92-aa57-a15be3e06080';

    $response = $sdk->destination->getDestination($request);

    if ($response->destinationRead !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                      | Type                                                                                                           | Required                                                                                                       | Description                                                                                                    |
| -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                     | [\airbyte\airbyte_oss\Models\Shared\DestinationIdRequestBody](../../models/shared/DestinationIdRequestBody.md) | :heavy_check_mark:                                                                                             | The request object to use for the request.                                                                     |


### Response

**[?\airbyte\airbyte_oss\Models\Operations\GetDestinationResponse](../../models/operations/GetDestinationResponse.md)**


## listDestinationsForWorkspace

List configured destinations for a workspace

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
    $request->workspaceId = '7e2b6e3a-b884-45f0-997a-60ff2a54a31e';

    $response = $sdk->destination->listDestinationsForWorkspace($request);

    if ($response->destinationReadList !== null) {
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

**[?\airbyte\airbyte_oss\Models\Operations\ListDestinationsForWorkspaceResponse](../../models/operations/ListDestinationsForWorkspaceResponse.md)**


## searchDestinations

Search destinations

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \airbyte\airbyte_oss\SDK;
use \airbyte\airbyte_oss\Models\Shared\DestinationSearch;

$sdk = SDK::builder()
    ->build();

try {
    $request = new DestinationSearch();
    $request->connectionConfiguration = 'omnis';
    $request->destinationDefinitionId = '4764a3e8-65e7-4956-b925-1a5a9da660ff';
    $request->destinationId = '57bfaad4-f9ef-4c1b-8512-c1032648dc2f';
    $request->destinationName = 'eum';
    $request->name = 'Cathy Breitenberg';
    $request->workspaceId = 'ebfd0e9f-e6c6-432c-a3ae-d0117996312f';

    $response = $sdk->destination->searchDestinations($request);

    if ($response->destinationReadList !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [\airbyte\airbyte_oss\Models\Shared\DestinationSearch](../../models/shared/DestinationSearch.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |


### Response

**[?\airbyte\airbyte_oss\Models\Operations\SearchDestinationsResponse](../../models/operations/SearchDestinationsResponse.md)**


## updateDestination

Update a destination

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \airbyte\airbyte_oss\SDK;
use \airbyte\airbyte_oss\Models\Shared\DestinationUpdate;

$sdk = SDK::builder()
    ->build();

try {
    $request = new DestinationUpdate();
    $request->connectionConfiguration = 'nulla';
    $request->destinationId = 'e0477177-8ff6-41d0-9747-6360a15db6a6';
    $request->name = 'Lisa Kemmer';

    $response = $sdk->destination->updateDestination($request);

    if ($response->destinationRead !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [\airbyte\airbyte_oss\Models\Shared\DestinationUpdate](../../models/shared/DestinationUpdate.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |


### Response

**[?\airbyte\airbyte_oss\Models\Operations\UpdateDestinationResponse](../../models/operations/UpdateDestinationResponse.md)**

