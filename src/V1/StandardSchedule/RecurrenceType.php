<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/backupdr/v1/backupplan.proto

namespace Google\Cloud\BackupDR\V1\StandardSchedule;

use UnexpectedValueException;

/**
 * `RecurrenceTypes` enumerates the applicable periodicity for the schedule.
 *
 * Protobuf type <code>google.cloud.backupdr.v1.StandardSchedule.RecurrenceType</code>
 */
class RecurrenceType
{
    /**
     * recurrence type not set
     *
     * Generated from protobuf enum <code>RECURRENCE_TYPE_UNSPECIFIED = 0;</code>
     */
    const RECURRENCE_TYPE_UNSPECIFIED = 0;
    /**
     * The `BackupRule` is to be applied hourly.
     *
     * Generated from protobuf enum <code>HOURLY = 1;</code>
     */
    const HOURLY = 1;
    /**
     * The `BackupRule` is to be applied daily.
     *
     * Generated from protobuf enum <code>DAILY = 2;</code>
     */
    const DAILY = 2;
    /**
     * The `BackupRule` is to be applied weekly.
     *
     * Generated from protobuf enum <code>WEEKLY = 3;</code>
     */
    const WEEKLY = 3;
    /**
     * The `BackupRule` is to be applied monthly.
     *
     * Generated from protobuf enum <code>MONTHLY = 4;</code>
     */
    const MONTHLY = 4;
    /**
     * The `BackupRule` is to be applied yearly.
     *
     * Generated from protobuf enum <code>YEARLY = 5;</code>
     */
    const YEARLY = 5;

    private static $valueToName = [
        self::RECURRENCE_TYPE_UNSPECIFIED => 'RECURRENCE_TYPE_UNSPECIFIED',
        self::HOURLY => 'HOURLY',
        self::DAILY => 'DAILY',
        self::WEEKLY => 'WEEKLY',
        self::MONTHLY => 'MONTHLY',
        self::YEARLY => 'YEARLY',
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


