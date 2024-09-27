<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/backupdr/v1/backupvault_gce.proto

namespace Google\Cloud\BackupDR\V1\Scheduling;

use UnexpectedValueException;

/**
 * Defines the provisioning model for an instance.
 *
 * Protobuf type <code>google.cloud.backupdr.v1.Scheduling.ProvisioningModel</code>
 */
class ProvisioningModel
{
    /**
     * Default value. This value is not used.
     *
     * Generated from protobuf enum <code>PROVISIONING_MODEL_UNSPECIFIED = 0;</code>
     */
    const PROVISIONING_MODEL_UNSPECIFIED = 0;
    /**
     * Standard provisioning with user controlled runtime, no discounts.
     *
     * Generated from protobuf enum <code>STANDARD = 1;</code>
     */
    const STANDARD = 1;
    /**
     * Heavily discounted, no guaranteed runtime.
     *
     * Generated from protobuf enum <code>SPOT = 2;</code>
     */
    const SPOT = 2;

    private static $valueToName = [
        self::PROVISIONING_MODEL_UNSPECIFIED => 'PROVISIONING_MODEL_UNSPECIFIED',
        self::STANDARD => 'STANDARD',
        self::SPOT => 'SPOT',
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

