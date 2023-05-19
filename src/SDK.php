<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace airbyte\airbyte_oss;

/**
 * SDK - Airbyte Configuration API
 * 
 * [https://airbyte.io](https://airbyte.io).
 * 
 * This API is a collection of HTTP RPC-style methods. While it is not a REST API, those familiar with REST should find the conventions of this API recognizable.
 * 
 * Here are some conventions that this API follows:
 * * All endpoints are http POST methods.
 * * All endpoints accept data via `application/json` request bodies. The API does not accept any data via query params.
 * * The naming convention for endpoints is: localhost:8000/{VERSION}/{METHOD_FAMILY}/{METHOD_NAME} e.g. `localhost:8000/v1/connections/create`.
 * * For all `update` methods, the whole object must be passed in, even the fields that did not change.
 * 
 * Authentication (OSS):
 * * When authenticating to the Configuration API, you must use Basic Authentication by setting the Authentication Header to Basic and base64 encoding the username and password (which are `airbyte` and `password` by default - so base64 encoding `airbyte:password` results in `YWlyYnl0ZTpwYXNzd29yZA==`). So the full header reads `'Authorization': "Basic YWlyYnl0ZTpwYXNzd29yZA=="`
 * 
 * https://airbyte.io - Find out more about Airbyte
 * 
 * @package airbyte\airbyte_oss
 * @access public
 * @see https://airbyte.io
 */
class SDK
{
	public const SERVERS = [
		'http://localhost:8000/api',
	];
  	
    /**
     * Interactions with attempt related resources.
     * 
     * @var Attempt $$attempt
     */
	public Attempt $attempt;
	
    /**
     * Connection between sources and destinations.
     * 
     * @var Connection $$connection
     */
	public Connection $connection;
	
    /**
     * Destination related resources.
     * 
     * @var Destination $$destination
     */
	public Destination $destination;
	
    /**
     * DestinationDefinition related resources.
     * 
     * @var DestinationDefinition $$destinationDefinition
     */
	public DestinationDefinition $destinationDefinition;
	
    /**
     * DestinationDefinitionSpecification related resources.
     * 
     * @var DestinationDefinitionSpecification $$destinationDefinitionSpecification
     */
	public DestinationDefinitionSpecification $destinationDefinitionSpecification;
	
    /**
     * Source OAuth related resources to delegate access from user.
     * 
     * @var DestinationOauth $$destinationOauth
     */
	public DestinationOauth $destinationOauth;
	
    /**
     * Healthchecks
     * 
     * @var Health $$health
     */
	public Health $health;
	
	public Internal $internal;
	
	public Jobs $jobs;
	
	public Logs $logs;
	
	public Notifications $notifications;
	
	public Openapi $openapi;
	
	public Operation $operation;
	
	public Scheduler $scheduler;
	
    /**
     * Source related resources.
     * 
     * @var Source $$source
     */
	public Source $source;
	
    /**
     * SourceDefinition related resources.
     * 
     * @var SourceDefinition $$sourceDefinition
     */
	public SourceDefinition $sourceDefinition;
	
    /**
     * SourceDefinition specification related resources.
     * 
     * @var SourceDefinitionSpecification $$sourceDefinitionSpecification
     */
	public SourceDefinitionSpecification $sourceDefinitionSpecification;
	
    /**
     * Source OAuth related resources to delegate access from user.
     * 
     * @var SourceOauth $$sourceOauth
     */
	public SourceOauth $sourceOauth;
	
    /**
     * Interactions with state related resources.
     * 
     * @var State $$state
     */
	public State $state;
	
    /**
     * Endpoints for the Airbyte web application. Those APIs should not be called outside the web application implementation and are not
     * 
     * guaranteeing any backwards compatibility.
     * 
     * 
     * @var WebBackend $$webBackend
     */
	public WebBackend $webBackend;
	
    /**
     * Workspace related resources.
     * 
     * @var Workspace $$workspace
     */
	public Workspace $workspace;
		
	// SDK private variables namespaced with _ to avoid conflicts with API models
	private ?\GuzzleHttp\ClientInterface $_defaultClient;
	private ?\GuzzleHttp\ClientInterface $_securityClient;
	
	private string $_serverUrl;
	private string $_language = 'php';
	private string $_sdkVersion = '1.2.0';
	private string $_genVersion = '2.31.0';

	/**
	 * Returns a new instance of the SDK builder used to configure and create the SDK instance.
	 * 
	 * @return SDKBuilder
	 */
	public static function builder(): SDKBuilder
	{
		return new SDKBuilder();
	}

