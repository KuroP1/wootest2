<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v8/enums/simulation_modification_method.proto

namespace Google\Ads\GoogleAds\V8\Enums\SimulationModificationMethodEnum;

use UnexpectedValueException;

/**
 * Enum describing the method by which a simulation modifies a field.
 *
 * Protobuf type <code>google.ads.googleads.v8.enums.SimulationModificationMethodEnum.SimulationModificationMethod</code>
 */
class SimulationModificationMethod
{
    /**
     * Not specified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * Used for return value only. Represents value unknown in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * The values in a simulation were applied to all children of a given
     * resource uniformly. Overrides on child resources were not respected.
     *
     * Generated from protobuf enum <code>UNIFORM = 2;</code>
     */
    const UNIFORM = 2;
    /**
     * The values in a simulation were applied to the given resource.
     * Overrides on child resources were respected, and traffic estimates
     * do not include these resources.
     *
     * Generated from protobuf enum <code>DEFAULT = 3;</code>
     */
    const PBDEFAULT = 3;
    /**
     * The values in a simulation were all scaled by the same factor.
     * For example, in a simulated TargetCpa campaign, the campaign target and
     * all ad group targets were scaled by a factor of X.
     *
     * Generated from protobuf enum <code>SCALING = 4;</code>
     */
    const SCALING = 4;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::UNIFORM => 'UNIFORM',
        self::PBDEFAULT => 'PBDEFAULT',
        self::SCALING => 'SCALING',
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
class_alias(SimulationModificationMethod::class, \Google\Ads\GoogleAds\V8\Enums\SimulationModificationMethodEnum_SimulationModificationMethod::class);

