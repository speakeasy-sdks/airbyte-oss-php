# source

## Overview

Source related resources.

### Available Operations

* [checkConnectionToSource](#checkconnectiontosource) - Check connection to the source
* [checkConnectionToSourceForUpdate](#checkconnectiontosourceforupdate) - Check connection for a proposed update to a source
* [cloneSource](#clonesource) - Clone source
* [createSource](#createsource) - Create a source
* [deleteSource](#deletesource) - Delete a source
* [discoverSchemaForSource](#discoverschemaforsource) - Discover the schema catalog of the source
* [getMostRecentSourceActorCatalog](#getmostrecentsourceactorcatalog) - Get most recent ActorCatalog for source
* [getSource](#getsource) - Get source
* [listSourcesForWorkspace](#listsourcesforworkspace) - List sources for workspace
* [searchSources](#searchsources) - Search sources
* [updateSource](#updatesource) - Update a source
* [writeDiscoverCatalogResult](#writediscovercatalogresult) - Should only called from worker, to write result from discover activity back to DB.

## checkConnectionToSource

Check connection to the source

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \airbyte\airbyte_oss\SDK;
use \airbyte\airbyte_oss\Models\Shared\SourceIdRequestBody;

$sdk = SDK::builder()
    ->build();

try {
    $request = new SourceIdRequestBody();
    $request->sourceId = 'f2eac556-5d30-47cf-ae81-206e2813fa4a';

    $response = $sdk->source->checkConnectionToSource($request);

    if ($response->checkConnectionRead !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [\airbyte\airbyte_oss\Models\Shared\SourceIdRequestBody](../../models/shared/SourceIdRequestBody.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |


### Response

**[?\airbyte\airbyte_oss\Models\Operations\CheckConnectionToSourceResponse](../../models/operations/CheckConnectionToSourceResponse.md)**


## checkConnectionToSourceForUpdate

Check connection for a proposed update to a source

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \airbyte\airbyte_oss\SDK;
use \airbyte\airbyte_oss\Models\Shared\SourceUpdate;

$sdk = SDK::builder()
    ->build();

try {
    $request = new SourceUpdate();
    $request->connectionConfiguration = 'modi';
    $request->name = 'Leticia Gerlach PhD';
    $request->sourceId = '3f2132af-0310-42d5-94f4-cc6f18bf9621';

    $response = $sdk->source->checkConnectionToSourceForUpdate($request);

    if ($response->checkConnectionRead !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [\airbyte\airbyte_oss\Models\Shared\SourceUpdate](../../models/shared/SourceUpdate.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |


### Response

**[?\airbyte\airbyte_oss\Models\Operations\CheckConnectionToSourceForUpdateResponse](../../models/operations/CheckConnectionToSourceForUpdateResponse.md)**


## cloneSource

Clone source

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \airbyte\airbyte_oss\SDK;
use \airbyte\airbyte_oss\Models\Shared\SourceCloneRequestBody;
use \airbyte\airbyte_oss\Models\Shared\SourceCloneConfiguration;

$sdk = SDK::builder()
    ->build();

try {
    $request = new SourceCloneRequestBody();
    $request->sourceCloneId = 'a6a4f77a-87ee-43e4-be75-2c65b34418e3';
    $request->sourceConfiguration = new SourceCloneConfiguration();
    $request->sourceConfiguration->connectionConfiguration = 'expedita';
    $request->sourceConfiguration->name = 'Nick Blanda';

    $response = $sdk->source->cloneSource($request);

    if ($response->sourceRead !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [\airbyte\airbyte_oss\Models\Shared\SourceCloneRequestBody](../../models/shared/SourceCloneRequestBody.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |


### Response

**[?\airbyte\airbyte_oss\Models\Operations\CloneSourceResponse](../../models/operations/CloneSourceResponse.md)**


## createSource

Create a source

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \airbyte\airbyte_oss\SDK;
use \airbyte\airbyte_oss\Models\Shared\SourceCreate;

$sdk = SDK::builder()
    ->build();

try {
    $request = new SourceCreate();
    $request->connectionConfiguration = 'temporibus';
    $request->name = 'Tyrone Halvorson DVM';
    $request->sourceDefinitionId = '8419d8f8-4f14-44f3-a07e-dcc4aa5f3cab';
    $request->workspaceId = 'd905a972-e056-4728-a27b-2d309470bf7a';

    $response = $sdk->source->createSource($request);

    if ($response->sourceRead !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [\airbyte\airbyte_oss\Models\Shared\SourceCreate](../../models/shared/SourceCreate.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |


### Response

**[?\airbyte\airbyte_oss\Models\Operations\CreateSourceResponse](../../models/operations/CreateSourceResponse.md)**


## deleteSource

Delete a source

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \airbyte\airbyte_oss\SDK;
use \airbyte\airbyte_oss\Models\Shared\SourceIdRequestBody;

$sdk = SDK::builder()
    ->build();

try {
    $request = new SourceIdRequestBody();
    $request->sourceId = '4fa87cf5-35a6-4fae-94eb-f60c321f023b';

    $response = $sdk->source->deleteSource($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [\airbyte\airbyte_oss\Models\Shared\SourceIdRequestBody](../../models/shared/SourceIdRequestBody.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |


### Response

**[?\airbyte\airbyte_oss\Models\Operations\DeleteSourceResponse](../../models/operations/DeleteSourceResponse.md)**


## discoverSchemaForSource

Discover the schema catalog of the source

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \airbyte\airbyte_oss\SDK;
use \airbyte\airbyte_oss\Models\Shared\SourceDiscoverSchemaRequestBody;

$sdk = SDK::builder()
    ->build();

try {
    $request = new SourceDiscoverSchemaRequestBody();
    $request->connectionId = '75d2367f-e1a0-4cc8-9f79-f0a396d90c36';
    $request->disableCache = false;
    $request->notifySchemaChange = false;
    $request->sourceId = '4b7c15df-bace-4188-b1c4-ee2c8c6ce611';

    $response = $sdk->source->discoverSchemaForSource($request);

    if ($response->sourceDiscoverSchemaRead !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                    | Type                                                                                                                         | Required                                                                                                                     | Description                                                                                                                  |
| ---------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                   | [\airbyte\airbyte_oss\Models\Shared\SourceDiscoverSchemaRequestBody](../../models/shared/SourceDiscoverSchemaRequestBody.md) | :heavy_check_mark:                                                                                                           | The request object to use for the request.                                                                                   |


### Response

**[?\airbyte\airbyte_oss\Models\Operations\DiscoverSchemaForSourceResponse](../../models/operations/DiscoverSchemaForSourceResponse.md)**


## getMostRecentSourceActorCatalog

Get most recent ActorCatalog for source

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \airbyte\airbyte_oss\SDK;
use \airbyte\airbyte_oss\Models\Shared\SourceIdRequestBody;

$sdk = SDK::builder()
    ->build();

try {
    $request = new SourceIdRequestBody();
    $request->sourceId = 'feeb1c7c-bdb6-4eec-b437-8ba25317747d';

    $response = $sdk->source->getMostRecentSourceActorCatalog($request);

    if ($response->actorCatalogWithUpdatedAt !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [\airbyte\airbyte_oss\Models\Shared\SourceIdRequestBody](../../models/shared/SourceIdRequestBody.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |


### Response

**[?\airbyte\airbyte_oss\Models\Operations\GetMostRecentSourceActorCatalogResponse](../../models/operations/GetMostRecentSourceActorCatalogResponse.md)**


## getSource

Get source

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \airbyte\airbyte_oss\SDK;
use \airbyte\airbyte_oss\Models\Shared\SourceIdRequestBody;

$sdk = SDK::builder()
    ->build();

try {
    $request = new SourceIdRequestBody();
    $request->sourceId = 'c915ad2c-af5d-4d67-a3dc-0f5ae2f3a6b7';

    $response = $sdk->source->getSource($request);

    if ($response->sourceRead !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [\airbyte\airbyte_oss\Models\Shared\SourceIdRequestBody](../../models/shared/SourceIdRequestBody.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |


### Response

**[?\airbyte\airbyte_oss\Models\Operations\GetSourceResponse](../../models/operations/GetSourceResponse.md)**


## listSourcesForWorkspace

List sources for workspace. Does not return deleted sources.

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
    $request->workspaceId = '00878756-143f-45a6-898b-55554080d40b';

    $response = $sdk->source->listSourcesForWorkspace($request);

    if ($response->sourceReadList !== null) {
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

**[?\airbyte\airbyte_oss\Models\Operations\ListSourcesForWorkspaceResponse](../../models/operations/ListSourcesForWorkspaceResponse.md)**


## searchSources

Search sources

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \airbyte\airbyte_oss\SDK;
use \airbyte\airbyte_oss\Models\Shared\SourceSearch;

$sdk = SDK::builder()
    ->build();

try {
    $request = new SourceSearch();
    $request->connectionConfiguration = 'nobis';
    $request->name = 'Gregg Russel';
    $request->sourceDefinitionId = 'bd6b5f3e-c909-4304-b926-bad2553819b4';
    $request->sourceId = '74b0ed20-e562-448f-bf63-9a910abdcab6';
    $request->sourceName = 'fugit';
    $request->workspaceId = '676696e1-ec00-4221-b335-d89acb3ecfda';

    $response = $sdk->source->searchSources($request);

    if ($response->sourceReadList !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [\airbyte\airbyte_oss\Models\Shared\SourceSearch](../../models/shared/SourceSearch.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |


### Response

**[?\airbyte\airbyte_oss\Models\Operations\SearchSourcesResponse](../../models/operations/SearchSourcesResponse.md)**


## updateSource

Update a source

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \airbyte\airbyte_oss\SDK;
use \airbyte\airbyte_oss\Models\Shared\SourceUpdate;

$sdk = SDK::builder()
    ->build();

try {
    $request = new SourceUpdate();
    $request->connectionConfiguration = 'atque';
    $request->name = 'Mark Satterfield';
    $request->sourceId = '9ef03004-978a-461f-a1cf-20688f77c1ff';

    $response = $sdk->source->updateSource($request);

    if ($response->sourceRead !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [\airbyte\airbyte_oss\Models\Shared\SourceUpdate](../../models/shared/SourceUpdate.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |


### Response

**[?\airbyte\airbyte_oss\Models\Operations\UpdateSourceResponse](../../models/operations/UpdateSourceResponse.md)**


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
    $request->configurationHash = 'voluptate';
    $request->connectorVersion = 'inventore';
    $request->sourceId = 'dca163f2-a3c8-40a9-bff3-34cddf857a9e';

    $response = $sdk->source->writeDiscoverCatalogResult($request);

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

