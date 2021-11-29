<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/monitoring/v3/service_service.proto

namespace Google\Cloud\Monitoring\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The `ListServices` response.
 *
 * Generated from protobuf message <code>google.monitoring.v3.ListServicesResponse</code>
 */
class ListServicesResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The `Service`s matching the specified filter.
     *
     * Generated from protobuf field <code>repeated .google.monitoring.v3.Service services = 1;</code>
     */
    private $services;
    /**
     * If there are more results than have been returned, then this field is set
     * to a non-empty value.  To see the additional results,
     * use that value as `pageToken` in the next call to this method.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    private $next_page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Monitoring\V3\Service[]|\Google\Protobuf\Internal\RepeatedField $services
     *           The `Service`s matching the specified filter.
     *     @type string $next_page_token
     *           If there are more results than have been returned, then this field is set
     *           to a non-empty value.  To see the additional results,
     *           use that value as `pageToken` in the next call to this method.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Monitoring\V3\ServiceService::initOnce();
        parent::__construct($data);
    }

    /**
     * The `Service`s matching the specified filter.
     *
     * Generated from protobuf field <code>repeated .google.monitoring.v3.Service services = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getServices()
    {
        return $this->services;
    }

    /**
     * The `Service`s matching the specified filter.
     *
     * Generated from protobuf field <code>repeated .google.monitoring.v3.Service services = 1;</code>
     * @param \Google\Cloud\Monitoring\V3\Service[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setServices($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Monitoring\V3\Service::class);
        $this->services = $arr;

        return $this;
    }

    /**
     * If there are more results than have been returned, then this field is set
     * to a non-empty value.  To see the additional results,
     * use that value as `pageToken` in the next call to this method.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * If there are more results than have been returned, then this field is set
     * to a non-empty value.  To see the additional results,
     * use that value as `pageToken` in the next call to this method.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

}

