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
 * https://github.com/googleapis/googleapis/blob/master/google/cloud/assuredworkloads/v1beta1/assuredworkloads_service.proto
 * Updates to the above are reflected here through a refresh process.
 *
 * @experimental
 */

namespace Google\Cloud\AssuredWorkloads\V1beta1\Client;

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
use Google\Cloud\AssuredWorkloads\V1beta1\AnalyzeWorkloadMoveRequest;
use Google\Cloud\AssuredWorkloads\V1beta1\AnalyzeWorkloadMoveResponse;
use Google\Cloud\AssuredWorkloads\V1beta1\CreateWorkloadRequest;
use Google\Cloud\AssuredWorkloads\V1beta1\DeleteWorkloadRequest;
use Google\Cloud\AssuredWorkloads\V1beta1\GetWorkloadRequest;
use Google\Cloud\AssuredWorkloads\V1beta1\ListWorkloadsRequest;
use Google\Cloud\AssuredWorkloads\V1beta1\RestrictAllowedResourcesRequest;
use Google\Cloud\AssuredWorkloads\V1beta1\RestrictAllowedResourcesResponse;
use Google\Cloud\AssuredWorkloads\V1beta1\UpdateWorkloadRequest;
use Google\Cloud\AssuredWorkloads\V1beta1\Workload;
use Google\LongRunning\Client\OperationsClient;
use Google\LongRunning\Operation;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * Service Description: Service to manage AssuredWorkloads.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods.
 *
 * Many parameters require resource names to be formatted in a particular way. To
 * assist with these names, this class includes a format method for each type of
 * name, and additionally a parseName method to extract the individual identifiers
 * contained within formatted names that are returned by the API.
 *
 * @experimental
 *
 * @method PromiseInterface<AnalyzeWorkloadMoveResponse> analyzeWorkloadMoveAsync(AnalyzeWorkloadMoveRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<OperationResponse> createWorkloadAsync(CreateWorkloadRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<void> deleteWorkloadAsync(DeleteWorkloadRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<Workload> getWorkloadAsync(GetWorkloadRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<PagedListResponse> listWorkloadsAsync(ListWorkloadsRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<RestrictAllowedResourcesResponse> restrictAllowedResourcesAsync(RestrictAllowedResourcesRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<Workload> updateWorkloadAsync(UpdateWorkloadRequest $request, array $optionalArgs = [])
 */
final class AssuredWorkloadsServiceClient
{
    use GapicClientTrait;
    use ResourceHelperTrait;

    /** The name of the service. */
    private const SERVICE_NAME = 'google.cloud.assuredworkloads.v1beta1.AssuredWorkloadsService';

    /**
     * The default address of the service.
     *
     * @deprecated SERVICE_ADDRESS_TEMPLATE should be used instead.
     */
    private const SERVICE_ADDRESS = 'assuredworkloads.googleapis.com';

    /** The address template of the service. */
    private const SERVICE_ADDRESS_TEMPLATE = 'assuredworkloads.UNIVERSE_DOMAIN';

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
            'clientConfig' => __DIR__ . '/../resources/assured_workloads_service_client_config.json',
            'descriptorsConfigPath' => __DIR__ . '/../resources/assured_workloads_service_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__ . '/../resources/assured_workloads_service_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' =>
                        __DIR__ . '/../resources/assured_workloads_service_rest_client_config.php',
                ],
            ],
        ];
    }

    /**
     * Return an OperationsClient object with the same endpoint as $this.
     *
     * @return OperationsClient
     *
     * @experimental
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
     *
     * @experimental
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
     * Formats a string containing the fully-qualified path to represent a location
     * resource.
     *
     * @param string $organization
     * @param string $location
     *
     * @return string The formatted location resource.
     *
     * @experimental
     */
    public static function locationName(string $organization, string $location): string
    {
        return self::getPathTemplate('location')->render([
            'organization' => $organization,
            'location' => $location,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a workload
     * resource.
     *
     * @param string $organization
     * @param string $location
     * @param string $workload
     *
     * @return string The formatted workload resource.
     *
     * @experimental
     */
    public static function workloadName(string $organization, string $location, string $workload): string
    {
        return self::getPathTemplate('workload')->render([
            'organization' => $organization,
            'location' => $location,
            'workload' => $workload,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - location: organizations/{organization}/locations/{location}
     * - workload: organizations/{organization}/locations/{location}/workloads/{workload}
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
     *
     * @experimental
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
     *           as "<uri>:<port>". Default 'assuredworkloads.googleapis.com:443'.
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
     *
     * @experimental
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
     * Analyze if the source Assured Workloads can be moved to the target Assured
     * Workload
     *
     * The async variant is
     * {@see AssuredWorkloadsServiceClient::analyzeWorkloadMoveAsync()} .
     *
     * @example samples/V1beta1/AssuredWorkloadsServiceClient/analyze_workload_move.php
     *
     * @param AnalyzeWorkloadMoveRequest $request     A request to house fields associated with the call.
     * @param array                      $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return AnalyzeWorkloadMoveResponse
     *
     * @throws ApiException Thrown if the API call fails.
     *
     * @experimental
     */
    public function analyzeWorkloadMove(
        AnalyzeWorkloadMoveRequest $request,
        array $callOptions = []
    ): AnalyzeWorkloadMoveResponse {
        return $this->startApiCall('AnalyzeWorkloadMove', $request, $callOptions)->wait();
    }

    /**
     * Creates Assured Workload.
     *
     * The async variant is {@see AssuredWorkloadsServiceClient::createWorkloadAsync()}
     * .
     *
     * @example samples/V1beta1/AssuredWorkloadsServiceClient/create_workload.php
     *
     * @param CreateWorkloadRequest $request     A request to house fields associated with the call.
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
     *
     * @experimental
     */
    public function createWorkload(CreateWorkloadRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('CreateWorkload', $request, $callOptions)->wait();
    }

    /**
     * Deletes the workload. Make sure that workload's direct children are already
     * in a deleted state, otherwise the request will fail with a
     * FAILED_PRECONDITION error.
     * In addition to assuredworkloads.workload.delete permission, the user should
     * also have orgpolicy.policy.set permission on the deleted folder to remove
     * Assured Workloads OrgPolicies.
     *
     * The async variant is {@see AssuredWorkloadsServiceClient::deleteWorkloadAsync()}
     * .
     *
     * @example samples/V1beta1/AssuredWorkloadsServiceClient/delete_workload.php
     *
     * @param DeleteWorkloadRequest $request     A request to house fields associated with the call.
     * @param array                 $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @throws ApiException Thrown if the API call fails.
     *
     * @experimental
     */
    public function deleteWorkload(DeleteWorkloadRequest $request, array $callOptions = []): void
    {
        $this->startApiCall('DeleteWorkload', $request, $callOptions)->wait();
    }

    /**
     * Gets Assured Workload associated with a CRM Node
     *
     * The async variant is {@see AssuredWorkloadsServiceClient::getWorkloadAsync()} .
     *
     * @example samples/V1beta1/AssuredWorkloadsServiceClient/get_workload.php
     *
     * @param GetWorkloadRequest $request     A request to house fields associated with the call.
     * @param array              $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Workload
     *
     * @throws ApiException Thrown if the API call fails.
     *
     * @experimental
     */
    public function getWorkload(GetWorkloadRequest $request, array $callOptions = []): Workload
    {
        return $this->startApiCall('GetWorkload', $request, $callOptions)->wait();
    }

    /**
     * Lists Assured Workloads under a CRM Node.
     *
     * The async variant is {@see AssuredWorkloadsServiceClient::listWorkloadsAsync()}
     * .
     *
     * @example samples/V1beta1/AssuredWorkloadsServiceClient/list_workloads.php
     *
     * @param ListWorkloadsRequest $request     A request to house fields associated with the call.
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
     *
     * @experimental
     */
    public function listWorkloads(ListWorkloadsRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('ListWorkloads', $request, $callOptions);
    }

    /**
     * Restrict the list of resources allowed in the Workload environment.
     * The current list of allowed products can be found at
     * https://cloud.google.com/assured-workloads/docs/supported-products
     * In addition to assuredworkloads.workload.update permission, the user should
     * also have orgpolicy.policy.set permission on the folder resource
     * to use this functionality.
     *
     * The async variant is
     * {@see AssuredWorkloadsServiceClient::restrictAllowedResourcesAsync()} .
     *
     * @example samples/V1beta1/AssuredWorkloadsServiceClient/restrict_allowed_resources.php
     *
     * @param RestrictAllowedResourcesRequest $request     A request to house fields associated with the call.
     * @param array                           $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return RestrictAllowedResourcesResponse
     *
     * @throws ApiException Thrown if the API call fails.
     *
     * @experimental
     */
    public function restrictAllowedResources(
        RestrictAllowedResourcesRequest $request,
        array $callOptions = []
    ): RestrictAllowedResourcesResponse {
        return $this->startApiCall('RestrictAllowedResources', $request, $callOptions)->wait();
    }

    /**
     * Updates an existing workload.
     * Currently allows updating of workload display_name and labels.
     * For force updates don't set etag field in the Workload.
     * Only one update operation per workload can be in progress.
     *
     * The async variant is {@see AssuredWorkloadsServiceClient::updateWorkloadAsync()}
     * .
     *
     * @example samples/V1beta1/AssuredWorkloadsServiceClient/update_workload.php
     *
     * @param UpdateWorkloadRequest $request     A request to house fields associated with the call.
     * @param array                 $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Workload
     *
     * @throws ApiException Thrown if the API call fails.
     *
     * @experimental
     */
    public function updateWorkload(UpdateWorkloadRequest $request, array $callOptions = []): Workload
    {
        return $this->startApiCall('UpdateWorkload', $request, $callOptions)->wait();
    }
}
