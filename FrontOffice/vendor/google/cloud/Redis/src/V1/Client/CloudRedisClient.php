<?php
/*
 * Copyright 2024 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/*
 * GENERATED CODE WARNING
 * Generated by gapic-generator-php from the file
 * https://github.com/googleapis/googleapis/blob/master/google/cloud/redis/v1/cloud_redis.proto
 * Updates to the above are reflected here through a refresh process.
 */

namespace Google\Cloud\Redis\V1\Client;

use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\OperationResponse;
use Google\ApiCore\PagedListResponse;
use Google\ApiCore\ResourceHelperTrait;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\Cloud\Location\GetLocationRequest;
use Google\Cloud\Location\ListLocationsRequest;
use Google\Cloud\Location\Location;
use Google\Cloud\Redis\V1\CreateInstanceRequest;
use Google\Cloud\Redis\V1\DeleteInstanceRequest;
use Google\Cloud\Redis\V1\ExportInstanceRequest;
use Google\Cloud\Redis\V1\FailoverInstanceRequest;
use Google\Cloud\Redis\V1\GetInstanceAuthStringRequest;
use Google\Cloud\Redis\V1\GetInstanceRequest;
use Google\Cloud\Redis\V1\ImportInstanceRequest;
use Google\Cloud\Redis\V1\Instance;
use Google\Cloud\Redis\V1\InstanceAuthString;
use Google\Cloud\Redis\V1\ListInstancesRequest;
use Google\Cloud\Redis\V1\RescheduleMaintenanceRequest;
use Google\Cloud\Redis\V1\UpdateInstanceRequest;
use Google\Cloud\Redis\V1\UpgradeInstanceRequest;
use Google\LongRunning\Client\OperationsClient;
use Google\LongRunning\Operation;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * Service Description: Configures and manages Cloud Memorystore for Redis instances
 *
 * Google Cloud Memorystore for Redis v1
 *
 * The `redis.googleapis.com` service implements the Google Cloud Memorystore
 * for Redis API and defines the following resource model for managing Redis
 * instances:
 * * The service works with a collection of cloud projects, named: `/projects/*`
 * * Each project has a collection of available locations, named: `/locations/*`
 * * Each location has a collection of Redis instances, named: `/instances/*`
 * * As such, Redis instances are resources of the form:
 * `/projects/{project_id}/locations/{location_id}/instances/{instance_id}`
 *
 * Note that location_id must be referring to a GCP `region`; for example:
 * * `projects/redpepper-1290/locations/us-central1/instances/my-redis`
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods.
 *
 * Many parameters require resource names to be formatted in a particular way. To
 * assist with these names, this class includes a format method for each type of
 * name, and additionally a parseName method to extract the individual identifiers
 * contained within formatted names that are returned by the API.
 *
 * @method PromiseInterface<OperationResponse> createInstanceAsync(CreateInstanceRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<OperationResponse> deleteInstanceAsync(DeleteInstanceRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<OperationResponse> exportInstanceAsync(ExportInstanceRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<OperationResponse> failoverInstanceAsync(FailoverInstanceRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<Instance> getInstanceAsync(GetInstanceRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<InstanceAuthString> getInstanceAuthStringAsync(GetInstanceAuthStringRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<OperationResponse> importInstanceAsync(ImportInstanceRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<PagedListResponse> listInstancesAsync(ListInstancesRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<OperationResponse> rescheduleMaintenanceAsync(RescheduleMaintenanceRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<OperationResponse> updateInstanceAsync(UpdateInstanceRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<OperationResponse> upgradeInstanceAsync(UpgradeInstanceRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<Location> getLocationAsync(GetLocationRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<PagedListResponse> listLocationsAsync(ListLocationsRequest $request, array $optionalArgs = [])
 */
final class CloudRedisClient
{
    use GapicClientTrait;
    use ResourceHelperTrait;

    /** The name of the service. */
    private const SERVICE_NAME = 'google.cloud.redis.v1.CloudRedis';

    /**
     * The default address of the service.
     *
     * @deprecated SERVICE_ADDRESS_TEMPLATE should be used instead.
     */
    private const SERVICE_ADDRESS = 'redis.googleapis.com';

    /** The address template of the service. */
    private const SERVICE_ADDRESS_TEMPLATE = 'redis.UNIVERSE_DOMAIN';

    /** The default port of the service. */
    private const DEFAULT_SERVICE_PORT = 443;

    /** The name of the code generator, to be included in the agent header. */
    private const CODEGEN_NAME = 'gapic';

    /** The default scopes required by the service. */
    public static $serviceScopes = ['https://www.googleapis.com/auth/cloud-platform'];

    private $operationsClient;

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'apiEndpoint' => self::SERVICE_ADDRESS . ':' . self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__ . '/../resources/cloud_redis_client_config.json',
            'descriptorsConfigPath' => __DIR__ . '/../resources/cloud_redis_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__ . '/../resources/cloud_redis_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__ . '/../resources/cloud_redis_rest_client_config.php',
                ],
            ],
        ];
    }

    /**
     * Return an OperationsClient object with the same endpoint as $this.
     *
     * @return OperationsClient
     */
    public function getOperationsClient()
    {
        return $this->operationsClient;
    }

    /**
     * Resume an existing long running operation that was previously started by a long
     * running API method. If $methodName is not provided, or does not match a long
     * running API method, then the operation can still be resumed, but the
     * OperationResponse object will not deserialize the final response.
     *
     * @param string $operationName The name of the long running operation
     * @param string $methodName    The name of the method used to start the operation
     *
     * @return OperationResponse
     */
    public function resumeOperation($operationName, $methodName = null)
    {
        $options = isset($this->descriptors[$methodName]['longRunning'])
            ? $this->descriptors[$methodName]['longRunning']
            : [];
        $operation = new OperationResponse($operationName, $this->getOperationsClient(), $options);
        $operation->reload();
        return $operation;
    }

    /**
     * Create the default operation client for the service.
     *
     * @param array $options ClientOptions for the client.
     *
     * @return OperationsClient
     */
    private function createOperationsClient(array $options)
    {
        // Unset client-specific configuration options
        unset($options['serviceName'], $options['clientConfig'], $options['descriptorsConfigPath']);

        if (isset($options['operationsClient'])) {
            return $options['operationsClient'];
        }

        return new OperationsClient($options);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a instance
     * resource.
     *
     * @param string $project
     * @param string $location
     * @param string $instance
     *
     * @return string The formatted instance resource.
     */
    public static function instanceName(string $project, string $location, string $instance): string
    {
        return self::getPathTemplate('instance')->render([
            'project' => $project,
            'location' => $location,
            'instance' => $instance,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a location
     * resource.
     *
     * @param string $project
     * @param string $location
     *
     * @return string The formatted location resource.
     */
    public static function locationName(string $project, string $location): string
    {
        return self::getPathTemplate('location')->render([
            'project' => $project,
            'location' => $location,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - instance: projects/{project}/locations/{location}/instances/{instance}
     * - location: projects/{project}/locations/{location}
     *
     * The optional $template argument can be supplied to specify a particular pattern,
     * and must match one of the templates listed above. If no $template argument is
     * provided, or if the $template argument does not match one of the templates
     * listed, then parseName will check each of the supported templates, and return
     * the first match.
     *
     * @param string $formattedName The formatted name string
     * @param string $template      Optional name of template to match
     *
     * @return array An associative array from name component IDs to component values.
     *
     * @throws ValidationException If $formattedName could not be matched.
     */
    public static function parseName(string $formattedName, string $template = null): array
    {
        return self::parseFormattedName($formattedName, $template);
    }

    /**
     * Constructor.
     *
     * @param array $options {
     *     Optional. Options for configuring the service API wrapper.
     *
     *     @type string $apiEndpoint
     *           The address of the API remote host. May optionally include the port, formatted
     *           as "<uri>:<port>". Default 'redis.googleapis.com:443'.
     *     @type string|array|FetchAuthTokenInterface|CredentialsWrapper $credentials
     *           The credentials to be used by the client to authorize API calls. This option
     *           accepts either a path to a credentials file, or a decoded credentials file as a
     *           PHP array.
     *           *Advanced usage*: In addition, this option can also accept a pre-constructed
     *           {@see \Google\Auth\FetchAuthTokenInterface} object or
     *           {@see \Google\ApiCore\CredentialsWrapper} object. Note that when one of these
     *           objects are provided, any settings in $credentialsConfig will be ignored.
     *     @type array $credentialsConfig
     *           Options used to configure credentials, including auth token caching, for the
     *           client. For a full list of supporting configuration options, see
     *           {@see \Google\ApiCore\CredentialsWrapper::build()} .
     *     @type bool $disableRetries
     *           Determines whether or not retries defined by the client configuration should be
     *           disabled. Defaults to `false`.
     *     @type string|array $clientConfig
     *           Client method configuration, including retry settings. This option can be either
     *           a path to a JSON file, or a PHP array containing the decoded JSON data. By
     *           default this settings points to the default client config file, which is
     *           provided in the resources folder.
     *     @type string|TransportInterface $transport
     *           The transport used for executing network requests. May be either the string
     *           `rest` or `grpc`. Defaults to `grpc` if gRPC support is detected on the system.
     *           *Advanced usage*: Additionally, it is possible to pass in an already
     *           instantiated {@see \Google\ApiCore\Transport\TransportInterface} object. Note
     *           that when this object is provided, any settings in $transportConfig, and any
     *           $apiEndpoint setting, will be ignored.
     *     @type array $transportConfig
     *           Configuration options that will be used to construct the transport. Options for
     *           each supported transport type should be passed in a key for that transport. For
     *           example:
     *           $transportConfig = [
     *               'grpc' => [...],
     *               'rest' => [...],
     *           ];
     *           See the {@see \Google\ApiCore\Transport\GrpcTransport::build()} and
     *           {@see \Google\ApiCore\Transport\RestTransport::build()} methods for the
     *           supported options.
     *     @type callable $clientCertSource
     *           A callable which returns the client cert as a string. This can be used to
     *           provide a certificate and private key to the transport layer for mTLS.
     * }
     *
     * @throws ValidationException
     */
    public function __construct(array $options = [])
    {
        $clientOptions = $this->buildClientOptions($options);
        $this->setClientOptions($clientOptions);
        $this->operationsClient = $this->createOperationsClient($clientOptions);
    }

    /** Handles execution of the async variants for each documented method. */
    public function __call($method, $args)
    {
        if (substr($method, -5) !== 'Async') {
            trigger_error('Call to undefined method ' . __CLASS__ . "::$method()", E_USER_ERROR);
        }

        array_unshift($args, substr($method, 0, -5));
        return call_user_func_array([$this, 'startAsyncCall'], $args);
    }

    /**
     * Creates a Redis instance based on the specified tier and memory size.
     *
     * By default, the instance is accessible from the project's
     * [default network](https://cloud.google.com/vpc/docs/vpc).
     *
     * The creation is executed asynchronously and callers may check the returned
     * operation to track its progress. Once the operation is completed the Redis
     * instance will be fully functional. Completed longrunning.Operation will
     * contain the new instance object in the response field.
     *
     * The returned operation is automatically deleted after a few hours, so there
     * is no need to call DeleteOperation.
     *
     * The async variant is {@see CloudRedisClient::createInstanceAsync()} .
     *
     * @example samples/V1/CloudRedisClient/create_instance.php
     *
     * @param CreateInstanceRequest $request     A request to house fields associated with the call.
     * @param array                 $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return OperationResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function createInstance(CreateInstanceRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('CreateInstance', $request, $callOptions)->wait();
    }

    /**
     * Deletes a specific Redis instance.  Instance stops serving and data is
     * deleted.
     *
     * The async variant is {@see CloudRedisClient::deleteInstanceAsync()} .
     *
     * @example samples/V1/CloudRedisClient/delete_instance.php
     *
     * @param DeleteInstanceRequest $request     A request to house fields associated with the call.
     * @param array                 $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return OperationResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function deleteInstance(DeleteInstanceRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('DeleteInstance', $request, $callOptions)->wait();
    }

    /**
     * Export Redis instance data into a Redis RDB format file in Cloud Storage.
     *
     * Redis will continue serving during this operation.
     *
     * The returned operation is automatically deleted after a few hours, so
     * there is no need to call DeleteOperation.
     *
     * The async variant is {@see CloudRedisClient::exportInstanceAsync()} .
     *
     * @example samples/V1/CloudRedisClient/export_instance.php
     *
     * @param ExportInstanceRequest $request     A request to house fields associated with the call.
     * @param array                 $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return OperationResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function exportInstance(ExportInstanceRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('ExportInstance', $request, $callOptions)->wait();
    }

    /**
     * Initiates a failover of the primary node to current replica node for a
     * specific STANDARD tier Cloud Memorystore for Redis instance.
     *
     * The async variant is {@see CloudRedisClient::failoverInstanceAsync()} .
     *
     * @example samples/V1/CloudRedisClient/failover_instance.php
     *
     * @param FailoverInstanceRequest $request     A request to house fields associated with the call.
     * @param array                   $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return OperationResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function failoverInstance(FailoverInstanceRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('FailoverInstance', $request, $callOptions)->wait();
    }

    /**
     * Gets the details of a specific Redis instance.
     *
     * The async variant is {@see CloudRedisClient::getInstanceAsync()} .
     *
     * @example samples/V1/CloudRedisClient/get_instance.php
     *
     * @param GetInstanceRequest $request     A request to house fields associated with the call.
     * @param array              $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Instance
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getInstance(GetInstanceRequest $request, array $callOptions = []): Instance
    {
        return $this->startApiCall('GetInstance', $request, $callOptions)->wait();
    }

    /**
     * Gets the AUTH string for a Redis instance. If AUTH is not enabled for the
     * instance the response will be empty. This information is not included in
     * the details returned to GetInstance.
     *
     * The async variant is {@see CloudRedisClient::getInstanceAuthStringAsync()} .
     *
     * @example samples/V1/CloudRedisClient/get_instance_auth_string.php
     *
     * @param GetInstanceAuthStringRequest $request     A request to house fields associated with the call.
     * @param array                        $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return InstanceAuthString
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getInstanceAuthString(
        GetInstanceAuthStringRequest $request,
        array $callOptions = []
    ): InstanceAuthString {
        return $this->startApiCall('GetInstanceAuthString', $request, $callOptions)->wait();
    }

    /**
     * Import a Redis RDB snapshot file from Cloud Storage into a Redis instance.
     *
     * Redis may stop serving during this operation. Instance state will be
     * IMPORTING for entire operation. When complete, the instance will contain
     * only data from the imported file.
     *
     * The returned operation is automatically deleted after a few hours, so
     * there is no need to call DeleteOperation.
     *
     * The async variant is {@see CloudRedisClient::importInstanceAsync()} .
     *
     * @example samples/V1/CloudRedisClient/import_instance.php
     *
     * @param ImportInstanceRequest $request     A request to house fields associated with the call.
     * @param array                 $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return OperationResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function importInstance(ImportInstanceRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('ImportInstance', $request, $callOptions)->wait();
    }

    /**
     * Lists all Redis instances owned by a project in either the specified
     * location (region) or all locations.
     *
     * The location should have the following format:
     *
     * * `projects/{project_id}/locations/{location_id}`
     *
     * If `location_id` is specified as `-` (wildcard), then all regions
     * available to the project are queried, and the results are aggregated.
     *
     * The async variant is {@see CloudRedisClient::listInstancesAsync()} .
     *
     * @example samples/V1/CloudRedisClient/list_instances.php
     *
     * @param ListInstancesRequest $request     A request to house fields associated with the call.
     * @param array                $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return PagedListResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function listInstances(ListInstancesRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('ListInstances', $request, $callOptions);
    }

    /**
     * Reschedule maintenance for a given instance in a given project and
     * location.
     *
     * The async variant is {@see CloudRedisClient::rescheduleMaintenanceAsync()} .
     *
     * @example samples/V1/CloudRedisClient/reschedule_maintenance.php
     *
     * @param RescheduleMaintenanceRequest $request     A request to house fields associated with the call.
     * @param array                        $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return OperationResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function rescheduleMaintenance(
        RescheduleMaintenanceRequest $request,
        array $callOptions = []
    ): OperationResponse {
        return $this->startApiCall('RescheduleMaintenance', $request, $callOptions)->wait();
    }

    /**
     * Updates the metadata and configuration of a specific Redis instance.
     *
     * Completed longrunning.Operation will contain the new instance object
     * in the response field. The returned operation is automatically deleted
     * after a few hours, so there is no need to call DeleteOperation.
     *
     * The async variant is {@see CloudRedisClient::updateInstanceAsync()} .
     *
     * @example samples/V1/CloudRedisClient/update_instance.php
     *
     * @param UpdateInstanceRequest $request     A request to house fields associated with the call.
     * @param array                 $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return OperationResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function updateInstance(UpdateInstanceRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('UpdateInstance', $request, $callOptions)->wait();
    }

    /**
     * Upgrades Redis instance to the newer Redis version specified in the
     * request.
     *
     * The async variant is {@see CloudRedisClient::upgradeInstanceAsync()} .
     *
     * @example samples/V1/CloudRedisClient/upgrade_instance.php
     *
     * @param UpgradeInstanceRequest $request     A request to house fields associated with the call.
     * @param array                  $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return OperationResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function upgradeInstance(UpgradeInstanceRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('UpgradeInstance', $request, $callOptions)->wait();
    }

    /**
     * Gets information about a location.
     *
     * The async variant is {@see CloudRedisClient::getLocationAsync()} .
     *
     * @example samples/V1/CloudRedisClient/get_location.php
     *
     * @param GetLocationRequest $request     A request to house fields associated with the call.
     * @param array              $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Location
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getLocation(GetLocationRequest $request, array $callOptions = []): Location
    {
        return $this->startApiCall('GetLocation', $request, $callOptions)->wait();
    }

    /**
     * Lists information about the supported locations for this service.
     *
     * The async variant is {@see CloudRedisClient::listLocationsAsync()} .
     *
     * @example samples/V1/CloudRedisClient/list_locations.php
     *
     * @param ListLocationsRequest $request     A request to house fields associated with the call.
     * @param array                $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return PagedListResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function listLocations(ListLocationsRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('ListLocations', $request, $callOptions);
    }
}
