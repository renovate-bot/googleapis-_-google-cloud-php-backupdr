<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/backupdr/v1/backupvault.proto

namespace Google\Cloud\BackupDR\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for InitiateBackup.
 *
 * Generated from protobuf message <code>google.cloud.backupdr.v1.InitiateBackupResponse</code>
 */
class InitiateBackupResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The name of the backup that was created.
     *
     * Generated from protobuf field <code>string backup = 1;</code>
     */
    protected $backup = '';
    /**
     * The generation id of the new backup.
     *
     * Generated from protobuf field <code>int32 new_backup_generation_id = 2;</code>
     */
    protected $new_backup_generation_id = 0;
    /**
     * The generation id of the base backup. It is needed for the incremental
     * backups.
     *
     * Generated from protobuf field <code>int32 base_backup_generation_id = 3;</code>
     */
    protected $base_backup_generation_id = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $backup
     *           The name of the backup that was created.
     *     @type int $new_backup_generation_id
     *           The generation id of the new backup.
     *     @type int $base_backup_generation_id
     *           The generation id of the base backup. It is needed for the incremental
     *           backups.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Backupdr\V1\Backupvault::initOnce();
        parent::__construct($data);
    }

    /**
     * The name of the backup that was created.
     *
     * Generated from protobuf field <code>string backup = 1;</code>
     * @return string
     */
    public function getBackup()
    {
        return $this->backup;
    }

    /**
     * The name of the backup that was created.
     *
     * Generated from protobuf field <code>string backup = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setBackup($var)
    {
        GPBUtil::checkString($var, True);
        $this->backup = $var;

        return $this;
    }

    /**
     * The generation id of the new backup.
     *
     * Generated from protobuf field <code>int32 new_backup_generation_id = 2;</code>
     * @return int
     */
    public function getNewBackupGenerationId()
    {
        return $this->new_backup_generation_id;
    }

    /**
     * The generation id of the new backup.
     *
     * Generated from protobuf field <code>int32 new_backup_generation_id = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setNewBackupGenerationId($var)
    {
        GPBUtil::checkInt32($var);
        $this->new_backup_generation_id = $var;

        return $this;
    }

    /**
     * The generation id of the base backup. It is needed for the incremental
     * backups.
     *
     * Generated from protobuf field <code>int32 base_backup_generation_id = 3;</code>
     * @return int
     */
    public function getBaseBackupGenerationId()
    {
        return $this->base_backup_generation_id;
    }

    /**
     * The generation id of the base backup. It is needed for the incremental
     * backups.
     *
     * Generated from protobuf field <code>int32 base_backup_generation_id = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setBaseBackupGenerationId($var)
    {
        GPBUtil::checkInt32($var);
        $this->base_backup_generation_id = $var;

        return $this;
    }

}

