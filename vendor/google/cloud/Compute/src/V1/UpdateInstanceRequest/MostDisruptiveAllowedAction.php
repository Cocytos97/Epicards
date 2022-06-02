<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1\UpdateInstanceRequest;

use UnexpectedValueException;

/**
 * Specifies the most disruptive action that can be taken on the instance as part of the update. Compute Engine returns an error if the instance properties require a more disruptive action as part of the instance update. Valid options from lowest to highest are NO_EFFECT, REFRESH, and RESTART.
 * Additional supported values which may be not listed in the enum directly due to technical reasons:
 * INVALID
 * NO_EFFECT
 * REFRESH
 * RESTART
 *
 * Protobuf type <code>google.cloud.compute.v1.UpdateInstanceRequest.MostDisruptiveAllowedAction</code>
 */
class MostDisruptiveAllowedAction
{
    /**
     * A value indicating that the enum field is not set.
     *
     * Generated from protobuf enum <code>UNDEFINED_MOST_DISRUPTIVE_ALLOWED_ACTION = 0;</code>
     */
    const UNDEFINED_MOST_DISRUPTIVE_ALLOWED_ACTION = 0;

    private static $valueToName = [
        self::UNDEFINED_MOST_DISRUPTIVE_ALLOWED_ACTION => 'UNDEFINED_MOST_DISRUPTIVE_ALLOWED_ACTION',
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


