<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models\ListRepositoryResponseBody;

use AlibabaCloud\Tea\Model;

class repositories extends Model
{
    /**
     * @var string
     */
    public $summary;

    /**
     * @var string
     */
    public $repoBuildType;

    /**
     * @var int
     */
    public $modifiedTime;

    /**
     * @var string
     */
    public $repoId;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $repoNamespaceName;

    /**
     * @var bool
     */
    public $tagImmutability;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $repoType;

    /**
     * @var string
     */
    public $repoStatus;

    /**
     * @var string
     */
    public $repoName;
    protected $_name = [
        'summary'           => 'Summary',
        'repoBuildType'     => 'RepoBuildType',
        'modifiedTime'      => 'ModifiedTime',
        'repoId'            => 'RepoId',
        'createTime'        => 'CreateTime',
        'repoNamespaceName' => 'RepoNamespaceName',
        'tagImmutability'   => 'TagImmutability',
        'instanceId'        => 'InstanceId',
        'repoType'          => 'RepoType',
        'repoStatus'        => 'RepoStatus',
        'repoName'          => 'RepoName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->summary) {
            $res['Summary'] = $this->summary;
        }
        if (null !== $this->repoBuildType) {
            $res['RepoBuildType'] = $this->repoBuildType;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->repoId) {
            $res['RepoId'] = $this->repoId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->repoNamespaceName) {
            $res['RepoNamespaceName'] = $this->repoNamespaceName;
        }
        if (null !== $this->tagImmutability) {
            $res['TagImmutability'] = $this->tagImmutability;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->repoType) {
            $res['RepoType'] = $this->repoType;
        }
        if (null !== $this->repoStatus) {
            $res['RepoStatus'] = $this->repoStatus;
        }
        if (null !== $this->repoName) {
            $res['RepoName'] = $this->repoName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return repositories
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Summary'])) {
            $model->summary = $map['Summary'];
        }
        if (isset($map['RepoBuildType'])) {
            $model->repoBuildType = $map['RepoBuildType'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['RepoId'])) {
            $model->repoId = $map['RepoId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['RepoNamespaceName'])) {
            $model->repoNamespaceName = $map['RepoNamespaceName'];
        }
        if (isset($map['TagImmutability'])) {
            $model->tagImmutability = $map['TagImmutability'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RepoType'])) {
            $model->repoType = $map['RepoType'];
        }
        if (isset($map['RepoStatus'])) {
            $model->repoStatus = $map['RepoStatus'];
        }
        if (isset($map['RepoName'])) {
            $model->repoName = $map['RepoName'];
        }

        return $model;
    }
}
