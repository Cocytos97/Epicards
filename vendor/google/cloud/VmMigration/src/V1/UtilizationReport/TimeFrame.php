<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vmmigration/v1/vmmigration.proto

namespace Google\Cloud\VMMigration\V1\UtilizationReport;

use UnexpectedValueException;

/**
 * Report time frame options.
 *
 * Protobuf type <code>google.cloud.vmmigration.v1.UtilizationReport.TimeFrame</code>
 */
class TimeFrame
{
    /**
     * The time frame was not specified and will default to WEEK.
     *
     * Generated from protobuf enum <code>TIME_FRAME_UNSPECIFIED = 0;</code>
     */
    const TIME_FRAME_UNSPECIFIED = 0;
    /**
     * One week.
     *
     * Generated from protobuf enum <code>WEEK = 1;</code>
     */
    const WEEK = 1;
    /**
     * One month.
     *
     * Generated from protobuf enum <code>MONTH = 2;</code>
     */
    const MONTH = 2;
    /**
     * One year.
     *
     * Generated from protobuf enum <code>YEAR = 3;</code>
     */
    const YEAR = 3;

    private static $valueToName = [
        self::TIME_FRAME_UNSPECIFIED => 'TIME_FRAME_UNSPECIFIED',
        self::WEEK => 'WEEK',
        self::MONTH => 'MONTH',
        self::YEAR => 'YEAR',
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


