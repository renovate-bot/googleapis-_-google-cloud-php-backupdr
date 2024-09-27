<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/backupdr/v1/backupvault_gce.proto

namespace Google\Cloud\BackupDR\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * ComputeInstanceTargetEnvironment represents Compute Engine target
 * environment to be used during restore.
 *
 * Generated from protobuf message <code>google.cloud.backupdr.v1.ComputeInstanceTargetEnvironment</code>
 */
class ComputeInstanceTargetEnvironment extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Target project for the Compute Engine instance.
     *
     * Generated from protobuf field <code>string project = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $project = '';
    /**
     * Required. The zone of the Compute Engine instance.
     *
     * Generated from protobuf field <code>string zone = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $zone = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $project
     *           Required. Target project for the Compute Engine instance.
     *     @type string $zone
     *           Required. The zone of the Compute Engine instance.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Backupdr\V1\BackupvaultGce::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Target project for the Compute Engine instance.
     *
     * Generated from protobuf field <code>string project = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * Required. Target project for the Compute Engine instance.
     *
     * Generated from protobuf field <code>string project = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setProject($var)
    {
        GPBUtil::checkString($var, True);
        $this->project = $var;

        return $this;
    }

    /**
     * Required. The zone of the Compute Engine instance.
     *
     * Generated from protobuf field <code>string zone = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getZone()
    {
        return $this->zone;
    }

    /**
     * Required. The zone of the Compute Engine instance.
     *
     * Generated from protobuf field <code>string zone = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setZone($var)
    {
        GPBUtil::checkString($var, True);
        $this->zone = $var;

        return $this;
    }

}
