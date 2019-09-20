<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/recaptchaenterprise/v1beta1/recaptchaenterprise.proto

namespace Google\Cloud\RecaptchaEnterprise\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>google.cloud.recaptchaenterprise.v1beta1.TokenProperties</code>
 */
class TokenProperties extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Whether the provided user response token is valid.
     *
     * Generated from protobuf field <code>bool valid = 1;</code>
     */
    private $valid = false;
    /**
     * Output only. Reason associated with the response when valid = false.
     *
     * Generated from protobuf field <code>.google.cloud.recaptchaenterprise.v1beta1.TokenProperties.InvalidReason invalid_reason = 2;</code>
     */
    private $invalid_reason = 0;
    /**
     * Output only. The timestamp corresponding to the generation of the token.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 3;</code>
     */
    private $create_time = null;
    /**
     * Output only. The hostname of the page on which the token was generated.
     *
     * Generated from protobuf field <code>string hostname = 4;</code>
     */
    private $hostname = '';
    /**
     * Output only. Action name provided at token generation.
     *
     * Generated from protobuf field <code>string action = 5;</code>
     */
    private $action = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $valid
     *           Output only. Whether the provided user response token is valid.
     *     @type int $invalid_reason
     *           Output only. Reason associated with the response when valid = false.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. The timestamp corresponding to the generation of the token.
     *     @type string $hostname
     *           Output only. The hostname of the page on which the token was generated.
     *     @type string $action
     *           Output only. Action name provided at token generation.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Recaptchaenterprise\V1Beta1\Recaptchaenterprise::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Whether the provided user response token is valid.
     *
     * Generated from protobuf field <code>bool valid = 1;</code>
     * @return bool
     */
    public function getValid()
    {
        return $this->valid;
    }

    /**
     * Output only. Whether the provided user response token is valid.
     *
     * Generated from protobuf field <code>bool valid = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setValid($var)
    {
        GPBUtil::checkBool($var);
        $this->valid = $var;

        return $this;
    }

    /**
     * Output only. Reason associated with the response when valid = false.
     *
     * Generated from protobuf field <code>.google.cloud.recaptchaenterprise.v1beta1.TokenProperties.InvalidReason invalid_reason = 2;</code>
     * @return int
     */
    public function getInvalidReason()
    {
        return $this->invalid_reason;
    }

    /**
     * Output only. Reason associated with the response when valid = false.
     *
     * Generated from protobuf field <code>.google.cloud.recaptchaenterprise.v1beta1.TokenProperties.InvalidReason invalid_reason = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setInvalidReason($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\RecaptchaEnterprise\V1beta1\TokenProperties_InvalidReason::class);
        $this->invalid_reason = $var;

        return $this;
    }

    /**
     * Output only. The timestamp corresponding to the generation of the token.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 3;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    /**
     * Output only. The timestamp corresponding to the generation of the token.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 3;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * Output only. The hostname of the page on which the token was generated.
     *
     * Generated from protobuf field <code>string hostname = 4;</code>
     * @return string
     */
    public function getHostname()
    {
        return $this->hostname;
    }

    /**
     * Output only. The hostname of the page on which the token was generated.
     *
     * Generated from protobuf field <code>string hostname = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setHostname($var)
    {
        GPBUtil::checkString($var, True);
        $this->hostname = $var;

        return $this;
    }

    /**
     * Output only. Action name provided at token generation.
     *
     * Generated from protobuf field <code>string action = 5;</code>
     * @return string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Output only. Action name provided at token generation.
     *
     * Generated from protobuf field <code>string action = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setAction($var)
    {
        GPBUtil::checkString($var, True);
        $this->action = $var;

        return $this;
    }

}

