<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace airbyte\airbyte_oss;

class Destination 
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
     * Check connection to the destination
     * 
     * @param \airbyte\airbyte_oss\Models\Shared\DestinationIdRequestBody $request
     * @return \airbyte\airbyte_oss\Models\Operations\CheckConnectionToDestinationResponse
     */
	public function checkConnectionToDestination(
        \airbyte\airbyte_oss\Models\Shared\DestinationIdRequestBody $request,
    ): \airbyte\airbyte_oss\Models\Operations\CheckConnectionToDestinationResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/v1/destinations/check_connection');
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "request", "json");
        if ($body === null) {
            throw new \Exception('Request body is required');
        }
        $options = array_merge_recursive($options, $body);
        $options['headers']['Accept'] = 'application/json;q=1, application/json;q=0.7, application/json;q=0';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion);
        
        $httpResponse = $this->sdkConfiguration->defaultClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \airbyte\airbyte_oss\Models\Operations\CheckConnectionToDestinationResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->checkConnectionRead = $serializer->deserialize((string)$httpResponse->getBody(), 'airbyte\airbyte_oss\Models\Shared\CheckConnectionRead', 'json');
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
     * Check connection for a proposed update to a destination
     * 
     * @param \airbyte\airbyte_oss\Models\Shared\DestinationUpdate $request
     * @return \airbyte\airbyte_oss\Models\Operations\CheckConnectionToDestinationForUpdateResponse
     */
	public function checkConnectionToDestinationForUpdate(
        \airbyte\airbyte_oss\Models\Shared\DestinationUpdate $request,
    ): \airbyte\airbyte_oss\Models\Operations\CheckConnectionToDestinationForUpdateResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/v1/destinations/check_connection_for_update');
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "request", "json");
        if ($body === null) {
            throw new \Exception('Request body is required');
        }
        $options = array_merge_recursive($options, $body);
        $options['headers']['Accept'] = 'application/json;q=1, application/json;q=0.7, application/json;q=0';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion);
        
        $httpResponse = $this->sdkConfiguration->defaultClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \airbyte\airbyte_oss\Models\Operations\CheckConnectionToDestinationForUpdateResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->checkConnectionRead = $serializer->deserialize((string)$httpResponse->getBody(), 'airbyte\airbyte_oss\Models\Shared\CheckConnectionRead', 'json');
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
     * Clone destination
     * 
     * @param \airbyte\airbyte_oss\Models\Shared\DestinationCloneRequestBody $request
     * @return \airbyte\airbyte_oss\Models\Operations\CloneDestinationResponse
     */
	public function cloneDestination(
        \airbyte\airbyte_oss\Models\Shared\DestinationCloneRequestBody $request,
    ): \airbyte\airbyte_oss\Models\Operations\CloneDestinationResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/v1/destinations/clone');
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "request", "json");
        if ($body === null) {
            throw new \Exception('Request body is required');
        }
        $options = array_merge_recursive($options, $body);
        $options['headers']['Accept'] = 'application/json;q=1, application/json;q=0.7, application/json;q=0';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion);
        
        $httpResponse = $this->sdkConfiguration->defaultClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \airbyte\airbyte_oss\Models\Operations\CloneDestinationResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->destinationRead = $serializer->deserialize((string)$httpResponse->getBody(), 'airbyte\airbyte_oss\Models\Shared\DestinationRead', 'json');
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
     * Create a destination
     * 
     * @param \airbyte\airbyte_oss\Models\Shared\DestinationCreate $request
     * @return \airbyte\airbyte_oss\Models\Operations\CreateDestinationResponse
     */
	public function createDestination(
        \airbyte\airbyte_oss\Models\Shared\DestinationCreate $request,
    ): \airbyte\airbyte_oss\Models\Operations\CreateDestinationResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/v1/destinations/create');
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "request", "json");
        if ($body === null) {
            throw new \Exception('Request body is required');
        }
        $options = array_merge_recursive($options, $body);
        $options['headers']['Accept'] = 'application/json;q=1, application/json;q=0';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion);
        
        $httpResponse = $this->sdkConfiguration->defaultClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \airbyte\airbyte_oss\Models\Operations\CreateDestinationResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->destinationRead = $serializer->deserialize((string)$httpResponse->getBody(), 'airbyte\airbyte_oss\Models\Shared\DestinationRead', 'json');
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
     * Delete the destination
     * 
     * @param \airbyte\airbyte_oss\Models\Shared\DestinationIdRequestBody $request
     * @return \airbyte\airbyte_oss\Models\Operations\DeleteDestinationResponse
     */
	public function deleteDestination(
        \airbyte\airbyte_oss\Models\Shared\DestinationIdRequestBody $request,
    ): \airbyte\airbyte_oss\Models\Operations\DeleteDestinationResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/v1/destinations/delete');
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "request", "json");
        if ($body === null) {
            throw new \Exception('Request body is required');
        }
        $options = array_merge_recursive($options, $body);
        $options['headers']['Accept'] = 'application/json;q=1, application/json;q=0';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion);
        
        $httpResponse = $this->sdkConfiguration->defaultClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \airbyte\airbyte_oss\Models\Operations\DeleteDestinationResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 204) {
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
     * Get configured destination
     * 
     * @param \airbyte\airbyte_oss\Models\Shared\DestinationIdRequestBody $request
     * @return \airbyte\airbyte_oss\Models\Operations\GetDestinationResponse
     */
	public function getDestination(
        \airbyte\airbyte_oss\Models\Shared\DestinationIdRequestBody $request,
    ): \airbyte\airbyte_oss\Models\Operations\GetDestinationResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/v1/destinations/get');
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "request", "json");
        if ($body === null) {
            throw new \Exception('Request body is required');
        }
        $options = array_merge_recursive($options, $body);
        $options['headers']['Accept'] = 'application/json;q=1, application/json;q=0.7, application/json;q=0';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion);
        
        $httpResponse = $this->sdkConfiguration->defaultClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \airbyte\airbyte_oss\Models\Operations\GetDestinationResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->destinationRead = $serializer->deserialize((string)$httpResponse->getBody(), 'airbyte\airbyte_oss\Models\Shared\DestinationRead', 'json');
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
     * List configured destinations for a workspace
     * 
     * @param \airbyte\airbyte_oss\Models\Shared\WorkspaceIdRequestBody $request
     * @return \airbyte\airbyte_oss\Models\Operations\ListDestinationsForWorkspaceResponse
     */
	public function listDestinationsForWorkspace(
        \airbyte\airbyte_oss\Models\Shared\WorkspaceIdRequestBody $request,
    ): \airbyte\airbyte_oss\Models\Operations\ListDestinationsForWorkspaceResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/v1/destinations/list');
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "request", "json");
        if ($body === null) {
            throw new \Exception('Request body is required');
        }
        $options = array_merge_recursive($options, $body);
        $options['headers']['Accept'] = 'application/json;q=1, application/json;q=0.7, application/json;q=0';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion);
        
        $httpResponse = $this->sdkConfiguration->defaultClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \airbyte\airbyte_oss\Models\Operations\ListDestinationsForWorkspaceResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->destinationReadList = $serializer->deserialize((string)$httpResponse->getBody(), 'airbyte\airbyte_oss\Models\Shared\DestinationReadList', 'json');
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
     * Search destinations
     * 
     * @param \airbyte\airbyte_oss\Models\Shared\DestinationSearch $request
     * @return \airbyte\airbyte_oss\Models\Operations\SearchDestinationsResponse
     */
	public function searchDestinations(
        \airbyte\airbyte_oss\Models\Shared\DestinationSearch $request,
    ): \airbyte\airbyte_oss\Models\Operations\SearchDestinationsResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/v1/destinations/search');
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "request", "json");
        if ($body === null) {
            throw new \Exception('Request body is required');
        }
        $options = array_merge_recursive($options, $body);
        $options['headers']['Accept'] = 'application/json;q=1, application/json;q=0';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion);
        
        $httpResponse = $this->sdkConfiguration->defaultClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \airbyte\airbyte_oss\Models\Operations\SearchDestinationsResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->destinationReadList = $serializer->deserialize((string)$httpResponse->getBody(), 'airbyte\airbyte_oss\Models\Shared\DestinationReadList', 'json');
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
     * Update a destination
     * 
     * @param \airbyte\airbyte_oss\Models\Shared\DestinationUpdate $request
     * @return \airbyte\airbyte_oss\Models\Operations\UpdateDestinationResponse
     */
	public function updateDestination(
        \airbyte\airbyte_oss\Models\Shared\DestinationUpdate $request,
    ): \airbyte\airbyte_oss\Models\Operations\UpdateDestinationResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/v1/destinations/update');
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "request", "json");
        if ($body === null) {
            throw new \Exception('Request body is required');
        }
        $options = array_merge_recursive($options, $body);
        $options['headers']['Accept'] = 'application/json;q=1, application/json;q=0';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion);
        
        $httpResponse = $this->sdkConfiguration->defaultClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \airbyte\airbyte_oss\Models\Operations\UpdateDestinationResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->destinationRead = $serializer->deserialize((string)$httpResponse->getBody(), 'airbyte\airbyte_oss\Models\Shared\DestinationRead', 'json');
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
}