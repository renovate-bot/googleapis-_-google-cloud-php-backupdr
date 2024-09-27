<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/backupdr/v1/backupplan.proto

namespace Google\Cloud\BackupDR\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for getting a `BackupPlan`.
 *
 * Generated from protobuf message <code>google.cloud.backupdr.v1.GetBackupPlanRequest</code>
 */
class GetBackupPlanRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the `BackupPlan` to retrieve.
     * Format: `projects/{project}/locations/{location}/backupPlans/{backup_plan}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';

    /**
     * @param string $name Required. The resource name of the `BackupPlan` to retrieve.
     *
     *                     Format: `projects/{project}/locations/{location}/backupPlans/{backup_plan}`
     *                     Please see {@see BackupDRClient::backupPlanName()} for help formatting this field.
     *
     * @return \Google\Cloud\BackupDR\V1\GetBackupPlanRequest
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
     *           Required. The resource name of the `BackupPlan` to retrieve.
     *           Format: `projects/{project}/locations/{location}/backupPlans/{backup_plan}`
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Backupdr\V1\Backupplan::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the `BackupPlan` to retrieve.
     * Format: `projects/{project}/locations/{location}/backupPlans/{backup_plan}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The resource name of the `BackupPlan` to retrieve.
     * Format: `projects/{project}/locations/{location}/backupPlans/{backup_plan}`
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

}

