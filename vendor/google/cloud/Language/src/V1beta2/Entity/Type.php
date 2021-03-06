<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/language/v1beta2/language_service.proto

namespace Google\Cloud\Language\V1beta2\Entity;

use UnexpectedValueException;

/**
 * The type of the entity.
 *
 * Protobuf type <code>google.cloud.language.v1beta2.Entity.Type</code>
 */
class Type
{
    /**
     * Unknown
     *
     * Generated from protobuf enum <code>UNKNOWN = 0;</code>
     */
    const UNKNOWN = 0;
    /**
     * Person
     *
     * Generated from protobuf enum <code>PERSON = 1;</code>
     */
    const PERSON = 1;
    /**
     * Location
     *
     * Generated from protobuf enum <code>LOCATION = 2;</code>
     */
    const LOCATION = 2;
    /**
     * Organization
     *
     * Generated from protobuf enum <code>ORGANIZATION = 3;</code>
     */
    const ORGANIZATION = 3;
    /**
     * Event
     *
     * Generated from protobuf enum <code>EVENT = 4;</code>
     */
    const EVENT = 4;
    /**
     * Work of art
     *
     * Generated from protobuf enum <code>WORK_OF_ART = 5;</code>
     */
    const WORK_OF_ART = 5;
    /**
     * Consumer goods
     *
     * Generated from protobuf enum <code>CONSUMER_GOOD = 6;</code>
     */
    const CONSUMER_GOOD = 6;
    /**
     * Other types
     *
     * Generated from protobuf enum <code>OTHER = 7;</code>
     */
    const OTHER = 7;

    private static $valueToName = [
        self::UNKNOWN => 'UNKNOWN',
        self::PERSON => 'PERSON',
        self::LOCATION => 'LOCATION',
        self::ORGANIZATION => 'ORGANIZATION',
        self::EVENT => 'EVENT',
        self::WORK_OF_ART => 'WORK_OF_ART',
        self::CONSUMER_GOOD => 'CONSUMER_GOOD',
        self::OTHER => 'OTHER',
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
class_alias(Type::class, \Google\Cloud\Language\V1beta2\Entity_Type::class);

