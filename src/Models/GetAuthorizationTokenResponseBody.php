<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\Tea\Model;

class GetAuthorizationTokenResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $expireTime;

    /**
     * @var string
     */
    public $code;

    /**
     * @var bool
     */
    public $isSuccess;

    /**
     * @var string
     */
    public $tempUsername;

    /**
     * @var string
     */
    public $authorizationToken;
    protected $_name = [
        'requestId'          => 'RequestId',
        'expireTime'         => 'ExpireTime',
        'code'               => 'Code',
        'isSuccess'          => 'IsSuccess',
        'tempUsername'       => 'TempUsername',
        'authorizationToken' => 'AuthorizationToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->isSuccess) {
            $res['IsSuccess'] = $this->isSuccess;
        }
        if (null !== $this->tempUsername) {
            $res['TempUsername'] = $this->tempUsername;
        }
        if (null !== $this->authorizationToken) {
            $res['AuthorizationToken'] = $this->authorizationToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAuthorizationTokenResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['IsSuccess'])) {
            $model->isSuccess = $map['IsSuccess'];
        }
        if (isset($map['TempUsername'])) {
            $model->tempUsername = $map['TempUsername'];
        }
        if (isset($map['AuthorizationToken'])) {
            $model->authorizationToken = $map['AuthorizationToken'];
        }

        return $model;
    }
}
