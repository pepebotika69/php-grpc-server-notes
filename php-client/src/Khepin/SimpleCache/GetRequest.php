<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: simplecache.proto

namespace Khepin\SimpleCache;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>simplecache.GetRequest</code>
 */
class GetRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string Key = 1;</code>
     */
    protected $Key = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $Key
     * }
     */
    public function __construct($data = NULL) {
        \Khepin\SimpleCache\Meta\Simplecache::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string Key = 1;</code>
     * @return string
     */
    public function getKey()
    {
        return $this->Key;
    }

    /**
     * Generated from protobuf field <code>string Key = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->Key = $var;

        return $this;
    }

}