	/**
	 * @param \GuzzleHttp\ClientInterface|null $client
	 * @param string $serverUrl
	 * @param array<string, string>|null $params
	 */
	public function __construct(?\GuzzleHttp\ClientInterface $client, string $serverUrl, ?array $params)
	{
		$this->_defaultClient = $client;
		
		if ($this->_defaultClient === null) {
			$this->_defaultClient = new \GuzzleHttp\Client([
				'timeout' => 60,
			]);
		}

		$this->_securityClient = null;
		if ($this->_securityClient === null) {
			$this->_securityClient = $this->_defaultClient;
		}

		if (!empty($serverUrl)) {
			$this->_serverUrl = Utils\Utils::templateUrl($serverUrl, $params);
		}
		
		if (empty($this->_serverUrl)) {
			$this->_serverUrl = $this::SERVERS[0];
		}
		
		$this->attempt = new Attempt(
			$this->_defaultClient,
			$this->_securityClient,
			$this->_serverUrl,
			$this->_language,
			$this->_sdkVersion,
			$this->_genVersion
		);
		
		$this->connection = new Connection(
			$this->_defaultClient,
			$this->_securityClient,
			$this->_serverUrl,
			$this->_language,
			$this->_sdkVersion,
			$this->_genVersion
		);
		
		$this->destination = new Destination(
			$this->_defaultClient,
			$this->_securityClient,
			$this->_serverUrl,
			$this->_language,
			$this->_sdkVersion,
			$this->_genVersion
		);
		
		$this->destinationDefinition = new DestinationDefinition(
			$this->_defaultClient,
			$this->_securityClient,
			$this->_serverUrl,
			$this->_language,
			$this->_sdkVersion,
			$this->_genVersion
		);
		
		$this->destinationDefinitionSpecification = new DestinationDefinitionSpecification(
			$this->_defaultClient,
			$this->_securityClient,
			$this->_serverUrl,
			$this->_language,
			$this->_sdkVersion,
			$this->_genVersion
		);
		
		$this->destinationOauth = new DestinationOauth(
			$this->_defaultClient,
			$this->_securityClient,
			$this->_serverUrl,
			$this->_language,
			$this->_sdkVersion,
			$this->_genVersion
		);
		
		$this->health = new Health(
			$this->_defaultClient,
			$this->_securityClient,
			$this->_serverUrl,
			$this->_language,
			$this->_sdkVersion,
			$this->_genVersion
		);
		
		$this->internal = new Internal(
			$this->_defaultClient,
			$this->_securityClient,
			$this->_serverUrl,
			$this->_language,
			$this->_sdkVersion,
			$this->_genVersion
		);
		
		$this->jobs = new Jobs(
			$this->_defaultClient,
			$this->_securityClient,
			$this->_serverUrl,
			$this->_language,
			$this->_sdkVersion,
			$this->_genVersion
		);
		
		$this->logs = new Logs(
			$this->_defaultClient,
			$this->_securityClient,
			$this->_serverUrl,
			$this->_language,
			$this->_sdkVersion,
			$this->_genVersion
		);
		
		$this->notifications = new Notifications(
			$this->_defaultClient,
			$this->_securityClient,
			$this->_serverUrl,
			$this->_language,
			$this->_sdkVersion,
			$this->_genVersion
		);
		
		$this->openapi = new Openapi(
			$this->_defaultClient,
			$this->_securityClient,
			$this->_serverUrl,
			$this->_language,
			$this->_sdkVersion,
			$this->_genVersion
		);
		
		$this->operation = new Operation(
			$this->_defaultClient,
			$this->_securityClient,
			$this->_serverUrl,
			$this->_language,
			$this->_sdkVersion,
			$this->_genVersion
		);
		
		$this->scheduler = new Scheduler(
			$this->_defaultClient,
			$this->_securityClient,
			$this->_serverUrl,
			$this->_language,
			$this->_sdkVersion,
			$this->_genVersion
		);
		
		$this->source = new Source(
			$this->_defaultClient,
			$this->_securityClient,
			$this->_serverUrl,
			$this->_language,
			$this->_sdkVersion,
			$this->_genVersion
		);
		
		$this->sourceDefinition = new SourceDefinition(
			$this->_defaultClient,
			$this->_securityClient,
			$this->_serverUrl,
			$this->_language,
			$this->_sdkVersion,
			$this->_genVersion
		);
		
		$this->sourceDefinitionSpecification = new SourceDefinitionSpecification(
			$this->_defaultClient,
			$this->_securityClient,
			$this->_serverUrl,
			$this->_language,
			$this->_sdkVersion,
			$this->_genVersion
		);
		
		$this->sourceOauth = new SourceOauth(
			$this->_defaultClient,
			$this->_securityClient,
			$this->_serverUrl,
			$this->_language,
			$this->_sdkVersion,
			$this->_genVersion
		);
		
		$this->state = new State(
			$this->_defaultClient,
			$this->_securityClient,
			$this->_serverUrl,
			$this->_language,
			$this->_sdkVersion,
			$this->_genVersion
		);
		
		$this->webBackend = new WebBackend(
			$this->_defaultClient,
			$this->_securityClient,
			$this->_serverUrl,
			$this->_language,
			$this->_sdkVersion,
			$this->_genVersion
		);
		
		$this->workspace = new Workspace(
			$this->_defaultClient,
			$this->_securityClient,
			$this->_serverUrl,
			$this->_language,
			$this->_sdkVersion,
			$this->_genVersion
		);
	}
}