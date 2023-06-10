<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace airbyte\airbyte_oss\Models\Shared;


/** Method used for computing final namespace in destination */
enum NamespaceDefinitionType: string
{
    case Source = 'source';
    case Destination = 'destination';
    case Customformat = 'customformat';
}
