# jobs

### Available Operations

* [cancelJob](#canceljob) - Cancels a job
* [getAttemptNormalizationStatusesForJob](#getattemptnormalizationstatusesforjob) - Get normalization status to determine if we can bypass normalization phase
* [getJobDebugInfo](#getjobdebuginfo) - Gets all information needed to debug this job
* [getJobInfo](#getjobinfo) - Get information about a job
* [getJobInfoLight](#getjobinfolight) - Get information about a job excluding attempt info and logs
* [getLastReplicationJob](#getlastreplicationjob)
* [listJobsFor](#listjobsfor) - Returns recent jobs for a connection. Jobs are returned in descending order by createdAt.

## cancelJob

Cancels a job

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \airbyte\airbyte_oss\SDK;
use \airbyte\airbyte_oss\Models\Shared\JobIdRequestBody;

$sdk = SDK::builder()
    ->build();

try {
    $request = new JobIdRequestBody();
    $request->id = 786860;

    $response = $sdk->jobs->cancelJob($request);

    if ($response->jobInfoRead !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [\airbyte\airbyte_oss\Models\Shared\JobIdRequestBody](../../models/shared/JobIdRequestBody.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |


### Response

**[?\airbyte\airbyte_oss\Models\Operations\CancelJobResponse](../../models/operations/CancelJobResponse.md)**


## getAttemptNormalizationStatusesForJob

Get normalization status to determine if we can bypass normalization phase

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \airbyte\airbyte_oss\SDK;
use \airbyte\airbyte_oss\Models\Shared\JobIdRequestBody;

$sdk = SDK::builder()
    ->build();

try {
    $request = new JobIdRequestBody();
    $request->id = 120277;

    $response = $sdk->jobs->getAttemptNormalizationStatusesForJob($request);

    if ($response->attemptNormalizationStatusReadList !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [\airbyte\airbyte_oss\Models\Shared\JobIdRequestBody](../../models/shared/JobIdRequestBody.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |


### Response

**[?\airbyte\airbyte_oss\Models\Operations\GetAttemptNormalizationStatusesForJobResponse](../../models/operations/GetAttemptNormalizationStatusesForJobResponse.md)**


## getJobDebugInfo

Gets all information needed to debug this job

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \airbyte\airbyte_oss\SDK;
use \airbyte\airbyte_oss\Models\Shared\JobIdRequestBody;

$sdk = SDK::builder()
    ->build();

try {
    $request = new JobIdRequestBody();
    $request->id = 973017;

    $response = $sdk->jobs->getJobDebugInfo($request);

    if ($response->jobDebugInfoRead !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [\airbyte\airbyte_oss\Models\Shared\JobIdRequestBody](../../models/shared/JobIdRequestBody.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |


### Response

**[?\airbyte\airbyte_oss\Models\Operations\GetJobDebugInfoResponse](../../models/operations/GetJobDebugInfoResponse.md)**


## getJobInfo

Get information about a job

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \airbyte\airbyte_oss\SDK;
use \airbyte\airbyte_oss\Models\Shared\JobIdRequestBody;

$sdk = SDK::builder()
    ->build();

try {
    $request = new JobIdRequestBody();
    $request->id = 754901;

    $response = $sdk->jobs->getJobInfo($request);

    if ($response->jobInfoRead !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [\airbyte\airbyte_oss\Models\Shared\JobIdRequestBody](../../models/shared/JobIdRequestBody.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |


### Response

**[?\airbyte\airbyte_oss\Models\Operations\GetJobInfoResponse](../../models/operations/GetJobInfoResponse.md)**


## getJobInfoLight

Get information about a job excluding attempt info and logs

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \airbyte\airbyte_oss\SDK;
use \airbyte\airbyte_oss\Models\Shared\JobIdRequestBody;

$sdk = SDK::builder()
    ->build();

try {
    $request = new JobIdRequestBody();
    $request->id = 62035;

    $response = $sdk->jobs->getJobInfoLight($request);

    if ($response->jobInfoLightRead !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [\airbyte\airbyte_oss\Models\Shared\JobIdRequestBody](../../models/shared/JobIdRequestBody.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |


### Response

**[?\airbyte\airbyte_oss\Models\Operations\GetJobInfoLightResponse](../../models/operations/GetJobInfoLightResponse.md)**


## getLastReplicationJob

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
    $request->connectionId = 'e115c80b-ff91-4854-8ec4-2defcce8f197';

    $response = $sdk->jobs->getLastReplicationJob($request);

    if ($response->jobOptionalRead !== null) {
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

**[?\airbyte\airbyte_oss\Models\Operations\GetLastReplicationJobResponse](../../models/operations/GetLastReplicationJobResponse.md)**


## listJobsFor

Returns recent jobs for a connection. Jobs are returned in descending order by createdAt.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \airbyte\airbyte_oss\SDK;
use \airbyte\airbyte_oss\Models\Shared\JobListRequestBody;
use \airbyte\airbyte_oss\Models\Shared\JobConfigType;
use \airbyte\airbyte_oss\Models\Shared\Pagination;

$sdk = SDK::builder()
    ->build();

try {
    $request = new JobListRequestBody();
    $request->configId = 'esse';
    $request->configTypes = [
        JobConfigType::DiscoverSchema,
        JobConfigType::CheckConnectionDestination,
    ];
    $request->includingJobId = 895513;
    $request->pagination = new Pagination();
    $request->pagination->pageSize = 423588;
    $request->pagination->rowOffset = 208683;

    $response = $sdk->jobs->listJobsFor($request);

    if ($response->jobReadList !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [\airbyte\airbyte_oss\Models\Shared\JobListRequestBody](../../models/shared/JobListRequestBody.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |


### Response

**[?\airbyte\airbyte_oss\Models\Operations\ListJobsForResponse](../../models/operations/ListJobsForResponse.md)**

