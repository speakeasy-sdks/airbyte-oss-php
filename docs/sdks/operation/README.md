# operation

### Available Operations

* [checkOperation](#checkoperation) - Check if an operation to be created is valid
* [createOperation](#createoperation) - Create an operation to be applied as part of a connection pipeline
* [deleteOperation](#deleteoperation) - Delete an operation
* [getOperation](#getoperation) - Returns an operation
* [listOperationsForConnection](#listoperationsforconnection) - Returns all operations for a connection.
* [updateOperation](#updateoperation) - Update an operation

## checkOperation

Check if an operation to be created is valid

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \airbyte\airbyte_oss\SDK;
use \airbyte\airbyte_oss\Models\Shared\OperatorConfiguration;
use \airbyte\airbyte_oss\Models\Shared\OperatorDbt;
use \airbyte\airbyte_oss\Models\Shared\OperatorNormalization;
use \airbyte\airbyte_oss\Models\Shared\OperatorNormalizationOption;
use \airbyte\airbyte_oss\Models\Shared\OperatorType;
use \airbyte\airbyte_oss\Models\Shared\OperatorWebhook;
use \airbyte\airbyte_oss\Models\Shared\OperatorWebhookDbtCloud;
use \airbyte\airbyte_oss\Models\Shared\OperatorWebhookWebhookType;

$sdk = SDK::builder()
    ->build();

try {
    $request = new OperatorConfiguration();
    $request->dbt = new OperatorDbt();
    $request->dbt->dbtArguments = 'officia';
    $request->dbt->dockerImage = 'reprehenderit';
    $request->dbt->gitRepoBranch = 'distinctio';
    $request->dbt->gitRepoUrl = 'eius';
    $request->normalization = new OperatorNormalization();
    $request->normalization->option = OperatorNormalizationOption::Basic;
    $request->operatorType = OperatorType::Normalization;
    $request->webhook = new OperatorWebhook();
    $request->webhook->dbtCloud = new OperatorWebhookDbtCloud();
    $request->webhook->dbtCloud->accountId = 522062;
    $request->webhook->dbtCloud->jobId = 978154;
    $request->webhook->executionBody = 'accusantium';
    $request->webhook->executionUrl = 'veniam';
    $request->webhook->webhookConfigId = 'e3d48fda-f313-4a1f-9fd9-4259c0b36f25';
    $request->webhook->webhookType = OperatorWebhookWebhookType::DbtCloud;

    $response = $sdk->operation->checkOperation($request);

    if ($response->checkOperationRead !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [\airbyte\airbyte_oss\Models\Shared\OperatorConfiguration](../../models/shared/OperatorConfiguration.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |


### Response

**[?\airbyte\airbyte_oss\Models\Operations\CheckOperationResponse](../../models/operations/CheckOperationResponse.md)**


## createOperation

Create an operation to be applied as part of a connection pipeline

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \airbyte\airbyte_oss\SDK;
use \airbyte\airbyte_oss\Models\Shared\OperationCreate;
use \airbyte\airbyte_oss\Models\Shared\OperatorConfiguration;
use \airbyte\airbyte_oss\Models\Shared\OperatorDbt;
use \airbyte\airbyte_oss\Models\Shared\OperatorNormalization;
use \airbyte\airbyte_oss\Models\Shared\OperatorNormalizationOption;
use \airbyte\airbyte_oss\Models\Shared\OperatorType;
use \airbyte\airbyte_oss\Models\Shared\OperatorWebhook;
use \airbyte\airbyte_oss\Models\Shared\OperatorWebhookDbtCloud;
use \airbyte\airbyte_oss\Models\Shared\OperatorWebhookWebhookType;

$sdk = SDK::builder()
    ->build();

try {
    $request = new OperationCreate();
    $request->name = 'Luke Mayer';
    $request->operatorConfiguration = new OperatorConfiguration();
    $request->operatorConfiguration->dbt = new OperatorDbt();
    $request->operatorConfiguration->dbt->dbtArguments = 'tenetur';
    $request->operatorConfiguration->dbt->dockerImage = 'adipisci';
    $request->operatorConfiguration->dbt->gitRepoBranch = 'libero';
    $request->operatorConfiguration->dbt->gitRepoUrl = 'in';
    $request->operatorConfiguration->normalization = new OperatorNormalization();
    $request->operatorConfiguration->normalization->option = OperatorNormalizationOption::Basic;
    $request->operatorConfiguration->operatorType = OperatorType::Normalization;
    $request->operatorConfiguration->webhook = new OperatorWebhook();
    $request->operatorConfiguration->webhook->dbtCloud = new OperatorWebhookDbtCloud();
    $request->operatorConfiguration->webhook->dbtCloud->accountId = 403147;
    $request->operatorConfiguration->webhook->dbtCloud->jobId = 791762;
    $request->operatorConfiguration->webhook->executionBody = 'ab';
    $request->operatorConfiguration->webhook->executionUrl = 'beatae';
    $request->operatorConfiguration->webhook->webhookConfigId = 'f6c37a51-2624-4383-9bbc-05a23a45cefc';
    $request->operatorConfiguration->webhook->webhookType = OperatorWebhookWebhookType::DbtCloud;
    $request->workspaceId = '5fde10a0-ce21-469e-9100-19c6dc5e3476';

    $response = $sdk->operation->createOperation($request);

    if ($response->operationRead !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [\airbyte\airbyte_oss\Models\Shared\OperationCreate](../../models/shared/OperationCreate.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |


### Response

**[?\airbyte\airbyte_oss\Models\Operations\CreateOperationResponse](../../models/operations/CreateOperationResponse.md)**


## deleteOperation

Delete an operation

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \airbyte\airbyte_oss\SDK;
use \airbyte\airbyte_oss\Models\Shared\OperationIdRequestBody;

$sdk = SDK::builder()
    ->build();

try {
    $request = new OperationIdRequestBody();
    $request->operationId = '2799bfbb-e694-49fb-abb4-ecae6c3d5db3';

    $response = $sdk->operation->deleteOperation($request);

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
| `$request`                                                                                                 | [\airbyte\airbyte_oss\Models\Shared\OperationIdRequestBody](../../models/shared/OperationIdRequestBody.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |


### Response

**[?\airbyte\airbyte_oss\Models\Operations\DeleteOperationResponse](../../models/operations/DeleteOperationResponse.md)**


## getOperation

Returns an operation

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \airbyte\airbyte_oss\SDK;
use \airbyte\airbyte_oss\Models\Shared\OperationIdRequestBody;

$sdk = SDK::builder()
    ->build();

try {
    $request = new OperationIdRequestBody();
    $request->operationId = 'adebd5da-ea4c-4506-a8aa-94c02644cf5e';

    $response = $sdk->operation->getOperation($request);

    if ($response->operationRead !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [\airbyte\airbyte_oss\Models\Shared\OperationIdRequestBody](../../models/shared/OperationIdRequestBody.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |


### Response

**[?\airbyte\airbyte_oss\Models\Operations\GetOperationResponse](../../models/operations/GetOperationResponse.md)**


## listOperationsForConnection

List operations for connection.

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
    $request->connectionId = '9d9a4578-adc1-4ac6-80de-c001ac802e2e';

    $response = $sdk->operation->listOperationsForConnection($request);

    if ($response->operationReadList !== null) {
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

**[?\airbyte\airbyte_oss\Models\Operations\ListOperationsForConnectionResponse](../../models/operations/ListOperationsForConnectionResponse.md)**


## updateOperation

Update an operation

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \airbyte\airbyte_oss\SDK;
use \airbyte\airbyte_oss\Models\Shared\OperationUpdate;
use \airbyte\airbyte_oss\Models\Shared\OperatorConfiguration;
use \airbyte\airbyte_oss\Models\Shared\OperatorDbt;
use \airbyte\airbyte_oss\Models\Shared\OperatorNormalization;
use \airbyte\airbyte_oss\Models\Shared\OperatorNormalizationOption;
use \airbyte\airbyte_oss\Models\Shared\OperatorType;
use \airbyte\airbyte_oss\Models\Shared\OperatorWebhook;
use \airbyte\airbyte_oss\Models\Shared\OperatorWebhookDbtCloud;
use \airbyte\airbyte_oss\Models\Shared\OperatorWebhookWebhookType;

$sdk = SDK::builder()
    ->build();

try {
    $request = new OperationUpdate();
    $request->name = 'Jose Mante';
    $request->operationId = '8f0f816f-f347-47c1-be90-2c14125b0960';
    $request->operatorConfiguration = new OperatorConfiguration();
    $request->operatorConfiguration->dbt = new OperatorDbt();
    $request->operatorConfiguration->dbt->dbtArguments = 'id';
    $request->operatorConfiguration->dbt->dockerImage = 'laboriosam';
    $request->operatorConfiguration->dbt->gitRepoBranch = 'ex';
    $request->operatorConfiguration->dbt->gitRepoUrl = 'quas';
    $request->operatorConfiguration->normalization = new OperatorNormalization();
    $request->operatorConfiguration->normalization->option = OperatorNormalizationOption::Basic;
    $request->operatorConfiguration->operatorType = OperatorType::Normalization;
    $request->operatorConfiguration->webhook = new OperatorWebhook();
    $request->operatorConfiguration->webhook->dbtCloud = new OperatorWebhookDbtCloud();
    $request->operatorConfiguration->webhook->dbtCloud->accountId = 356440;
    $request->operatorConfiguration->webhook->dbtCloud->jobId = 62688;
    $request->operatorConfiguration->webhook->executionBody = 'similique';
    $request->operatorConfiguration->webhook->executionUrl = 'incidunt';
    $request->operatorConfiguration->webhook->webhookConfigId = '72af923c-5949-4f83-b350-cf876ffb901c';
    $request->operatorConfiguration->webhook->webhookType = OperatorWebhookWebhookType::DbtCloud;

    $response = $sdk->operation->updateOperation($request);

    if ($response->operationRead !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [\airbyte\airbyte_oss\Models\Shared\OperationUpdate](../../models/shared/OperationUpdate.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |


### Response

**[?\airbyte\airbyte_oss\Models\Operations\UpdateOperationResponse](../../models/operations/UpdateOperationResponse.md)**

