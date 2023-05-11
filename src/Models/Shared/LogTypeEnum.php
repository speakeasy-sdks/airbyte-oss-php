<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace airbyte\airbyte_oss\Models\Shared;


/** type/source of logs produced */
enum LogTypeEnum: string
{
    case SERVER = 'server';
    case SCHEDULER = 'scheduler';
}
