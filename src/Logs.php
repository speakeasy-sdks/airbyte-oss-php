<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace airbyte\airbyte_oss;

class Logs 
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
     * Get logs
     * 
     * @param \airbyte\airbyte_oss\Models\Shared\LogsRequestBody $request
     * @return \airbyte\airbyte_oss\Models\Operations\GetLogsResponse
     */
	public function getLogs(
        \airbyte\airbyte_oss\Models\Shared\LogsRequestBody $request,
    ): \airbyte\airbyte_oss\Models\Operations\GetLogsResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/v1/logs/get');
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "request", "json");
        if ($body === null) {
            throw new \Exception('Request body is required');
        }
        $options = array_merge_recursive($options, $body);
        $options['headers']['Accept'] = 'application/json;q=1, application/json;q=0.7, text/plain;q=0';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion, $this->sdkConfiguration->openapiDocVersion);
        
        $httpResponse = $this->sdkConfiguration->defaultClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \airbyte\airbyte_oss\Models\Operations\GetLogsResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'text/plain')) {
                $response->getLogs200TextPlainBinaryString = $httpResponse->getBody()->getContents();
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