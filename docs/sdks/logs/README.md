# logs

### Available Operations

* [getLogs](#getlogs) - Get logs

## getLogs

Get logs

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \airbyte\airbyte_oss\SDK;
use \airbyte\airbyte_oss\Models\Shared\LogsRequestBody;
use \airbyte\airbyte_oss\Models\Shared\LogType;

$sdk = SDK::builder()
    ->build();

try {
    $request = new LogsRequestBody();
    $request->logType = LogType::Server;

    $response = $sdk->logs->getLogs($request);

    if ($response->getLogs200TextPlainBinaryString !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [\airbyte\airbyte_oss\Models\Shared\LogsRequestBody](../../models/shared/LogsRequestBody.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |


### Response

**[?\airbyte\airbyte_oss\Models\Operations\GetLogsResponse](../../models/operations/GetLogsResponse.md)**

