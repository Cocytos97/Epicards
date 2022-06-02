<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/security/privateca/v1beta1/service.proto

namespace Google\Cloud\Security\PrivateCA\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [CertificateAuthorityService.CreateCertificateAuthority][google.cloud.security.privateca.v1beta1.CertificateAuthorityService.CreateCertificateAuthority].
 *
 * Generated from protobuf message <code>google.cloud.security.privateca.v1beta1.CreateCertificateAuthorityRequest</code>
 */
class CreateCertificateAuthorityRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the location associated with the
     * [CertificateAuthorities][google.cloud.security.privateca.v1beta1.CertificateAuthority], in the format
     * `projects/&#42;&#47;locations/&#42;`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * Required. It must be unique within a location and match the regular
     * expression `[a-zA-Z0-9_-]{1,63}`
     *
     * Generated from protobuf field <code>string certificate_authority_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $certificate_authority_id = '';
    /**
     * Required. A [CertificateAuthority][google.cloud.security.privateca.v1beta1.CertificateAuthority] with initial field values.
     *
     * Generated from protobuf field <code>.google.cloud.security.privateca.v1beta1.CertificateAuthority certificate_authority = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $certificate_authority = null;
    /**
     * Optional. An ID to identify requests. Specify a unique request ID so that if you must
     * retry your request, the server will know to ignore the request if it has
     * already been completed. The server will guarantee that for at least 60
     * minutes since the first request.
     * For example, consider a situation where you make an initial request and t
     * he request times out. If you make the request again with the same request
     * ID, the server can check if original operation with the same request ID
     * was received, and if so, will ignore the second request. This prevents
     * clients from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is
     * not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $request_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The resource name of the location associated with the
     *           [CertificateAuthorities][google.cloud.security.privateca.v1beta1.CertificateAuthority], in the format
     *           `projects/&#42;&#47;locations/&#42;`.
     *     @type string $certificate_authority_id
     *           Required. It must be unique within a location and match the regular
     *           expression `[a-zA-Z0-9_-]{1,63}`
     *     @type \Google\Cloud\Security\PrivateCA\V1beta1\CertificateAuthority $certificate_authority
     *           Required. A [CertificateAuthority][google.cloud.security.privateca.v1beta1.CertificateAuthority] with initial field values.
     *     @type string $request_id
     *           Optional. An ID to identify requests. Specify a unique request ID so that if you must
     *           retry your request, the server will know to ignore the request if it has
     *           already been completed. The server will guarantee that for at least 60
     *           minutes since the first request.
     *           For example, consider a situation where you make an initial request and t
     *           he request times out. If you make the request again with the same request
     *           ID, the server can check if original operation with the same request ID
     *           was received, and if so, will ignore the second request. This prevents
     *           clients from accidentally creating duplicate commitments.
     *           The request ID must be a valid UUID with the exception that zero UUID is
     *           not supported (00000000-0000-0000-0000-000000000000).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Security\Privateca\V1Beta1\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the location associated with the
     * [CertificateAuthorities][google.cloud.security.privateca.v1beta1.CertificateAuthority], in the format
     * `projects/&#42;&#47;locations/&#42;`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The resource name of the location associated with the
     * [CertificateAuthorities][google.cloud.security.privateca.v1beta1.CertificateAuthority], in the format
     * `projects/&#42;&#47;locations/&#42;`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Required. It must be unique within a location and match the regular
     * expression `[a-zA-Z0-9_-]{1,63}`
     *
     * Generated from protobuf field <code>string certificate_authority_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getCertificateAuthorityId()
    {
        return $this->certificate_authority_id;
    }

    /**
     * Required. It must be unique within a location and match the regular
     * expression `[a-zA-Z0-9_-]{1,63}`
     *
     * Generated from protobuf field <code>string certificate_authority_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setCertificateAuthorityId($var)
    {
        GPBUtil::checkString($var, True);
        $this->certificate_authority_id = $var;

        return $this;
    }

    /**
     * Required. A [CertificateAuthority][google.cloud.security.privateca.v1beta1.CertificateAuthority] with initial field values.
     *
     * Generated from protobuf field <code>.google.cloud.security.privateca.v1beta1.CertificateAuthority certificate_authority = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Security\PrivateCA\V1beta1\CertificateAuthority|null
     */
    public function getCertificateAuthority()
    {
        return isset($this->certificate_authority) ? $this->certificate_authority : null;
    }

    public function hasCertificateAuthority()
    {
        return isset($this->certificate_authority);
    }

    public function clearCertificateAuthority()
    {
        unset($this->certificate_authority);
    }

    /**
     * Required. A [CertificateAuthority][google.cloud.security.privateca.v1beta1.CertificateAuthority] with initial field values.
     *
     * Generated from protobuf field <code>.google.cloud.security.privateca.v1beta1.CertificateAuthority certificate_authority = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Security\PrivateCA\V1beta1\CertificateAuthority $var
     * @return $this
     */
    public function setCertificateAuthority($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Security\PrivateCA\V1beta1\CertificateAuthority::class);
        $this->certificate_authority = $var;

        return $this;
    }

    /**
     * Optional. An ID to identify requests. Specify a unique request ID so that if you must
     * retry your request, the server will know to ignore the request if it has
     * already been completed. The server will guarantee that for at least 60
     * minutes since the first request.
     * For example, consider a situation where you make an initial request and t
     * he request times out. If you make the request again with the same request
     * ID, the server can check if original operation with the same request ID
     * was received, and if so, will ignore the second request. This prevents
     * clients from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is
     * not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getRequestId()
    {
        return $this->request_id;
    }

    /**
     * Optional. An ID to identify requests. Specify a unique request ID so that if you must
     * retry your request, the server will know to ignore the request if it has
     * already been completed. The server will guarantee that for at least 60
     * minutes since the first request.
     * For example, consider a situation where you make an initial request and t
     * he request times out. If you make the request again with the same request
     * ID, the server can check if original operation with the same request ID
     * was received, and if so, will ignore the second request. This prevents
     * clients from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is
     * not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setRequestId($var)
    {
        GPBUtil::checkString($var, True);
        $this->request_id = $var;

        return $this;
    }

}

