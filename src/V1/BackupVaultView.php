<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/backupdr/v1/backupvault.proto

namespace Google\Cloud\BackupDR\V1;

use UnexpectedValueException;

/**
 * BackupVaultView contains enum options for Partial and Full view.
 *
 * Protobuf type <code>google.cloud.backupdr.v1.BackupVaultView</code>
 */
class BackupVaultView
{
    /**
     * If the value is not set, the default 'FULL' view is used.
     *
     * Generated from protobuf enum <code>BACKUP_VAULT_VIEW_UNSPECIFIED = 0;</code>
     */
    const BACKUP_VAULT_VIEW_UNSPECIFIED = 0;
    /**
     * Includes basic data about the Backup Vault, but not the full contents.
     *
     * Generated from protobuf enum <code>BACKUP_VAULT_VIEW_BASIC = 1;</code>
     */
    const BACKUP_VAULT_VIEW_BASIC = 1;
    /**
     * Includes all data about the Backup Vault.
     * This is the default value (for both ListBackupVaults and GetBackupVault).
     *
     * Generated from protobuf enum <code>BACKUP_VAULT_VIEW_FULL = 2;</code>
     */
    const BACKUP_VAULT_VIEW_FULL = 2;

    private static $valueToName = [
        self::BACKUP_VAULT_VIEW_UNSPECIFIED => 'BACKUP_VAULT_VIEW_UNSPECIFIED',
        self::BACKUP_VAULT_VIEW_BASIC => 'BACKUP_VAULT_VIEW_BASIC',
        self::BACKUP_VAULT_VIEW_FULL => 'BACKUP_VAULT_VIEW_FULL',
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

