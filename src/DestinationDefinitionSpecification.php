<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace airbyte\airbyte_oss;

class DestinationDefinitionSpecification 
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
     * Get specification for a destinationDefinition
     * 
     * @param \airbyte\airbyte_oss\Models\Shared\DestinationDefinitionIdWithWorkspaceId $request
     * @return \airbyte\airbyte_oss\Models\Operations\GetDestinationDefinitionSpecificationResponse
     */
	public function getDestinationDefinitionSpecification(
        \airbyte\airbyte_oss\Models\Shared\DestinationDefinitionIdWithWorkspaceId $request,
    ): \airbyte\airbyte_oss\Models\Operations\GetDestinationDefinitionSpecificationResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateUrl($baseUrl, '/v1/destination_definition_specifications/get');
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "request", "json");
        if ($body === null) {
            throw new \Exception('Request body is required');
        }
        $options = array_merge_recursive($options, $body);
        
        $httpResponse = $this->_defaultClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \airbyte\airbyte_oss\Models\Operations\GetDestinationDefinitionSpecificationResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->destinationDefinitionSpecificationRead = $serializer->deserialize((string)$httpResponse->getBody(), 'airbyte\airbyte_oss\Models\Shared\DestinationDefinitionSpecificationRead', 'json');
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
}