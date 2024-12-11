<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/sql/v1/cloud_sql_resources.proto

namespace Google\Cloud\Sql\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Database instance local user password validation policy
 *
 * Generated from protobuf message <code>google.cloud.sql.v1.PasswordValidationPolicy</code>
 */
class PasswordValidationPolicy extends \Google\Protobuf\Internal\Message
{
    /**
     * Minimum number of characters allowed.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value min_length = 1;</code>
     */
    protected $min_length = null;
    /**
     * The complexity of the password.
     *
     * Generated from protobuf field <code>.google.cloud.sql.v1.PasswordValidationPolicy.Complexity complexity = 2;</code>
     */
    protected $complexity = 0;
    /**
     * Number of previous passwords that cannot be reused.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value reuse_interval = 3;</code>
     */
    protected $reuse_interval = null;
    /**
     * Disallow username as a part of the password.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue disallow_username_substring = 4;</code>
     */
    protected $disallow_username_substring = null;
    /**
     * Minimum interval after which the password can be changed. This flag is only
     * supported for PostgreSQL.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration password_change_interval = 5;</code>
     */
    protected $password_change_interval = null;
    /**
     * Whether the password policy is enabled or not.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue enable_password_policy = 6;</code>
     */
    protected $enable_password_policy = null;
    /**
     * This field is deprecated and will be removed in a future version of the
     * API.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue disallow_compromised_credentials = 7 [deprecated = true];</code>
     * @deprecated
     */
    protected $disallow_compromised_credentials = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Int32Value $min_length
     *           Minimum number of characters allowed.
     *     @type int $complexity
     *           The complexity of the password.
     *     @type \Google\Protobuf\Int32Value $reuse_interval
     *           Number of previous passwords that cannot be reused.
     *     @type \Google\Protobuf\BoolValue $disallow_username_substring
     *           Disallow username as a part of the password.
     *     @type \Google\Protobuf\Duration $password_change_interval
     *           Minimum interval after which the password can be changed. This flag is only
     *           supported for PostgreSQL.
     *     @type \Google\Protobuf\BoolValue $enable_password_policy
     *           Whether the password policy is enabled or not.
     *     @type \Google\Protobuf\BoolValue $disallow_compromised_credentials
     *           This field is deprecated and will be removed in a future version of the
     *           API.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Sql\V1\CloudSqlResources::initOnce();
        parent::__construct($data);
    }

    /**
     * Minimum number of characters allowed.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value min_length = 1;</code>
     * @return \Google\Protobuf\Int32Value|null
     */
    public function getMinLength()
    {
        return $this->min_length;
    }

    public function hasMinLength()
    {
        return isset($this->min_length);
    }

    public function clearMinLength()
    {
        unset($this->min_length);
    }

    /**
     * Returns the unboxed value from <code>getMinLength()</code>

     * Minimum number of characters allowed.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value min_length = 1;</code>
     * @return int|null
     */
    public function getMinLengthUnwrapped()
    {
        return $this->readWrapperValue("min_length");
    }

    /**
     * Minimum number of characters allowed.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value min_length = 1;</code>
     * @param \Google\Protobuf\Int32Value $var
     * @return $this
     */
    public function setMinLength($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int32Value::class);
        $this->min_length = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int32Value object.

     * Minimum number of characters allowed.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value min_length = 1;</code>
     * @param int|null $var
     * @return $this
     */
    public function setMinLengthUnwrapped($var)
    {
        $this->writeWrapperValue("min_length", $var);
        return $this;}

    /**
     * The complexity of the password.
     *
     * Generated from protobuf field <code>.google.cloud.sql.v1.PasswordValidationPolicy.Complexity complexity = 2;</code>
     * @return int
     */
    public function getComplexity()
    {
        return $this->complexity;
    }

    /**
     * The complexity of the password.
     *
     * Generated from protobuf field <code>.google.cloud.sql.v1.PasswordValidationPolicy.Complexity complexity = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setComplexity($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Sql\V1\PasswordValidationPolicy\Complexity::class);
        $this->complexity = $var;

        return $this;
    }

    /**
     * Number of previous passwords that cannot be reused.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value reuse_interval = 3;</code>
     * @return \Google\Protobuf\Int32Value|null
     */
    public function getReuseInterval()
    {
        return $this->reuse_interval;
    }

    public function hasReuseInterval()
    {
        return isset($this->reuse_interval);
    }

    public function clearReuseInterval()
    {
        unset($this->reuse_interval);
    }

    /**
     * Returns the unboxed value from <code>getReuseInterval()</code>

     * Number of previous passwords that cannot be reused.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value reuse_interval = 3;</code>
     * @return int|null
     */
    public function getReuseIntervalUnwrapped()
    {
        return $this->readWrapperValue("reuse_interval");
    }

    /**
     * Number of previous passwords that cannot be reused.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value reuse_interval = 3;</code>
     * @param \Google\Protobuf\Int32Value $var
     * @return $this
     */
    public function setReuseInterval($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int32Value::class);
        $this->reuse_interval = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int32Value object.

     * Number of previous passwords that cannot be reused.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value reuse_interval = 3;</code>
     * @param int|null $var
     * @return $this
     */
    public function setReuseIntervalUnwrapped($var)
    {
        $this->writeWrapperValue("reuse_interval", $var);
        return $this;}

    /**
     * Disallow username as a part of the password.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue disallow_username_substring = 4;</code>
     * @return \Google\Protobuf\BoolValue|null
     */
    public function getDisallowUsernameSubstring()
    {
        return $this->disallow_username_substring;
    }

    public function hasDisallowUsernameSubstring()
    {
        return isset($this->disallow_username_substring);
    }

    public function clearDisallowUsernameSubstring()
    {
        unset($this->disallow_username_substring);
    }

    /**
     * Returns the unboxed value from <code>getDisallowUsernameSubstring()</code>

     * Disallow username as a part of the password.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue disallow_username_substring = 4;</code>
     * @return bool|null
     */
    public function getDisallowUsernameSubstringUnwrapped()
    {
        return $this->readWrapperValue("disallow_username_substring");
    }

    /**
     * Disallow username as a part of the password.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue disallow_username_substring = 4;</code>
     * @param \Google\Protobuf\BoolValue $var
     * @return $this
     */
    public function setDisallowUsernameSubstring($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\BoolValue::class);
        $this->disallow_username_substring = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\BoolValue object.

     * Disallow username as a part of the password.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue disallow_username_substring = 4;</code>
     * @param bool|null $var
     * @return $this
     */
    public function setDisallowUsernameSubstringUnwrapped($var)
    {
        $this->writeWrapperValue("disallow_username_substring", $var);
        return $this;}

    /**
     * Minimum interval after which the password can be changed. This flag is only
     * supported for PostgreSQL.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration password_change_interval = 5;</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getPasswordChangeInterval()
    {
        return $this->password_change_interval;
    }

    public function hasPasswordChangeInterval()
    {
        return isset($this->password_change_interval);
    }

    public function clearPasswordChangeInterval()
    {
        unset($this->password_change_interval);
    }

    /**
     * Minimum interval after which the password can be changed. This flag is only
     * supported for PostgreSQL.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration password_change_interval = 5;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setPasswordChangeInterval($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->password_change_interval = $var;

        return $this;
    }

    /**
     * Whether the password policy is enabled or not.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue enable_password_policy = 6;</code>
     * @return \Google\Protobuf\BoolValue|null
     */
    public function getEnablePasswordPolicy()
    {
        return $this->enable_password_policy;
    }

    public function hasEnablePasswordPolicy()
    {
        return isset($this->enable_password_policy);
    }

    public function clearEnablePasswordPolicy()
    {
        unset($this->enable_password_policy);
    }

    /**
     * Returns the unboxed value from <code>getEnablePasswordPolicy()</code>

     * Whether the password policy is enabled or not.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue enable_password_policy = 6;</code>
     * @return bool|null
     */
    public function getEnablePasswordPolicyUnwrapped()
    {
        return $this->readWrapperValue("enable_password_policy");
    }

    /**
     * Whether the password policy is enabled or not.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue enable_password_policy = 6;</code>
     * @param \Google\Protobuf\BoolValue $var
     * @return $this
     */
    public function setEnablePasswordPolicy($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\BoolValue::class);
        $this->enable_password_policy = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\BoolValue object.

     * Whether the password policy is enabled or not.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue enable_password_policy = 6;</code>
     * @param bool|null $var
     * @return $this
     */
    public function setEnablePasswordPolicyUnwrapped($var)
    {
        $this->writeWrapperValue("enable_password_policy", $var);
        return $this;}

    /**
     * This field is deprecated and will be removed in a future version of the
     * API.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue disallow_compromised_credentials = 7 [deprecated = true];</code>
     * @return \Google\Protobuf\BoolValue|null
     * @deprecated
     */
    public function getDisallowCompromisedCredentials()
    {
        @trigger_error('disallow_compromised_credentials is deprecated.', E_USER_DEPRECATED);
        return $this->disallow_compromised_credentials;
    }

    public function hasDisallowCompromisedCredentials()
    {
        @trigger_error('disallow_compromised_credentials is deprecated.', E_USER_DEPRECATED);
        return isset($this->disallow_compromised_credentials);
    }

    public function clearDisallowCompromisedCredentials()
    {
        @trigger_error('disallow_compromised_credentials is deprecated.', E_USER_DEPRECATED);
        unset($this->disallow_compromised_credentials);
    }

    /**
     * Returns the unboxed value from <code>getDisallowCompromisedCredentials()</code>

     * This field is deprecated and will be removed in a future version of the
     * API.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue disallow_compromised_credentials = 7 [deprecated = true];</code>
     * @return bool|null
     */
    public function getDisallowCompromisedCredentialsUnwrapped()
    {
        @trigger_error('disallow_compromised_credentials is deprecated.', E_USER_DEPRECATED);
        return $this->readWrapperValue("disallow_compromised_credentials");
    }

    /**
     * This field is deprecated and will be removed in a future version of the
     * API.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue disallow_compromised_credentials = 7 [deprecated = true];</code>
     * @param \Google\Protobuf\BoolValue $var
     * @return $this
     * @deprecated
     */
    public function setDisallowCompromisedCredentials($var)
    {
        @trigger_error('disallow_compromised_credentials is deprecated.', E_USER_DEPRECATED);
        GPBUtil::checkMessage($var, \Google\Protobuf\BoolValue::class);
        $this->disallow_compromised_credentials = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\BoolValue object.

     * This field is deprecated and will be removed in a future version of the
     * API.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue disallow_compromised_credentials = 7 [deprecated = true];</code>
     * @param bool|null $var
     * @return $this
     */
    public function setDisallowCompromisedCredentialsUnwrapped($var)
    {
        $this->writeWrapperValue("disallow_compromised_credentials", $var);
        return $this;}

}

