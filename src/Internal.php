<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace airbyte\airbyte_oss;

class Internal 
{

	// SDK private variables namespaced with _ to avoid conflicts with API models
	private \GuzzleHttp\ClientInterface $_defaultClient;
	private \GuzzleHttp\ClientInterface $_securityClient;
	private string $_serverUrl;
	private string $_language;
	private string $_sdkVersion;
	private string $_genVersion;	

	/**
	 * @param \GuzzleHttp\ClientInterface $defaultClient
	 * @param \GuzzleHttp\ClientInterface $securityClient
	 * @param string $serverUrl
	 * @param string $language
	 * @param string $sdkVersion
	 * @param string $genVersion
	 */
	public function __construct(\GuzzleHttp\ClientInterface $defaultClient, \GuzzleHttp\ClientInterface $securityClient, string $serverUrl, string $language, string $sdkVersion, string $genVersion)
	{
		$this->_defaultClient = $defaultClient;
		$this->_securityClient = $securityClient;
		$this->_serverUrl = $serverUrl;
		$this->_language = $language;
		$this->_sdkVersion = $sdkVersion;
		$this->_genVersion = $genVersion;
	}
	
    /**
     * Create or update the state for a connection.
     * 
     * @param \airbyte\airbyte_oss\Models\Shared\ConnectionStateCreateOrUpdate $request
     * @return \airbyte\airbyte_oss\Models\Operations\CreateOrUpdateStateResponse
     */
	public function createOrUpdateState(
        \airbyte\airbyte_oss\Models\Shared\ConnectionStateCreateOrUpdate $request,
    ): \airbyte\airbyte_oss\Models\Operations\CreateOrUpdateStateResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateUrl($baseUrl, '/v1/state/create_or_update');
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "request", "json");
        if ($body === null) {
            throw new \Exception('Request body is required');
        }
        $options = array_merge_recursive($options, $body);
        
        $httpResponse = $this->_defaultClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \airbyte\airbyte_oss\Models\Operations\CreateOrUpdateStateResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->connectionState = $serializer->deserialize((string)$httpResponse->getBody(), 'airbyte\airbyte_oss\Models\Shared\ConnectionState', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 404) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->notFoundKnownExceptionInfo = $serializer->deserialize((string)$httpResponse->getBody(), 'airbyte\airbyte_oss\Models\Shared\NotFoundKnownExceptionInfo', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 422) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->invalidInputExceptionInfo = $serializer->deserialize((string)$httpResponse->getBody(), 'airbyte\airbyte_oss\Models\Shared\InvalidInputExceptionInfo', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Get normalization status to determine if we can bypass normalization phase
     * 
     * @param \airbyte\airbyte_oss\Models\Shared\JobIdRequestBody $request
     * @return \airbyte\airbyte_oss\Models\Operations\GetAttemptNormalizationStatusesForJobResponse
     */
	public function getAttemptNormalizationStatusesForJob(
        \airbyte\airbyte_oss\Models\Shared\JobIdRequestBody $request,
    ): \airbyte\airbyte_oss\Models\Operations\GetAttemptNormalizationStatusesForJobResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateUrl($baseUrl, '/v1/jobs/get_normalization_status');
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "request", "json");
        $options = array_merge_recursive($options, $body);
        
        $httpResponse = $this->_defaultClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \airbyte\airbyte_oss\Models\Operations\GetAttemptNormalizationStatusesForJobResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->attemptNormalizationStatusReadList = $serializer->deserialize((string)$httpResponse->getBody(), 'airbyte\airbyte_oss\Models\Shared\AttemptNormalizationStatusReadList', 'json');
            }
        }

        return $response;
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
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateUrl($baseUrl, '/v1/attempt/save_stats');
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "request", "json");
        if ($body === null) {
            throw new \Exception('Request body is required');
        }
        $options = array_merge_recursive($options, $body);
        
        $httpResponse = $this->_defaultClient->request('POST', $url, $options);
        
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
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateUrl($baseUrl, '/v1/attempt/save_sync_config');
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "request", "json");
        if ($body === null) {
            throw new \Exception('Request body is required');
        }
        $options = array_merge_recursive($options, $body);
        
        $httpResponse = $this->_defaultClient->request('POST', $url, $options);
        
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
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateUrl($baseUrl, '/v1/attempt/set_workflow_in_attempt');
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "request", "json");
        if ($body === null) {
            throw new \Exception('Request body is required');
        }
        $options = array_merge_recursive($options, $body);
        
        $httpResponse = $this->_defaultClient->request('POST', $url, $options);
        
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
	
    /**
     * Should only called from worker, to write result from discover activity back to DB.
     * 
     * @param \airbyte\airbyte_oss\Models\Shared\SourceDiscoverSchemaWriteRequestBody $request
     * @return \airbyte\airbyte_oss\Models\Operations\WriteDiscoverCatalogResultResponse
     */
	public function writeDiscoverCatalogResult(
        \airbyte\airbyte_oss\Models\Shared\SourceDiscoverSchemaWriteRequestBody $request,
    ): \airbyte\airbyte_oss\Models\Operations\WriteDiscoverCatalogResultResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateUrl($baseUrl, '/v1/sources/write_discover_catalog_result');
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "request", "json");
        if ($body === null) {
            throw new \Exception('Request body is required');
        }
        $options = array_merge_recursive($options, $body);
        
        $httpResponse = $this->_defaultClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \airbyte\airbyte_oss\Models\Operations\WriteDiscoverCatalogResultResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->discoverCatalogResult = $serializer->deserialize((string)$httpResponse->getBody(), 'airbyte\airbyte_oss\Models\Shared\DiscoverCatalogResult', 'json');
            }
        }

        return $response;
    }
}