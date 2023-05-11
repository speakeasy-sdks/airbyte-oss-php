# openapi

### Available Operations

* [getOpenApiSpec](#getopenapispec) - Returns the openapi specification

## getOpenApiSpec

Returns the openapi specification

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \airbyte\airbyte_oss\SDK;

$sdk = SDK::builder()
    ->build();

try {
    $response = $sdk->openapi->getOpenApiSpec();

    if ($response->getOpenApiSpec200TextPlainBinaryString !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```
