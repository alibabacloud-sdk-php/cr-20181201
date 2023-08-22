<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\SDK\Cr\V20181201\Models\GetInstanceEndpointResponseBody\aclEntries;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetInstanceEndpointResponseBody\domains;
use AlibabaCloud\Tea\Model;

class GetInstanceEndpointResponseBody extends Model
{
    /**
     * @description Indicates whether the access control list (ACL) feature is enabled.
     *
     * @example true
     *
     * @var bool
     */
    public $aclEnable;

    /**
     * @description The ACLs.
     *
     * @var aclEntries[]
     */
    public $aclEntries;

    /**
     * @description The return value.
     *
     * @example success
     *
     * @var string
     */
    public $code;

    /**
     * @description Domain names.
     *
     * @var domains[]
     */
    public $domains;

    /**
     * @description Indicates whether the ACL feature is enabled.
     *
     * @example true
     *
     * @var bool
     */
    public $enable;

    /**
     * @description Indicates whether the request is successful.
     *
     * @example true
     *
     * @var bool
     */
    public $isSuccess;

    /**
     * @description The ID of the request.
     *
     * @example 8F3D5EC5-39D1-4C53-A198-48C54C658FA3
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The status of the instance.
     *
     * @example RUNNING
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'aclEnable'  => 'AclEnable',
        'aclEntries' => 'AclEntries',
        'code'       => 'Code',
        'domains'    => 'Domains',
        'enable'     => 'Enable',
        'isSuccess'  => 'IsSuccess',
        'requestId'  => 'RequestId',
        'status'     => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aclEnable) {
            $res['AclEnable'] = $this->aclEnable;
        }
        if (null !== $this->aclEntries) {
            $res['AclEntries'] = [];
            if (null !== $this->aclEntries && \is_array($this->aclEntries)) {
                $n = 0;
                foreach ($this->aclEntries as $item) {
                    $res['AclEntries'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->domains) {
            $res['Domains'] = [];
            if (null !== $this->domains && \is_array($this->domains)) {
                $n = 0;
                foreach ($this->domains as $item) {
                    $res['Domains'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }
        if (null !== $this->isSuccess) {
            $res['IsSuccess'] = $this->isSuccess;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetInstanceEndpointResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AclEnable'])) {
            $model->aclEnable = $map['AclEnable'];
        }
        if (isset($map['AclEntries'])) {
            if (!empty($map['AclEntries'])) {
                $model->aclEntries = [];
                $n                 = 0;
                foreach ($map['AclEntries'] as $item) {
                    $model->aclEntries[$n++] = null !== $item ? aclEntries::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Domains'])) {
            if (!empty($map['Domains'])) {
                $model->domains = [];
                $n              = 0;
                foreach ($map['Domains'] as $item) {
                    $model->domains[$n++] = null !== $item ? domains::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }
        if (isset($map['IsSuccess'])) {
            $model->isSuccess = $map['IsSuccess'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
