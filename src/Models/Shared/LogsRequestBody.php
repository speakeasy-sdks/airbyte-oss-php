<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace airbyte\airbyte_oss\Models\Shared;


class LogsRequestBody
{
    /**
     * type/source of logs produced
     * 
     * @var \airbyte\airbyte_oss\Models\Shared\LogType $logType
     */
	#[\JMS\Serializer\Annotation\SerializedName('logType')]
    #[\JMS\Serializer\Annotation\Type('enum<airbyte\airbyte_oss\Models\Shared\LogType>')]
    public LogType $logType;
    
	public function __construct()
	{
		$this->logType = \airbyte\airbyte_oss\Models\Shared\LogType::SERVER;
	}
}
