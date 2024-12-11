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
 * https://github.com/googleapis/googleapis/blob/master/google/cloud/filestore/v1/cloud_filestore_service.proto
 * Updates to the above are reflected here through a refresh process.
 */

namespace Google\Cloud\Filestore\V1\Client;

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
use Google\Cloud\Filestore\V1\Backup;
use Google\Cloud\Filestore\V1\CreateBackupRequest;
use Google\Cloud\Filestore\V1\CreateInstanceRequest;
use Google\Cloud\Filestore\V1\CreateSnapshotRequest;
use Google\Cloud\Filestore\V1\DeleteBackupRequest;
use Google\Cloud\Filestore\V1\DeleteInstanceRequest;
use Google\Cloud\Filestore\V1\DeleteSnapshotRequest;
use Google\Cloud\Filestore\V1\GetBackupRequest;
use Google\Cloud\Filestore\V1\GetInstanceRequest;
use Google\Cloud\Filestore\V1\GetSnapshotRequest;
use Google\Cloud\Filestore\V1\Instance;
use Google\Cloud\Filestore\V1\ListBackupsRequest;
use Google\Cloud\Filestore\V1\ListInstancesRequest;
use Google\Cloud\Filestore\V1\ListSnapshotsRequest;
use Google\Cloud\Filestore\V1\RestoreInstanceRequest;
use Google\Cloud\Filestore\V1\RevertInstanceRequest;
use Google\Cloud\Filestore\V1\Snapshot;
use Google\Cloud\Filestore\V1\UpdateBackupRequest;
use Google\Cloud\Filestore\V1\UpdateInstanceRequest;
use Google\Cloud\Filestore\V1\UpdateSnapshotRequest;
use Google\LongRunning\Client\OperationsClient;
use Google\LongRunning\Operation;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * Service Description: Configures and manages Filestore resources.
 *
 * Filestore Manager v1.
 *
 * The `file.googleapis.com` service implements the Filestore API and
 * defines the following resource model for managing instances:
 * * The service works with a collection of cloud projects, named: `/projects/*`
 * * Each project has a collection of available locations, named: `/locations/*`
 * * Each location has a collection of instances and backups, named:
 * `/instances/*` and `/backups/*` respectively.
 * * As such, Filestore instances are resources of the form:
 * `/projects/{project_number}/locations/{location_id}/instances/{instance_id}`
 * and backups are resources of the form:
 * `/projects/{project_number}/locations/{location_id}/backup/{backup_id}`
 *
 * Note that location_id must be a Google Cloud `zone` for instances, but
 * a Google Cloud `region` for backups; for example:
 * * `projects/12345/locations/us-central1-c/instances/my-filestore`
 * * `projects/12345/locations/us-central1/backups/my-backup`
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods.
 *
 * Many parameters require resource names to be formatted in a particular way. To
 * assist with these names, this class includes a format method for each type of
 * name, and additionally a parseName method to extract the individual identifiers
 * contained within formatted names that are returned by the API.
 *
 * @method PromiseInterface<OperationResponse> createBackupAsync(CreateBackupRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<OperationResponse> createInstanceAsync(CreateInstanceRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<OperationResponse> createSnapshotAsync(CreateSnapshotRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<OperationResponse> deleteBackupAsync(DeleteBackupRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<OperationResponse> deleteInstanceAsync(DeleteInstanceRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<OperationResponse> deleteSnapshotAsync(DeleteSnapshotRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<Backup> getBackupAsync(GetBackupRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<Instance> getInstanceAsync(GetInstanceRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<Snapshot> getSnapshotAsync(GetSnapshotRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<PagedListResponse> listBackupsAsync(ListBackupsRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<PagedListResponse> listInstancesAsync(ListInstancesRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<PagedListResponse> listSnapshotsAsync(ListSnapshotsRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<OperationResponse> restoreInstanceAsync(RestoreInstanceRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<OperationResponse> revertInstanceAsync(RevertInstanceRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<OperationResponse> updateBackupAsync(UpdateBackupRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<OperationResponse> updateInstanceAsync(UpdateInstanceRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<OperationResponse> updateSnapshotAsync(UpdateSnapshotRequest $request, array $optionalArgs = [])
 */
final class CloudFilestoreManagerClient
{
    use GapicClientTrait;
    use ResourceHelperTrait;

    /** The name of the service. */
    private const SERVICE_NAME = 'google.cloud.filestore.v1.CloudFilestoreManager';

    /**
     * The default address of the service.
     *
     * @deprecated SERVICE_ADDRESS_TEMPLATE should be used instead.
     */
    private const SERVICE_ADDRESS = 'file.googleapis.com';

    /** The address template of the service. */
    private const SERVICE_ADDRESS_TEMPLATE = 'file.UNIVERSE_DOMAIN';

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
            'clientConfig' => __DIR__ . '/../resources/cloud_filestore_manager_client_config.json',
            'descriptorsConfigPath' => __DIR__ . '/../resources/cloud_filestore_manager_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__ . '/../resources/cloud_filestore_manager_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__ . '/../resources/cloud_filestore_manager_rest_client_config.php',
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
     * Formats a string containing the fully-qualified path to represent a backup
     * resource.
     *
     * @param string $project
     * @param string $location
     * @param string $backup
     *
     * @return string The formatted backup resource.
     */
    public static function backupName(string $project, string $location, string $backup): string
    {
        return self::getPathTemplate('backup')->render([
            'project' => $project,
            'location' => $location,
            'backup' => $backup,
        ]);
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
     * Formats a string containing the fully-qualified path to represent a snapshot
     * resource.
     *
     * @param string $project
     * @param string $location
     * @param string $instance
     * @param string $snapshot
     *
     * @return string The formatted snapshot resource.
     */
    public static function snapshotName(string $project, string $location, string $instance, string $snapshot): string
    {
        return self::getPathTemplate('snapshot')->render([
            'project' => $project,
            'location' => $location,
            'instance' => $instance,
            'snapshot' => $snapshot,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - backup: projects/{project}/locations/{location}/backups/{backup}
     * - instance: projects/{project}/locations/{location}/instances/{instance}
     * - location: projects/{project}/locations/{location}
     * - snapshot: projects/{project}/locations/{location}/instances/{instance}/snapshots/{snapshot}
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
     *           as "<uri>:<port>". Default 'file.googleapis.com:443'.
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
     * Creates a backup.
     *
     * The async variant is {@see CloudFilestoreManagerClient::createBackupAsync()} .
     *
     * @example samples/V1/CloudFilestoreManagerClient/create_backup.php
     *
     * @param CreateBackupRequest $request     A request to house fields associated with the call.
     * @param array               $callOptions {
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
    public function createBackup(CreateBackupRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('CreateBackup', $request, $callOptions)->wait();
    }

    /**
     * Creates an instance.
     * When creating from a backup, the capacity of the new instance needs to be
     * equal to or larger than the capacity of the backup (and also equal to or
     * larger than the minimum capacity of the tier).
     *
     * The async variant is {@see CloudFilestoreManagerClient::createInstanceAsync()} .
     *
     * @example samples/V1/CloudFilestoreManagerClient/create_instance.php
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
     * Creates a snapshot.
     *
     * The async variant is {@see CloudFilestoreManagerClient::createSnapshotAsync()} .
     *
     * @example samples/V1/CloudFilestoreManagerClient/create_snapshot.php
     *
     * @param CreateSnapshotRequest $request     A request to house fields associated with the call.
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
    public function createSnapshot(CreateSnapshotRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('CreateSnapshot', $request, $callOptions)->wait();
    }

    /**
     * Deletes a backup.
     *
     * The async variant is {@see CloudFilestoreManagerClient::deleteBackupAsync()} .
     *
     * @example samples/V1/CloudFilestoreManagerClient/delete_backup.php
     *
     * @param DeleteBackupRequest $request     A request to house fields associated with the call.
     * @param array               $callOptions {
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
    public function deleteBackup(DeleteBackupRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('DeleteBackup', $request, $callOptions)->wait();
    }

    /**
     * Deletes an instance.
     *
     * The async variant is {@see CloudFilestoreManagerClient::deleteInstanceAsync()} .
     *
     * @example samples/V1/CloudFilestoreManagerClient/delete_instance.php
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
     * Deletes a snapshot.
     *
     * The async variant is {@see CloudFilestoreManagerClient::deleteSnapshotAsync()} .
     *
     * @example samples/V1/CloudFilestoreManagerClient/delete_snapshot.php
     *
     * @param DeleteSnapshotRequest $request     A request to house fields associated with the call.
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
    public function deleteSnapshot(DeleteSnapshotRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('DeleteSnapshot', $request, $callOptions)->wait();
    }

    /**
     * Gets the details of a specific backup.
     *
     * The async variant is {@see CloudFilestoreManagerClient::getBackupAsync()} .
     *
     * @example samples/V1/CloudFilestoreManagerClient/get_backup.php
     *
     * @param GetBackupRequest $request     A request to house fields associated with the call.
     * @param array            $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Backup
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getBackup(GetBackupRequest $request, array $callOptions = []): Backup
    {
        return $this->startApiCall('GetBackup', $request, $callOptions)->wait();
    }

    /**
     * Gets the details of a specific instance.
     *
     * The async variant is {@see CloudFilestoreManagerClient::getInstanceAsync()} .
     *
     * @example samples/V1/CloudFilestoreManagerClient/get_instance.php
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
     * Gets the details of a specific snapshot.
     *
     * The async variant is {@see CloudFilestoreManagerClient::getSnapshotAsync()} .
     *
     * @example samples/V1/CloudFilestoreManagerClient/get_snapshot.php
     *
     * @param GetSnapshotRequest $request     A request to house fields associated with the call.
     * @param array              $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Snapshot
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getSnapshot(GetSnapshotRequest $request, array $callOptions = []): Snapshot
    {
        return $this->startApiCall('GetSnapshot', $request, $callOptions)->wait();
    }

    /**
     * Lists all backups in a project for either a specified location or for all
     * locations.
     *
     * The async variant is {@see CloudFilestoreManagerClient::listBackupsAsync()} .
     *
     * @example samples/V1/CloudFilestoreManagerClient/list_backups.php
     *
     * @param ListBackupsRequest $request     A request to house fields associated with the call.
     * @param array              $callOptions {
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
    public function listBackups(ListBackupsRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('ListBackups', $request, $callOptions);
    }

    /**
     * Lists all instances in a project for either a specified location
     * or for all locations.
     *
     * The async variant is {@see CloudFilestoreManagerClient::listInstancesAsync()} .
     *
     * @example samples/V1/CloudFilestoreManagerClient/list_instances.php
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
     * Lists all snapshots in a project for either a specified location
     * or for all locations.
     *
     * The async variant is {@see CloudFilestoreManagerClient::listSnapshotsAsync()} .
     *
     * @example samples/V1/CloudFilestoreManagerClient/list_snapshots.php
     *
     * @param ListSnapshotsRequest $request     A request to house fields associated with the call.
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
    public function listSnapshots(ListSnapshotsRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('ListSnapshots', $request, $callOptions);
    }

    /**
     * Restores an existing instance's file share from a backup.
     *
     * The capacity of the instance needs to be equal to or larger than the
     * capacity of the backup (and also equal to or larger than the minimum
     * capacity of the tier).
     *
     * The async variant is {@see CloudFilestoreManagerClient::restoreInstanceAsync()}
     * .
     *
     * @example samples/V1/CloudFilestoreManagerClient/restore_instance.php
     *
     * @param RestoreInstanceRequest $request     A request to house fields associated with the call.
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
    public function restoreInstance(RestoreInstanceRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('RestoreInstance', $request, $callOptions)->wait();
    }

    /**
     * Revert an existing instance's file system to a specified snapshot.
     *
     * The async variant is {@see CloudFilestoreManagerClient::revertInstanceAsync()} .
     *
     * @example samples/V1/CloudFilestoreManagerClient/revert_instance.php
     *
     * @param RevertInstanceRequest $request     A request to house fields associated with the call.
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
    public function revertInstance(RevertInstanceRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('RevertInstance', $request, $callOptions)->wait();
    }

    /**
     * Updates the settings of a specific backup.
     *
     * The async variant is {@see CloudFilestoreManagerClient::updateBackupAsync()} .
     *
     * @example samples/V1/CloudFilestoreManagerClient/update_backup.php
     *
     * @param UpdateBackupRequest $request     A request to house fields associated with the call.
     * @param array               $callOptions {
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
    public function updateBackup(UpdateBackupRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('UpdateBackup', $request, $callOptions)->wait();
    }

    /**
     * Updates the settings of a specific instance.
     *
     * The async variant is {@see CloudFilestoreManagerClient::updateInstanceAsync()} .
     *
     * @example samples/V1/CloudFilestoreManagerClient/update_instance.php
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
     * Updates the settings of a specific snapshot.
     *
     * The async variant is {@see CloudFilestoreManagerClient::updateSnapshotAsync()} .
     *
     * @example samples/V1/CloudFilestoreManagerClient/update_snapshot.php
     *
     * @param UpdateSnapshotRequest $request     A request to house fields associated with the call.
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
    public function updateSnapshot(UpdateSnapshotRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('UpdateSnapshot', $request, $callOptions)->wait();
    }
}
