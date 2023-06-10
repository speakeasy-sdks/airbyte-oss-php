# health

## Overview

Healthchecks

### Available Operations

* [getHealthCheck](#gethealthcheck) - Health Check

## getHealthCheck

Health Check

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \airbyte\airbyte_oss\SDK;

$sdk = SDK::builder()
    ->build();

try {
    $response = $sdk->health->getHealthCheck();

    if ($response->healthCheckRead !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```


### Response

**[?\airbyte\airbyte_oss\Models\Operations\GetHealthCheckResponse](../../models/operations/GetHealthCheckResponse.md)**

