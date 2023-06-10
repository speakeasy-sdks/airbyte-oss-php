# destinationOauth

## Overview

Source OAuth related resources to delegate access from user.

### Available Operations

* [completeDestinationOAuth](#completedestinationoauth) - Given a destination def ID generate an access/refresh token etc.
* [getDestinationOAuthConsent](#getdestinationoauthconsent) - Given a destination connector definition ID, return the URL to the consent screen where to redirect the user to.
* [setInstancewideDestinationOauthParams](#setinstancewidedestinationoauthparams) - Sets instancewide variables to be used for the oauth flow when creating this destination. When set, these variables will be injected into a connector's configuration before any interaction with the connector image itself. This enables running oauth flows with consistent variables e.g: the company's Google Ads developer_token, client_id, and client_secret without the user having to know about these variables.


## completeDestinationOAuth

Given a destination def ID generate an access/refresh token etc.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \airbyte\airbyte_oss\SDK;
use \airbyte\airbyte_oss\Models\Shared\CompleteDestinationOAuthRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new CompleteDestinationOAuthRequest();
    $request->destinationDefinitionId = '73409e3e-b1e5-4a2b-92eb-07f116db9954';
    $request->destinationId = '5fc95fa8-8970-4e18-9dbb-30fcb33ea055';
    $request->oAuthInputConfiguration = 'libero';
    $request->queryParams = [
        'cupiditate' => 'molestiae',
    ];
    $request->redirectUrl = 'eligendi';
    $request->workspaceId = 'd44e2f52-d82d-4351-bbb6-f48b656bcdb3';

    $response = $sdk->destinationOauth->completeDestinationOAuth($request);

    if ($response->completeOAuthResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                    | Type                                                                                                                         | Required                                                                                                                     | Description                                                                                                                  |
| ---------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                   | [\airbyte\airbyte_oss\Models\Shared\CompleteDestinationOAuthRequest](../../models/shared/CompleteDestinationOAuthRequest.md) | :heavy_check_mark:                                                                                                           | The request object to use for the request.                                                                                   |


### Response

**[?\airbyte\airbyte_oss\Models\Operations\CompleteDestinationOAuthResponse](../../models/operations/CompleteDestinationOAuthResponse.md)**


## getDestinationOAuthConsent

Given a destination connector definition ID, return the URL to the consent screen where to redirect the user to.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \airbyte\airbyte_oss\SDK;
use \airbyte\airbyte_oss\Models\Shared\DestinationOauthConsentRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new DestinationOauthConsentRequest();
    $request->destinationDefinitionId = '5ff2e4b2-7537-4a8c-99e7-319c177d525f';
    $request->destinationId = '77b114ee-b52f-4f78-9fc3-7814d4c98e0c';
    $request->oAuthInputConfiguration = 'aspernatur';
    $request->redirectUrl = 'nam';
    $request->workspaceId = 'b89eb75d-ad63-46c6-8050-3d8bb31180f7';

    $response = $sdk->destinationOauth->getDestinationOAuthConsent($request);

    if ($response->oAuthConsentRead !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                  | Type                                                                                                                       | Required                                                                                                                   | Description                                                                                                                |
| -------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                 | [\airbyte\airbyte_oss\Models\Shared\DestinationOauthConsentRequest](../../models/shared/DestinationOauthConsentRequest.md) | :heavy_check_mark:                                                                                                         | The request object to use for the request.                                                                                 |


### Response

**[?\airbyte\airbyte_oss\Models\Operations\GetDestinationOAuthConsentResponse](../../models/operations/GetDestinationOAuthConsentResponse.md)**


## setInstancewideDestinationOauthParams

Sets instancewide variables to be used for the oauth flow when creating this destination. When set, these variables will be injected into a connector's configuration before any interaction with the connector image itself. This enables running oauth flows with consistent variables e.g: the company's Google Ads developer_token, client_id, and client_secret without the user having to know about these variables.


### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \airbyte\airbyte_oss\SDK;
use \airbyte\airbyte_oss\Models\Shared\SetInstancewideDestinationOauthParamsRequestBody;

$sdk = SDK::builder()
    ->build();

try {
    $request = new SetInstancewideDestinationOauthParamsRequestBody();
    $request->destinationDefinitionId = '39ae9e05-7eb8-409e-a810-331f3981d4c7';
    $request->params = [
        'perferendis' => 'rerum',
    ];

    $response = $sdk->destinationOauth->setInstancewideDestinationOauthParams($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                      | Type                                                                                                                                                           | Required                                                                                                                                                       | Description                                                                                                                                                    |
| -------------------------------------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                     | [\airbyte\airbyte_oss\Models\Shared\SetInstancewideDestinationOauthParamsRequestBody](../../models/shared/SetInstancewideDestinationOauthParamsRequestBody.md) | :heavy_check_mark:                                                                                                                                             | The request object to use for the request.                                                                                                                     |


### Response

**[?\airbyte\airbyte_oss\Models\Operations\SetInstancewideDestinationOauthParamsResponse](../../models/operations/SetInstancewideDestinationOauthParamsResponse.md)**

