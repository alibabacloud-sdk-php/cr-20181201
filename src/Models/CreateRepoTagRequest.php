<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\Tea\Model;

class CreateRepoTagRequest extends Model
{
    /**
     * @description The source image tag.
     *
     * @example v1
     *
     * @var string
     */
    public $fromTag;

    /**
     * @description The ID of the instance.
     *
     * @example cri-shac42yvqzv****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The name of the namespace.
     *
     * @example ns
     *
     * @var string
     */
    public $namespaceName;

    /**
     * @description The name of the image repository.
     *
     * @example repo1
     *
     * @var string
     */
    public $repoName;

    /**
     * @description The image tag that you want to create.
     *
     * @example v2
     *
     * @var string
     */
    public $toTag;
    protected $_name = [
        'fromTag'       => 'FromTag',
        'instanceId'    => 'InstanceId',
        'namespaceName' => 'NamespaceName',
        'repoName'      => 'RepoName',
        'toTag'         => 'ToTag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fromTag) {
            $res['FromTag'] = $this->fromTag;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->namespaceName) {
            $res['NamespaceName'] = $this->namespaceName;
        }
        if (null !== $this->repoName) {
            $res['RepoName'] = $this->repoName;
        }
        if (null !== $this->toTag) {
            $res['ToTag'] = $this->toTag;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateRepoTagRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FromTag'])) {
            $model->fromTag = $map['FromTag'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['NamespaceName'])) {
            $model->namespaceName = $map['NamespaceName'];
        }
        if (isset($map['RepoName'])) {
            $model->repoName = $map['RepoName'];
        }
        if (isset($map['ToTag'])) {
            $model->toTag = $map['ToTag'];
        }

        return $model;
    }
}
