<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: math.proto

namespace Demo\Math;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>demo.math.SubtractMessage</code>
 */
class SubtractMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 x = 1;</code>
     */
    private $x = 0;
    /**
     * Generated from protobuf field <code>int32 y = 2;</code>
     */
    private $y = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $x
     *     @type int $y
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Math::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 x = 1;</code>
     * @return int
     */
    public function getX()
    {
        return $this->x;
    }

    /**
     * Generated from protobuf field <code>int32 x = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setX($var)
    {
        GPBUtil::checkInt32($var);
        $this->x = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 y = 2;</code>
     * @return int
     */
    public function getY()
    {
        return $this->y;
    }

    /**
     * Generated from protobuf field <code>int32 y = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setY($var)
    {
        GPBUtil::checkInt32($var);
        $this->y = $var;

        return $this;
    }

}

