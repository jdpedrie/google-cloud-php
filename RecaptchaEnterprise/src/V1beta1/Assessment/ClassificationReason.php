<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/recaptchaenterprise/v1beta1/recaptchaenterprise.proto

namespace Google\Cloud\RecaptchaEnterprise\V1beta1\Assessment;

use UnexpectedValueException;

/**
 * LINT.IfChange(classification_reason)
 * Reasons contributing to the risk analysis verdict.
 *
 * Protobuf type <code>google.cloud.recaptchaenterprise.v1beta1.Assessment.ClassificationReason</code>
 */
class ClassificationReason
{
    /**
     * Default unspecified type.
     *
     * Generated from protobuf enum <code>CLASSIFICATION_REASON_UNSPECIFIED = 0;</code>
     */
    const CLASSIFICATION_REASON_UNSPECIFIED = 0;
    /**
     * The event appeared to be automated.
     *
     * Generated from protobuf enum <code>AUTOMATION = 1;</code>
     */
    const AUTOMATION = 1;
    /**
     * The event was not made from the proper context on the real site.
     *
     * Generated from protobuf enum <code>UNEXPECTED_ENVIRONMENT = 2;</code>
     */
    const UNEXPECTED_ENVIRONMENT = 2;
    /**
     * Browsing behavior leading up to the event was generated was out of the
     * ordinary.
     *
     * Generated from protobuf enum <code>UNEXPECTED_USAGE_PATTERNS = 4;</code>
     */
    const UNEXPECTED_USAGE_PATTERNS = 4;
    /**
     * Too little traffic has been received from this site thus far to generate
     * quality risk analysis.
     *
     * Generated from protobuf enum <code>PROVISIONAL_RISK_ANALYSIS = 5;</code>
     */
    const PROVISIONAL_RISK_ANALYSIS = 5;

    private static $valueToName = [
        self::CLASSIFICATION_REASON_UNSPECIFIED => 'CLASSIFICATION_REASON_UNSPECIFIED',
        self::AUTOMATION => 'AUTOMATION',
        self::UNEXPECTED_ENVIRONMENT => 'UNEXPECTED_ENVIRONMENT',
        self::UNEXPECTED_USAGE_PATTERNS => 'UNEXPECTED_USAGE_PATTERNS',
        self::PROVISIONAL_RISK_ANALYSIS => 'PROVISIONAL_RISK_ANALYSIS',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ClassificationReason::class, \Google\Cloud\RecaptchaEnterprise\V1beta1\Assessment_ClassificationReason::class);

