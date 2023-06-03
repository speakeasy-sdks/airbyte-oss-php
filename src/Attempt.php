<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace airbyte\airbyte_oss;

class Attempt 
{

	private SDKConfiguration $sdkConfiguration;

	/**
	 * @param SDKConfiguration $sdkConfig
	 */
	public function __construct(SDKConfiguration $sdkConfig)
	{
		$this->sdkConfiguration = $sdkConfig;
	}
	
    /**
     * For worker to set sync stats of a running attempt.
     * 
     * @param \airbyte\airbyte_oss\Models\Shared\SaveStatsRequestBody $request
     * @return \airbyte\airbyte_oss\Models\Operations\SaveStatsResponse
     */
	public function saveStats(
        \airbyte\airbyte_oss\Models\Shared\SaveStatsRequestBody $request,
    ): \airbyte\airbyte_oss\Models\Operations\SaveStatsResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/v1/attempt/save_stats');
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "request", "json");
        if ($body === null) {
            throw new \Exception('Request body is required');
        }
        $options = array_merge_recursive($options, $body);
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion);
        
        $httpResponse = $this->sdkConfiguration->defaultClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \airbyte\airbyte_oss\Models\Operations\SaveStatsResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->internalOperationResult = $serializer->deserialize((string)$httpResponse->getBody(), 'airbyte\airbyte_oss\Models\Shared\InternalOperationResult', 'json');
            }
        }

        return $response;
    }
	
    /**
     * For worker to save the AttemptSyncConfig for an attempt.
     * 
     * @param \airbyte\airbyte_oss\Models\Shared\SaveAttemptSyncConfigRequestBody $request
     * @return \airbyte\airbyte_oss\Models\Operations\SaveSyncConfigResponse
     */
	public function saveSyncConfig(
        \airbyte\airbyte_oss\Models\Shared\SaveAttemptSyncConfigRequestBody $request,
    ): \airbyte\airbyte_oss\Models\Operations\SaveSyncConfigResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/v1/attempt/save_sync_config');
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "request", "json");
        if ($body === null) {
            throw new \Exception('Request body is required');
        }
        $options = array_merge_recursive($options, $body);
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion);
        
        $httpResponse = $this->sdkConfiguration->defaultClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \airbyte\airbyte_oss\Models\Operations\SaveSyncConfigResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->internalOperationResult = $serializer->deserialize((string)$httpResponse->getBody(), 'airbyte\airbyte_oss\Models\Shared\InternalOperationResult', 'json');
            }
        }

        return $response;
    }
	
    /**
     * For worker to register the workflow id in attempt.
     * 
     * @param \airbyte\airbyte_oss\Models\Shared\SetWorkflowInAttemptRequestBody $request
     * @return \airbyte\airbyte_oss\Models\Operations\SetWorkflowInAttemptResponse
     */
	public function setWorkflowInAttempt(
        \airbyte\airbyte_oss\Models\Shared\SetWorkflowInAttemptRequestBody $request,
    ): \airbyte\airbyte_oss\Models\Operations\SetWorkflowInAttemptResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/v1/attempt/set_workflow_in_attempt');
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "request", "json");
        if ($body === null) {
            throw new \Exception('Request body is required');
        }
        $options = array_merge_recursive($options, $body);
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion);
        
        $httpResponse = $this->sdkConfiguration->defaultClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \airbyte\airbyte_oss\Models\Operations\SetWorkflowInAttemptResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->internalOperationResult = $serializer->deserialize((string)$httpResponse->getBody(), 'airbyte\airbyte_oss\Models\Shared\InternalOperationResult', 'json');
            }
        }

        return $response;
    }
}