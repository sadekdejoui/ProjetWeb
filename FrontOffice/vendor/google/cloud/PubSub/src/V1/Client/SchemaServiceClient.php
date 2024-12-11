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
 * https://github.com/googleapis/googleapis/blob/master/google/pubsub/v1/schema.proto
 * Updates to the above are reflected here through a refresh process.
 */

namespace Google\Cloud\PubSub\V1\Client;

use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\PagedListResponse;
use Google\ApiCore\ResourceHelperTrait;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\Cloud\Iam\V1\GetIamPolicyRequest;
use Google\Cloud\Iam\V1\Policy;
use Google\Cloud\Iam\V1\SetIamPolicyRequest;
use Google\Cloud\Iam\V1\TestIamPermissionsRequest;
use Google\Cloud\Iam\V1\TestIamPermissionsResponse;
use Google\Cloud\PubSub\V1\CommitSchemaRequest;
use Google\Cloud\PubSub\V1\CreateSchemaRequest;
use Google\Cloud\PubSub\V1\DeleteSchemaRequest;
use Google\Cloud\PubSub\V1\DeleteSchemaRevisionRequest;
use Google\Cloud\PubSub\V1\GetSchemaRequest;
use Google\Cloud\PubSub\V1\ListSchemaRevisionsRequest;
use Google\Cloud\PubSub\V1\ListSchemasRequest;
use Google\Cloud\PubSub\V1\RollbackSchemaRequest;
use Google\Cloud\PubSub\V1\Schema;
use Google\Cloud\PubSub\V1\ValidateMessageRequest;
use Google\Cloud\PubSub\V1\ValidateMessageResponse;
use Google\Cloud\PubSub\V1\ValidateSchemaRequest;
use Google\Cloud\PubSub\V1\ValidateSchemaResponse;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * Service Description: Service for doing schema-related operations.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods.
 *
 * Many parameters require resource names to be formatted in a particular way. To
 * assist with these names, this class includes a format method for each type of
 * name, and additionally a parseName method to extract the individual identifiers
 * contained within formatted names that are returned by the API.
 *
 * @method PromiseInterface<Schema> commitSchemaAsync(CommitSchemaRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<Schema> createSchemaAsync(CreateSchemaRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<void> deleteSchemaAsync(DeleteSchemaRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<Schema> deleteSchemaRevisionAsync(DeleteSchemaRevisionRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<Schema> getSchemaAsync(GetSchemaRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<PagedListResponse> listSchemaRevisionsAsync(ListSchemaRevisionsRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<PagedListResponse> listSchemasAsync(ListSchemasRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<Schema> rollbackSchemaAsync(RollbackSchemaRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<ValidateMessageResponse> validateMessageAsync(ValidateMessageRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<ValidateSchemaResponse> validateSchemaAsync(ValidateSchemaRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<Policy> getIamPolicyAsync(GetIamPolicyRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<Policy> setIamPolicyAsync(SetIamPolicyRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<TestIamPermissionsResponse> testIamPermissionsAsync(TestIamPermissionsRequest $request, array $optionalArgs = [])
 */
final class SchemaServiceClient
{
    use GapicClientTrait;
    use ResourceHelperTrait;

    /** The name of the service. */
    private const SERVICE_NAME = 'google.pubsub.v1.SchemaService';

    /**
     * The default address of the service.
     *
     * @deprecated SERVICE_ADDRESS_TEMPLATE should be used instead.
     */
    private const SERVICE_ADDRESS = 'pubsub.googleapis.com';

    /** The address template of the service. */
    private const SERVICE_ADDRESS_TEMPLATE = 'pubsub.UNIVERSE_DOMAIN';

    /** The default port of the service. */
    private const DEFAULT_SERVICE_PORT = 443;

    /** The name of the code generator, to be included in the agent header. */
    private const CODEGEN_NAME = 'gapic';

    /** The default scopes required by the service. */
    public static $serviceScopes = [
        'https://www.googleapis.com/auth/cloud-platform',
        'https://www.googleapis.com/auth/pubsub',
    ];

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'apiEndpoint' => self::SERVICE_ADDRESS . ':' . self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__ . '/../resources/schema_service_client_config.json',
            'descriptorsConfigPath' => __DIR__ . '/../resources/schema_service_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__ . '/../resources/schema_service_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__ . '/../resources/schema_service_rest_client_config.php',
                ],
            ],
        ];
    }

    /**
     * Formats a string containing the fully-qualified path to represent a project
     * resource.
     *
     * @param string $project
     *
     * @return string The formatted project resource.
     */
    public static function projectName(string $project): string
    {
        return self::getPathTemplate('project')->render([
            'project' => $project,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a schema
     * resource.
     *
     * @param string $project
     * @param string $schema
     *
     * @return string The formatted schema resource.
     */
    public static function schemaName(string $project, string $schema): string
    {
        return self::getPathTemplate('schema')->render([
            'project' => $project,
            'schema' => $schema,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - project: projects/{project}
     * - schema: projects/{project}/schemas/{schema}
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
     *           as "<uri>:<port>". Default 'pubsub.googleapis.com:443'.
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
     * Commits a new schema revision to an existing schema.
     *
     * The async variant is {@see SchemaServiceClient::commitSchemaAsync()} .
     *
     * @example samples/V1/SchemaServiceClient/commit_schema.php
     *
     * @param CommitSchemaRequest $request     A request to house fields associated with the call.
     * @param array               $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Schema
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function commitSchema(CommitSchemaRequest $request, array $callOptions = []): Schema
    {
        return $this->startApiCall('CommitSchema', $request, $callOptions)->wait();
    }

    /**
     * Creates a schema.
     *
     * The async variant is {@see SchemaServiceClient::createSchemaAsync()} .
     *
     * @example samples/V1/SchemaServiceClient/create_schema.php
     *
     * @param CreateSchemaRequest $request     A request to house fields associated with the call.
     * @param array               $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Schema
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function createSchema(CreateSchemaRequest $request, array $callOptions = []): Schema
    {
        return $this->startApiCall('CreateSchema', $request, $callOptions)->wait();
    }

    /**
     * Deletes a schema.
     *
     * The async variant is {@see SchemaServiceClient::deleteSchemaAsync()} .
     *
     * @example samples/V1/SchemaServiceClient/delete_schema.php
     *
     * @param DeleteSchemaRequest $request     A request to house fields associated with the call.
     * @param array               $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function deleteSchema(DeleteSchemaRequest $request, array $callOptions = []): void
    {
        $this->startApiCall('DeleteSchema', $request, $callOptions)->wait();
    }

    /**
     * Deletes a specific schema revision.
     *
     * The async variant is {@see SchemaServiceClient::deleteSchemaRevisionAsync()} .
     *
     * @example samples/V1/SchemaServiceClient/delete_schema_revision.php
     *
     * @param DeleteSchemaRevisionRequest $request     A request to house fields associated with the call.
     * @param array                       $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Schema
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function deleteSchemaRevision(DeleteSchemaRevisionRequest $request, array $callOptions = []): Schema
    {
        return $this->startApiCall('DeleteSchemaRevision', $request, $callOptions)->wait();
    }

    /**
     * Gets a schema.
     *
     * The async variant is {@see SchemaServiceClient::getSchemaAsync()} .
     *
     * @example samples/V1/SchemaServiceClient/get_schema.php
     *
     * @param GetSchemaRequest $request     A request to house fields associated with the call.
     * @param array            $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Schema
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getSchema(GetSchemaRequest $request, array $callOptions = []): Schema
    {
        return $this->startApiCall('GetSchema', $request, $callOptions)->wait();
    }

    /**
     * Lists all schema revisions for the named schema.
     *
     * The async variant is {@see SchemaServiceClient::listSchemaRevisionsAsync()} .
     *
     * @example samples/V1/SchemaServiceClient/list_schema_revisions.php
     *
     * @param ListSchemaRevisionsRequest $request     A request to house fields associated with the call.
     * @param array                      $callOptions {
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
    public function listSchemaRevisions(ListSchemaRevisionsRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('ListSchemaRevisions', $request, $callOptions);
    }

    /**
     * Lists schemas in a project.
     *
     * The async variant is {@see SchemaServiceClient::listSchemasAsync()} .
     *
     * @example samples/V1/SchemaServiceClient/list_schemas.php
     *
     * @param ListSchemasRequest $request     A request to house fields associated with the call.
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
    public function listSchemas(ListSchemasRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('ListSchemas', $request, $callOptions);
    }

    /**
     * Creates a new schema revision that is a copy of the provided revision_id.
     *
     * The async variant is {@see SchemaServiceClient::rollbackSchemaAsync()} .
     *
     * @example samples/V1/SchemaServiceClient/rollback_schema.php
     *
     * @param RollbackSchemaRequest $request     A request to house fields associated with the call.
     * @param array                 $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Schema
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function rollbackSchema(RollbackSchemaRequest $request, array $callOptions = []): Schema
    {
        return $this->startApiCall('RollbackSchema', $request, $callOptions)->wait();
    }

    /**
     * Validates a message against a schema.
     *
     * The async variant is {@see SchemaServiceClient::validateMessageAsync()} .
     *
     * @example samples/V1/SchemaServiceClient/validate_message.php
     *
     * @param ValidateMessageRequest $request     A request to house fields associated with the call.
     * @param array                  $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return ValidateMessageResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function validateMessage(ValidateMessageRequest $request, array $callOptions = []): ValidateMessageResponse
    {
        return $this->startApiCall('ValidateMessage', $request, $callOptions)->wait();
    }

    /**
     * Validates a schema.
     *
     * The async variant is {@see SchemaServiceClient::validateSchemaAsync()} .
     *
     * @example samples/V1/SchemaServiceClient/validate_schema.php
     *
     * @param ValidateSchemaRequest $request     A request to house fields associated with the call.
     * @param array                 $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return ValidateSchemaResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function validateSchema(ValidateSchemaRequest $request, array $callOptions = []): ValidateSchemaResponse
    {
        return $this->startApiCall('ValidateSchema', $request, $callOptions)->wait();
    }

    /**
     * Gets the access control policy for a resource. Returns an empty policy
    if the resource exists and does not have a policy set.
     *
     * The async variant is {@see SchemaServiceClient::getIamPolicyAsync()} .
     *
     * @example samples/V1/SchemaServiceClient/get_iam_policy.php
     *
     * @param GetIamPolicyRequest $request     A request to house fields associated with the call.
     * @param array               $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Policy
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getIamPolicy(GetIamPolicyRequest $request, array $callOptions = []): Policy
    {
        return $this->startApiCall('GetIamPolicy', $request, $callOptions)->wait();
    }

    /**
     * Sets the access control policy on the specified resource. Replaces
    any existing policy.

    Can return `NOT_FOUND`, `INVALID_ARGUMENT`, and `PERMISSION_DENIED`
    errors.
     *
     * The async variant is {@see SchemaServiceClient::setIamPolicyAsync()} .
     *
     * @example samples/V1/SchemaServiceClient/set_iam_policy.php
     *
     * @param SetIamPolicyRequest $request     A request to house fields associated with the call.
     * @param array               $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Policy
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function setIamPolicy(SetIamPolicyRequest $request, array $callOptions = []): Policy
    {
        return $this->startApiCall('SetIamPolicy', $request, $callOptions)->wait();
    }

    /**
     * Returns permissions that a caller has on the specified resource. If the
    resource does not exist, this will return an empty set of
    permissions, not a `NOT_FOUND` error.

    Note: This operation is designed to be used for building
    permission-aware UIs and command-line tools, not for authorization
    checking. This operation may "fail open" without warning.
     *
     * The async variant is {@see SchemaServiceClient::testIamPermissionsAsync()} .
     *
     * @example samples/V1/SchemaServiceClient/test_iam_permissions.php
     *
     * @param TestIamPermissionsRequest $request     A request to house fields associated with the call.
     * @param array                     $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return TestIamPermissionsResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function testIamPermissions(TestIamPermissionsRequest $request, array $callOptions = []): TestIamPermissionsResponse
    {
        return $this->startApiCall('TestIamPermissions', $request, $callOptions)->wait();
    }
}
