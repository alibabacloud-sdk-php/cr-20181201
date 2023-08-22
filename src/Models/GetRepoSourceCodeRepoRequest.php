<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\Tea\Model;

class GetRepoSourceCodeRepoRequest extends Model
{
    /**
     * @description The ID of the Container Registry instance.
     *
     * @example cri-shac42yvqzvq****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The ID of the repository.
     *
     * @example crr-gzsrlevmvoaq****
     *
     * @var string
     */
    public $repoId;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'repoId'     => 'RepoId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->repoId) {
            $res['RepoId'] = $this->repoId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetRepoSourceCodeRepoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RepoId'])) {
            $model->repoId = $map['RepoId'];
        }

        return $model;
    }
}
