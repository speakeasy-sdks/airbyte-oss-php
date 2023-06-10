# sourceOauth

## Overview

Source OAuth related resources to delegate access from user.

### Available Operations

* [completeSourceOAuth](#completesourceoauth) - Given a source def ID generate an access/refresh token etc.
* [getSourceOAuthConsent](#getsourceoauthconsent) - Given a source connector definition ID, return the URL to the consent screen where to redirect the user to.
* [setInstancewideSourceOauthParams](#setinstancewidesourceoauthparams) - Sets instancewide variables to be used for the oauth flow when creating this source. When set, these variables will be injected into a connector's configuration before any interaction with the connector image itself. This enables running oauth flows with consistent variables e.g: the company's Google Ads developer_token, client_id, and client_secret without the user having to know about these variables.


## completeSourceOAuth

Given a source def ID generate an access/refresh token etc.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \airbyte\airbyte_oss\SDK;
use \airbyte\airbyte_oss\Models\Shared\CompleteSourceOauthRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new CompleteSourceOauthRequest();
    $request->oAuthInputConfiguration = 'sapiente';
    $request->queryParams = [
        'expedita' => 'quia',
        'vitae' => 'odio',
        'quas' => 'ipsa',
        'distinctio' => 'placeat',
    ];
    $request->redirectUrl = 'quod';
    $request->sourceDefinitionId = 'c0dbbddb-4847-408f-b4e3-91e6bc158c4c';
    $request->sourceId = '4e54599e-a342-4260-a9b2-00ce78a1bd8f';
    $request->workspaceId = 'b7a0a116-ce72-43d4-897f-a30e9af725b2';

    $response = $sdk->sourceOauth->completeSourceOAuth($request);

    if ($response->completeOAuthResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                          | Type                                                                                                               | Required                                                                                                           | Description                                                                                                        |
| ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                         | [\airbyte\airbyte_oss\Models\Shared\CompleteSourceOauthRequest](../../models/shared/CompleteSourceOauthRequest.md) | :heavy_check_mark:                                                                                                 | The request object to use for the request.                                                                         |


### Response

**[?\airbyte\airbyte_oss\Models\Operations\CompleteSourceOAuthResponse](../../models/operations/CompleteSourceOAuthResponse.md)**


## getSourceOAuthConsent

Given a source connector definition ID, return the URL to the consent screen where to redirect the user to.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \airbyte\airbyte_oss\SDK;
use \airbyte\airbyte_oss\Models\Shared\SourceOauthConsentRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new SourceOauthConsentRequest();
    $request->oAuthInputConfiguration = 'omnis';
    $request->redirectUrl = 'dicta';
    $request->sourceDefinitionId = '22030d83-f5ae-4b77-99d2-2e8c1f849382';
    $request->sourceId = '5fdc42c8-76c2-4c2d-bb4c-fc1c76230f84';
    $request->workspaceId = '1fb1bd23-fdb1-44db-abe5-a685998e22ae';

    $response = $sdk->sourceOauth->getSourceOAuthConsent($request);

    if ($response->oAuthConsentRead !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                        | Type                                                                                                             | Required                                                                                                         | Description                                                                                                      |
| ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                       | [\airbyte\airbyte_oss\Models\Shared\SourceOauthConsentRequest](../../models/shared/SourceOauthConsentRequest.md) | :heavy_check_mark:                                                                                               | The request object to use for the request.                                                                       |


### Response

**[?\airbyte\airbyte_oss\Models\Operations\GetSourceOAuthConsentResponse](../../models/operations/GetSourceOAuthConsentResponse.md)**


## setInstancewideSourceOauthParams

Sets instancewide variables to be used for the oauth flow when creating this source. When set, these variables will be injected into a connector's configuration before any interaction with the connector image itself. This enables running oauth flows with consistent variables e.g: the company's Google Ads developer_token, client_id, and client_secret without the user having to know about these variables.


### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \airbyte\airbyte_oss\SDK;
use \airbyte\airbyte_oss\Models\Shared\SetInstancewideSourceOauthParamsRequestBody;

$sdk = SDK::builder()
    ->build();

try {
    $request = new SetInstancewideSourceOauthParamsRequestBody();
    $request->params = [
        'voluptatem' => 'temporibus',
    ];
    $request->sourceDefinitionId = 'a16fc2b2-71a2-489c-97e8-54e90439d222';

    $response = $sdk->sourceOauth->setInstancewideSourceOauthParams($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                            | Type                                                                                                                                                 | Required                                                                                                                                             | Description                                                                                                                                          |
| ---------------------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                           | [\airbyte\airbyte_oss\Models\Shared\SetInstancewideSourceOauthParamsRequestBody](../../models/shared/SetInstancewideSourceOauthParamsRequestBody.md) | :heavy_check_mark:                                                                                                                                   | The request object to use for the request.                                                                                                           |


### Response

**[?\airbyte\airbyte_oss\Models\Operations\SetInstancewideSourceOauthParamsResponse](../../models/operations/SetInstancewideSourceOauthParamsResponse.md)**

