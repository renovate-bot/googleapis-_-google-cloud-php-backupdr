<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/backupdr/v1/backupvault.proto

namespace Google\Cloud\BackupDR\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for FetchAccessToken.
 *
 * Generated from protobuf message <code>google.cloud.backupdr.v1.FetchAccessTokenRequest</code>
 */
class FetchAccessTokenRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name for the location for which static IPs should be
     * returned.
     * Must be in the format
     * 'projects/&#42;&#47;locations/&#42;&#47;backupVaults/&#42;&#47;dataSources'.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';
    /**
     * Required. The generation of the backup to update.
     *
     * Generated from protobuf field <code>int32 generation_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $generation_id = 0;

    /**
     * @param string $name Required. The resource name for the location for which static IPs should be
     *                     returned.
     *                     Must be in the format
     *                     'projects/&#42;/locations/&#42;/backupVaults/&#42;/dataSources'. Please see
     *                     {@see BackupDRClient::dataSourceName()} for help formatting this field.
     *
     * @return \Google\Cloud\BackupDR\V1\FetchAccessTokenRequest
     *
     * @experimental
     */
    public static function build(string $name): self
    {
        return (new self())
            ->setName($name);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The resource name for the location for which static IPs should be
     *           returned.
     *           Must be in the format
     *           'projects/&#42;&#47;locations/&#42;&#47;backupVaults/&#42;&#47;dataSources'.
     *     @type int $generation_id
     *           Required. The generation of the backup to update.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Backupdr\V1\Backupvault::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name for the location for which static IPs should be
     * returned.
     * Must be in the format
     * 'projects/&#42;&#47;locations/&#42;&#47;backupVaults/&#42;&#47;dataSources'.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The resource name for the location for which static IPs should be
     * returned.
     * Must be in the format
     * 'projects/&#42;&#47;locations/&#42;&#47;backupVaults/&#42;&#47;dataSources'.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Required. The generation of the backup to update.
     *
     * Generated from protobuf field <code>int32 generation_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int
     */
    public function getGenerationId()
    {
        return $this->generation_id;
    }

    /**
     * Required. The generation of the backup to update.
     *
     * Generated from protobuf field <code>int32 generation_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int $var
     * @return $this
     */
    public function setGenerationId($var)
    {
        GPBUtil::checkInt32($var);
        $this->generation_id = $var;

        return $this;
    }

}
