<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace airbyte\airbyte_oss\Models\Shared;


/**
 * ConnectionSchedule - if null, then no schedule is set.
 * 
 * @package airbyte\airbyte_oss\Models\Shared
 * @access public
 */
class ConnectionSchedule
{
	#[\JMS\Serializer\Annotation\SerializedName('timeUnit')]
    #[\JMS\Serializer\Annotation\Type('enum<airbyte\airbyte_oss\Models\Shared\ConnectionScheduleTimeUnit>')]
    public ConnectionScheduleTimeUnit $timeUnit;
    
	#[\JMS\Serializer\Annotation\SerializedName('units')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $units;
    
	public function __construct()
	{
		$this->timeUnit = \airbyte\airbyte_oss\Models\Shared\ConnectionScheduleTimeUnit::MINUTES;
		$this->units = 0;
	}
}
