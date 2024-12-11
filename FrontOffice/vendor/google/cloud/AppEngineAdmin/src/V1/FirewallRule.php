<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/appengine/v1/firewall.proto

namespace Google\Cloud\AppEngine\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A single firewall rule that is evaluated against incoming traffic
 * and provides an action to take on matched requests.
 *
 * Generated from protobuf message <code>google.appengine.v1.FirewallRule</code>
 */
class FirewallRule extends \Google\Protobuf\Internal\Message
{
    /**
     * A positive integer between [1, Int32.MaxValue-1] that defines the order of
     * rule evaluation. Rules with the lowest priority are evaluated first.
     * A default rule at priority Int32.MaxValue matches all IPv4 and IPv6 traffic
     * when no previous rule matches. Only the action of this rule can be modified
     * by the user.
     *
     * Generated from protobuf field <code>int32 priority = 1;</code>
     */
    protected $priority = 0;
    /**
     * The action to take on matched requests.
     *
     * Generated from protobuf field <code>.google.appengine.v1.FirewallRule.Action action = 2;</code>
     */
    protected $action = 0;
    /**
     * IP address or range, defined using CIDR notation, of requests that this
     * rule applies to. You can use the wildcard character "*" to match all IPs
     * equivalent to "0/0" and "::/0" together.
     * Examples: `192.168.1.1` or `192.168.0.0/16` or `2001:db8::/32`
     *           or `2001:0db8:0000:0042:0000:8a2e:0370:7334`.
     * <p>Truncation will be silently performed on addresses which are not
     * properly truncated. For example, `1.2.3.4/24` is accepted as the same
     * address as `1.2.3.0/24`. Similarly, for IPv6, `2001:db8::1/32` is accepted
     * as the same address as `2001:db8::/32`.
     *
     * Generated from protobuf field <code>string source_range = 3;</code>
     */
    protected $source_range = '';
    /**
     * An optional string description of this rule.
     * This field has a maximum length of 100 characters.
     *
     * Generated from protobuf field <code>string description = 4;</code>
     */
    protected $description = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $priority
     *           A positive integer between [1, Int32.MaxValue-1] that defines the order of
     *           rule evaluation. Rules with the lowest priority are evaluated first.
     *           A default rule at priority Int32.MaxValue matches all IPv4 and IPv6 traffic
     *           when no previous rule matches. Only the action of this rule can be modified
     *           by the user.
     *     @type int $action
     *           The action to take on matched requests.
     *     @type string $source_range
     *           IP address or range, defined using CIDR notation, of requests that this
     *           rule applies to. You can use the wildcard character "*" to match all IPs
     *           equivalent to "0/0" and "::/0" together.
     *           Examples: `192.168.1.1` or `192.168.0.0/16` or `2001:db8::/32`
     *                     or `2001:0db8:0000:0042:0000:8a2e:0370:7334`.
     *           <p>Truncation will be silently performed on addresses which are not
     *           properly truncated. For example, `1.2.3.4/24` is accepted as the same
     *           address as `1.2.3.0/24`. Similarly, for IPv6, `2001:db8::1/32` is accepted
     *           as the same address as `2001:db8::/32`.
     *     @type string $description
     *           An optional string description of this rule.
     *           This field has a maximum length of 100 characters.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Appengine\V1\Firewall::initOnce();
        parent::__construct($data);
    }

    /**
     * A positive integer between [1, Int32.MaxValue-1] that defines the order of
     * rule evaluation. Rules with the lowest priority are evaluated first.
     * A default rule at priority Int32.MaxValue matches all IPv4 and IPv6 traffic
     * when no previous rule matches. Only the action of this rule can be modified
     * by the user.
     *
     * Generated from protobuf field <code>int32 priority = 1;</code>
     * @return int
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * A positive integer between [1, Int32.MaxValue-1] that defines the order of
     * rule evaluation. Rules with the lowest priority are evaluated first.
     * A default rule at priority Int32.MaxValue matches all IPv4 and IPv6 traffic
     * when no previous rule matches. Only the action of this rule can be modified
     * by the user.
     *
     * Generated from protobuf field <code>int32 priority = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setPriority($var)
    {
        GPBUtil::checkInt32($var);
        $this->priority = $var;

        return $this;
    }

    /**
     * The action to take on matched requests.
     *
     * Generated from protobuf field <code>.google.appengine.v1.FirewallRule.Action action = 2;</code>
     * @return int
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * The action to take on matched requests.
     *
     * Generated from protobuf field <code>.google.appengine.v1.FirewallRule.Action action = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setAction($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\AppEngine\V1\FirewallRule\Action::class);
        $this->action = $var;

        return $this;
    }

    /**
     * IP address or range, defined using CIDR notation, of requests that this
     * rule applies to. You can use the wildcard character "*" to match all IPs
     * equivalent to "0/0" and "::/0" together.
     * Examples: `192.168.1.1` or `192.168.0.0/16` or `2001:db8::/32`
     *           or `2001:0db8:0000:0042:0000:8a2e:0370:7334`.
     * <p>Truncation will be silently performed on addresses which are not
     * properly truncated. For example, `1.2.3.4/24` is accepted as the same
     * address as `1.2.3.0/24`. Similarly, for IPv6, `2001:db8::1/32` is accepted
     * as the same address as `2001:db8::/32`.
     *
     * Generated from protobuf field <code>string source_range = 3;</code>
     * @return string
     */
    public function getSourceRange()
    {
        return $this->source_range;
    }

    /**
     * IP address or range, defined using CIDR notation, of requests that this
     * rule applies to. You can use the wildcard character "*" to match all IPs
     * equivalent to "0/0" and "::/0" together.
     * Examples: `192.168.1.1` or `192.168.0.0/16` or `2001:db8::/32`
     *           or `2001:0db8:0000:0042:0000:8a2e:0370:7334`.
     * <p>Truncation will be silently performed on addresses which are not
     * properly truncated. For example, `1.2.3.4/24` is accepted as the same
     * address as `1.2.3.0/24`. Similarly, for IPv6, `2001:db8::1/32` is accepted
     * as the same address as `2001:db8::/32`.
     *
     * Generated from protobuf field <code>string source_range = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setSourceRange($var)
    {
        GPBUtil::checkString($var, True);
        $this->source_range = $var;

        return $this;
    }

    /**
     * An optional string description of this rule.
     * This field has a maximum length of 100 characters.
     *
     * Generated from protobuf field <code>string description = 4;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * An optional string description of this rule.
     * This field has a maximum length of 100 characters.
     *
     * Generated from protobuf field <code>string description = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

}

