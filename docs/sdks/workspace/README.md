# workspace

## Overview

Workspace related resources.

### Available Operations

* [createWorkspace](#createworkspace) - Creates a workspace
* [deleteWorkspace](#deleteworkspace) - Deletes a workspace
* [getWorkspace](#getworkspace) - Find workspace by ID
* [getWorkspaceByConnectionId](#getworkspacebyconnectionid) - Find workspace by connection id
* [getWorkspaceBySlug](#getworkspacebyslug) - Find workspace by slug
* [listWorkspaces](#listworkspaces) - List all workspaces registered in the current Airbyte deployment
* [updateWorkspace](#updateworkspace) - Update workspace state
* [updateWorkspaceFeedback](#updateworkspacefeedback) - Update workspace feedback state
* [updateWorkspaceName](#updateworkspacename) - Update workspace name

## createWorkspace

Creates a workspace

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \airbyte\airbyte_oss\SDK;
use \airbyte\airbyte_oss\Models\Shared\WorkspaceCreate;
use \airbyte\airbyte_oss\Models\Shared\Geography;
use \airbyte\airbyte_oss\Models\Shared\Notification;
use \airbyte\airbyte_oss\Models\Shared\CustomerioNotificationConfiguration;
use \airbyte\airbyte_oss\Models\Shared\NotificationType;
use \airbyte\airbyte_oss\Models\Shared\SlackNotificationConfiguration;
use \airbyte\airbyte_oss\Models\Shared\WebhookConfigWrite;

$sdk = SDK::builder()
    ->build();

try {
    $request = new WorkspaceCreate();
    $request->anonymousDataCollection = false;
    $request->defaultGeography = Geography::Eu;
    $request->displaySetupWizard = false;
    $request->email = 'Katelin.Heathcote80@gmail.com';
    $request->name = 'Janie Rosenbaum';
    $request->news = false;
    $request->notifications = [
        new Notification(),
    ];
    $request->securityUpdates = false;
    $request->webhookConfigs = [
        new WebhookConfigWrite(),
        new WebhookConfigWrite(),
        new WebhookConfigWrite(),
    ];

    $response = $sdk->workspace->createWorkspace($request);

    if ($response->workspaceRead !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [\airbyte\airbyte_oss\Models\Shared\WorkspaceCreate](../../models/shared/WorkspaceCreate.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |


### Response

**[?\airbyte\airbyte_oss\Models\Operations\CreateWorkspaceResponse](../../models/operations/CreateWorkspaceResponse.md)**


## deleteWorkspace

Deletes a workspace

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
    $request->workspaceId = '99e26ced-8f9f-4db9-810f-63bbf817837b';

    $response = $sdk->workspace->deleteWorkspace($request);

    if ($response->statusCode === 200) {
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

**[?\airbyte\airbyte_oss\Models\Operations\DeleteWorkspaceResponse](../../models/operations/DeleteWorkspaceResponse.md)**


## getWorkspace

Find workspace by ID

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
    $request->workspaceId = '01afdd78-8624-4189-ab44-873f5033f19d';

    $response = $sdk->workspace->getWorkspace($request);

    if ($response->workspaceRead !== null) {
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

**[?\airbyte\airbyte_oss\Models\Operations\GetWorkspaceResponse](../../models/operations/GetWorkspaceResponse.md)**


## getWorkspaceByConnectionId

Find workspace by connection id

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
    $request->connectionId = 'bf125ce4-152e-4ab9-8d7e-5224a6a0e123';

    $response = $sdk->workspace->getWorkspaceByConnectionId($request);

    if ($response->workspaceRead !== null) {
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

**[?\airbyte\airbyte_oss\Models\Operations\GetWorkspaceByConnectionIdResponse](../../models/operations/GetWorkspaceByConnectionIdResponse.md)**


## getWorkspaceBySlug

Find workspace by slug

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \airbyte\airbyte_oss\SDK;
use \airbyte\airbyte_oss\Models\Shared\SlugRequestBody;

$sdk = SDK::builder()
    ->build();

try {
    $request = new SlugRequestBody();
    $request->slug = 'cum';

    $response = $sdk->workspace->getWorkspaceBySlug($request);

    if ($response->workspaceRead !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [\airbyte\airbyte_oss\Models\Shared\SlugRequestBody](../../models/shared/SlugRequestBody.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |


### Response

**[?\airbyte\airbyte_oss\Models\Operations\GetWorkspaceBySlugResponse](../../models/operations/GetWorkspaceBySlugResponse.md)**


## listWorkspaces

List all workspaces registered in the current Airbyte deployment

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \airbyte\airbyte_oss\SDK;

$sdk = SDK::builder()
    ->build();

try {
    $response = $sdk->workspace->listWorkspaces();

    if ($response->workspaceReadList !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```


### Response

**[?\airbyte\airbyte_oss\Models\Operations\ListWorkspacesResponse](../../models/operations/ListWorkspacesResponse.md)**


## updateWorkspace

Update workspace state

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \airbyte\airbyte_oss\SDK;
use \airbyte\airbyte_oss\Models\Shared\WorkspaceUpdate;
use \airbyte\airbyte_oss\Models\Shared\Geography;
use \airbyte\airbyte_oss\Models\Shared\Notification;
use \airbyte\airbyte_oss\Models\Shared\CustomerioNotificationConfiguration;
use \airbyte\airbyte_oss\Models\Shared\NotificationType;
use \airbyte\airbyte_oss\Models\Shared\SlackNotificationConfiguration;
use \airbyte\airbyte_oss\Models\Shared\WebhookConfigWrite;

$sdk = SDK::builder()
    ->build();

try {
    $request = new WorkspaceUpdate();
    $request->anonymousDataCollection = false;
    $request->defaultGeography = Geography::Us;
    $request->displaySetupWizard = false;
    $request->email = 'Demetris_Koch32@yahoo.com';
    $request->initialSetupComplete = false;
    $request->news = false;
    $request->notifications = [
        new Notification(),
        new Notification(),
        new Notification(),
    ];
    $request->securityUpdates = false;
    $request->webhookConfigs = [
        new WebhookConfigWrite(),
        new WebhookConfigWrite(),
        new WebhookConfigWrite(),
        new WebhookConfigWrite(),
    ];
    $request->workspaceId = '1f67f3c4-cce4-4b6d-b696-ff3c57475013';

    $response = $sdk->workspace->updateWorkspace($request);

    if ($response->workspaceRead !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [\airbyte\airbyte_oss\Models\Shared\WorkspaceUpdate](../../models/shared/WorkspaceUpdate.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |


### Response

**[?\airbyte\airbyte_oss\Models\Operations\UpdateWorkspaceResponse](../../models/operations/UpdateWorkspaceResponse.md)**


## updateWorkspaceFeedback

Update workspace feedback state

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \airbyte\airbyte_oss\SDK;
use \airbyte\airbyte_oss\Models\Shared\WorkspaceGiveFeedback;

$sdk = SDK::builder()
    ->build();

try {
    $request = new WorkspaceGiveFeedback();
    $request->workspaceId = '57e44f51-f8b0-484c-b197-e193a245467f';

    $response = $sdk->workspace->updateWorkspaceFeedback($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [\airbyte\airbyte_oss\Models\Shared\WorkspaceGiveFeedback](../../models/shared/WorkspaceGiveFeedback.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |


### Response

**[?\airbyte\airbyte_oss\Models\Operations\UpdateWorkspaceFeedbackResponse](../../models/operations/UpdateWorkspaceFeedbackResponse.md)**


## updateWorkspaceName

Update workspace name

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \airbyte\airbyte_oss\SDK;
use \airbyte\airbyte_oss\Models\Shared\WorkspaceUpdateName;

$sdk = SDK::builder()
    ->build();

try {
    $request = new WorkspaceUpdateName();
    $request->name = 'Joel Lockman';
    $request->workspaceId = 'c2d5cc49-7223-43e6-abd8-fe5d00b979ef';

    $response = $sdk->workspace->updateWorkspaceName($request);

    if ($response->workspaceRead !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [\airbyte\airbyte_oss\Models\Shared\WorkspaceUpdateName](../../models/shared/WorkspaceUpdateName.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |


### Response

**[?\airbyte\airbyte_oss\Models\Operations\UpdateWorkspaceNameResponse](../../models/operations/UpdateWorkspaceNameResponse.md)**

