<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/backupdr/v1/backupvault.proto

namespace Google\Cloud\BackupDR\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Message for finalizing a Backup.
 *
 * Generated from protobuf message <code>google.cloud.backupdr.v1.FinalizeBackupRequest</code>
 */
class FinalizeBackupRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the instance, in the format
     * 'projects/&#42;&#47;locations/&#42;&#47;backupVaults/&#42;&#47;dataSources/'.
     *
     * Generated from protobuf field <code>string data_source = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $data_source = '';
    /**
     * This will be assigned to the description field of the newly created Backup.
     *
     * Generated from protobuf field <code>optional string description = 2;</code>
     */
    protected $description = null;
    /**
     * The point in time when this backup was captured from the source.  This will
     * be assigned to the consistency_time field of the newly created Backup.
     *
     * Generated from protobuf field <code>optional .google.protobuf.Timestamp consistency_time = 3;</code>
     */
    protected $consistency_time = null;
    /**
     * Optional. An optional request ID to identify requests. Specify a unique
     * request ID so that if you must retry your request, the server will know to
     * ignore the request if it has already been completed. The server will
     * guarantee that for at least 60 minutes after the first request.
     * For example, consider a situation where you make an initial request and
     * the request times out. If you make the request again with the same request
     * ID, the server can check if original operation with the same request ID
     * was received, and if so, will ignore the second request. This prevents
     * clients from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is
     * not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 4 [(.google.api.field_behavior) = OPTIONAL, (.google.api.field_info) = {</code>
     */
    protected $request_id = '';
    /**
     * Required. Resource ID of the Backup resource to be finalized.  This must be
     * the same backup_id that was used in the InitiateBackupRequest.
     *
     * Generated from protobuf field <code>string backup_id = 5 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $backup_id = '';
    /**
     * The earliest timestamp of data available in this Backup.  This will set on
     * the newly created Backup.
     *
     * Generated from protobuf field <code>optional .google.protobuf.Timestamp recovery_range_start_time = 6;</code>
     */
    protected $recovery_range_start_time = null;
    /**
     * The latest timestamp of data available in this Backup.  This will be set on
     * the newly created Backup.
     *
     * Generated from protobuf field <code>optional .google.protobuf.Timestamp recovery_range_end_time = 7;</code>
     */
    protected $recovery_range_end_time = null;
    /**
     * The ExpireTime on the backup will be set to FinalizeTime plus this
     * duration.  If the resulting ExpireTime is less than
     * EnforcedRetentionEndTime, then ExpireTime is set to
     * EnforcedRetentionEndTime.
     *
     * Generated from protobuf field <code>optional .google.protobuf.Duration retention_duration = 9;</code>
     */
    protected $retention_duration = null;

    /**
     * @param string $dataSource Required. The resource name of the instance, in the format
     *                           'projects/&#42;/locations/&#42;/backupVaults/&#42;/dataSources/'. Please see
     *                           {@see BackupDRClient::dataSourceName()} for help formatting this field.
     *
     * @return \Google\Cloud\BackupDR\V1\FinalizeBackupRequest
     *
     * @experimental
     */
    public static function build(string $dataSource): self
    {
        return (new self())
            ->setDataSource($dataSource);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $data_source
     *           Required. The resource name of the instance, in the format
     *           'projects/&#42;&#47;locations/&#42;&#47;backupVaults/&#42;&#47;dataSources/'.
     *     @type string $description
     *           This will be assigned to the description field of the newly created Backup.
     *     @type \Google\Protobuf\Timestamp $consistency_time
     *           The point in time when this backup was captured from the source.  This will
     *           be assigned to the consistency_time field of the newly created Backup.
     *     @type string $request_id
     *           Optional. An optional request ID to identify requests. Specify a unique
     *           request ID so that if you must retry your request, the server will know to
     *           ignore the request if it has already been completed. The server will
     *           guarantee that for at least 60 minutes after the first request.
     *           For example, consider a situation where you make an initial request and
     *           the request times out. If you make the request again with the same request
     *           ID, the server can check if original operation with the same request ID
     *           was received, and if so, will ignore the second request. This prevents
     *           clients from accidentally creating duplicate commitments.
     *           The request ID must be a valid UUID with the exception that zero UUID is
     *           not supported (00000000-0000-0000-0000-000000000000).
     *     @type string $backup_id
     *           Required. Resource ID of the Backup resource to be finalized.  This must be
     *           the same backup_id that was used in the InitiateBackupRequest.
     *     @type \Google\Protobuf\Timestamp $recovery_range_start_time
     *           The earliest timestamp of data available in this Backup.  This will set on
     *           the newly created Backup.
     *     @type \Google\Protobuf\Timestamp $recovery_range_end_time
     *           The latest timestamp of data available in this Backup.  This will be set on
     *           the newly created Backup.
     *     @type \Google\Protobuf\Duration $retention_duration
     *           The ExpireTime on the backup will be set to FinalizeTime plus this
     *           duration.  If the resulting ExpireTime is less than
     *           EnforcedRetentionEndTime, then ExpireTime is set to
     *           EnforcedRetentionEndTime.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Backupdr\V1\Backupvault::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the instance, in the format
     * 'projects/&#42;&#47;locations/&#42;&#47;backupVaults/&#42;&#47;dataSources/'.
     *
     * Generated from protobuf field <code>string data_source = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getDataSource()
    {
        return $this->data_source;
    }

    /**
     * Required. The resource name of the instance, in the format
     * 'projects/&#42;&#47;locations/&#42;&#47;backupVaults/&#42;&#47;dataSources/'.
     *
     * Generated from protobuf field <code>string data_source = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setDataSource($var)
    {
        GPBUtil::checkString($var, True);
        $this->data_source = $var;

        return $this;
    }

    /**
     * This will be assigned to the description field of the newly created Backup.
     *
     * Generated from protobuf field <code>optional string description = 2;</code>
     * @return string
     */
    public function getDescription()
    {
        return isset($this->description) ? $this->description : '';
    }

    public function hasDescription()
    {
        return isset($this->description);
    }

    public function clearDescription()
    {
        unset($this->description);
    }

    /**
     * This will be assigned to the description field of the newly created Backup.
     *
     * Generated from protobuf field <code>optional string description = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * The point in time when this backup was captured from the source.  This will
     * be assigned to the consistency_time field of the newly created Backup.
     *
     * Generated from protobuf field <code>optional .google.protobuf.Timestamp consistency_time = 3;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getConsistencyTime()
    {
        return $this->consistency_time;
    }

    public function hasConsistencyTime()
    {
        return isset($this->consistency_time);
    }

    public function clearConsistencyTime()
    {
        unset($this->consistency_time);
    }

    /**
     * The point in time when this backup was captured from the source.  This will
     * be assigned to the consistency_time field of the newly created Backup.
     *
     * Generated from protobuf field <code>optional .google.protobuf.Timestamp consistency_time = 3;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setConsistencyTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->consistency_time = $var;

        return $this;
    }

    /**
     * Optional. An optional request ID to identify requests. Specify a unique
     * request ID so that if you must retry your request, the server will know to
     * ignore the request if it has already been completed. The server will
     * guarantee that for at least 60 minutes after the first request.
     * For example, consider a situation where you make an initial request and
     * the request times out. If you make the request again with the same request
     * ID, the server can check if original operation with the same request ID
     * was received, and if so, will ignore the second request. This prevents
     * clients from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is
     * not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 4 [(.google.api.field_behavior) = OPTIONAL, (.google.api.field_info) = {</code>
     * @return string
     */
    public function getRequestId()
    {
        return $this->request_id;
    }

    /**
     * Optional. An optional request ID to identify requests. Specify a unique
     * request ID so that if you must retry your request, the server will know to
     * ignore the request if it has already been completed. The server will
     * guarantee that for at least 60 minutes after the first request.
     * For example, consider a situation where you make an initial request and
     * the request times out. If you make the request again with the same request
     * ID, the server can check if original operation with the same request ID
     * was received, and if so, will ignore the second request. This prevents
     * clients from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is
     * not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 4 [(.google.api.field_behavior) = OPTIONAL, (.google.api.field_info) = {</code>
     * @param string $var
     * @return $this
     */
    public function setRequestId($var)
    {
        GPBUtil::checkString($var, True);
        $this->request_id = $var;

        return $this;
    }

    /**
     * Required. Resource ID of the Backup resource to be finalized.  This must be
     * the same backup_id that was used in the InitiateBackupRequest.
     *
     * Generated from protobuf field <code>string backup_id = 5 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getBackupId()
    {
        return $this->backup_id;
    }

    /**
     * Required. Resource ID of the Backup resource to be finalized.  This must be
     * the same backup_id that was used in the InitiateBackupRequest.
     *
     * Generated from protobuf field <code>string backup_id = 5 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setBackupId($var)
    {
        GPBUtil::checkString($var, True);
        $this->backup_id = $var;

        return $this;
    }

    /**
     * The earliest timestamp of data available in this Backup.  This will set on
     * the newly created Backup.
     *
     * Generated from protobuf field <code>optional .google.protobuf.Timestamp recovery_range_start_time = 6;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getRecoveryRangeStartTime()
    {
        return $this->recovery_range_start_time;
    }

    public function hasRecoveryRangeStartTime()
    {
        return isset($this->recovery_range_start_time);
    }

    public function clearRecoveryRangeStartTime()
    {
        unset($this->recovery_range_start_time);
    }

    /**
     * The earliest timestamp of data available in this Backup.  This will set on
     * the newly created Backup.
     *
     * Generated from protobuf field <code>optional .google.protobuf.Timestamp recovery_range_start_time = 6;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setRecoveryRangeStartTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->recovery_range_start_time = $var;

        return $this;
    }

    /**
     * The latest timestamp of data available in this Backup.  This will be set on
     * the newly created Backup.
     *
     * Generated from protobuf field <code>optional .google.protobuf.Timestamp recovery_range_end_time = 7;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getRecoveryRangeEndTime()
    {
        return $this->recovery_range_end_time;
    }

    public function hasRecoveryRangeEndTime()
    {
        return isset($this->recovery_range_end_time);
    }

    public function clearRecoveryRangeEndTime()
    {
        unset($this->recovery_range_end_time);
    }

    /**
     * The latest timestamp of data available in this Backup.  This will be set on
     * the newly created Backup.
     *
     * Generated from protobuf field <code>optional .google.protobuf.Timestamp recovery_range_end_time = 7;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setRecoveryRangeEndTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->recovery_range_end_time = $var;

        return $this;
    }

    /**
     * The ExpireTime on the backup will be set to FinalizeTime plus this
     * duration.  If the resulting ExpireTime is less than
     * EnforcedRetentionEndTime, then ExpireTime is set to
     * EnforcedRetentionEndTime.
     *
     * Generated from protobuf field <code>optional .google.protobuf.Duration retention_duration = 9;</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getRetentionDuration()
    {
        return $this->retention_duration;
    }

    public function hasRetentionDuration()
    {
        return isset($this->retention_duration);
    }

    public function clearRetentionDuration()
    {
        unset($this->retention_duration);
    }

    /**
     * The ExpireTime on the backup will be set to FinalizeTime plus this
     * duration.  If the resulting ExpireTime is less than
     * EnforcedRetentionEndTime, then ExpireTime is set to
     * EnforcedRetentionEndTime.
     *
     * Generated from protobuf field <code>optional .google.protobuf.Duration retention_duration = 9;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setRetentionDuration($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->retention_duration = $var;

        return $this;
    }

}

