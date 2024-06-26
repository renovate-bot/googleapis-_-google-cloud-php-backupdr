<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/backupdr/v1/backupdr.proto

namespace Google\Cloud\BackupDR\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * OAuth Client ID depending on the Workforce Identity i.e. either 1p or 3p,
 *
 * Generated from protobuf message <code>google.cloud.backupdr.v1.WorkforceIdentityBasedOAuth2ClientID</code>
 */
class WorkforceIdentityBasedOAuth2ClientID extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. First party OAuth Client ID for Google Identities.
     *
     * Generated from protobuf field <code>string first_party_oauth2_client_id = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $first_party_oauth2_client_id = '';
    /**
     * Output only. Third party OAuth Client ID for External Identity Providers.
     *
     * Generated from protobuf field <code>string third_party_oauth2_client_id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $third_party_oauth2_client_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $first_party_oauth2_client_id
     *           Output only. First party OAuth Client ID for Google Identities.
     *     @type string $third_party_oauth2_client_id
     *           Output only. Third party OAuth Client ID for External Identity Providers.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Backupdr\V1\Backupdr::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. First party OAuth Client ID for Google Identities.
     *
     * Generated from protobuf field <code>string first_party_oauth2_client_id = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getFirstPartyOauth2ClientId()
    {
        return $this->first_party_oauth2_client_id;
    }

    /**
     * Output only. First party OAuth Client ID for Google Identities.
     *
     * Generated from protobuf field <code>string first_party_oauth2_client_id = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setFirstPartyOauth2ClientId($var)
    {
        GPBUtil::checkString($var, True);
        $this->first_party_oauth2_client_id = $var;

        return $this;
    }

    /**
     * Output only. Third party OAuth Client ID for External Identity Providers.
     *
     * Generated from protobuf field <code>string third_party_oauth2_client_id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getThirdPartyOauth2ClientId()
    {
        return $this->third_party_oauth2_client_id;
    }

    /**
     * Output only. Third party OAuth Client ID for External Identity Providers.
     *
     * Generated from protobuf field <code>string third_party_oauth2_client_id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setThirdPartyOauth2ClientId($var)
    {
        GPBUtil::checkString($var, True);
        $this->third_party_oauth2_client_id = $var;

        return $this;
    }

}

