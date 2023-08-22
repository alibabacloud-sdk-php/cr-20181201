<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\Tea\Model;

class ListRepoSyncRuleRequest extends Model
{
    /**
     * @description The ID of the instance.
     *
     * @example cri-kmsiwlxxdcva****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The name of the namespace.
     *
     * @example test-namespace
     *
     * @var string
     */
    public $namespaceName;

    /**
     * @description The number of the page to return.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNo;

    /**
     * @description The number of entries to return on each page.
     *
     * @example 30
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The name of the image repository.
     *
     * @example test-repo
     *
     * @var string
     */
    public $repoName;

    /**
     * @description The ID of the destination instance.
     *
     * @example cri-k77rd2eo9ztt****
     *
     * @var string
     */
    public $targetInstanceId;

    /**
     * @description The region ID of the destination instance.
     *
     * @example cn-shenzhen
     *
     * @var string
     */
    public $targetRegionId;
    protected $_name = [
        'instanceId'       => 'InstanceId',
        'namespaceName'    => 'NamespaceName',
        'pageNo'           => 'PageNo',
        'pageSize'         => 'PageSize',
        'repoName'         => 'RepoName',
        'targetInstanceId' => 'TargetInstanceId',
        'targetRegionId'   => 'TargetRegionId',
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
        if (null !== $this->namespaceName) {
            $res['NamespaceName'] = $this->namespaceName;
        }
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->repoName) {
            $res['RepoName'] = $this->repoName;
        }
        if (null !== $this->targetInstanceId) {
            $res['TargetInstanceId'] = $this->targetInstanceId;
        }
        if (null !== $this->targetRegionId) {
            $res['TargetRegionId'] = $this->targetRegionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListRepoSyncRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['NamespaceName'])) {
            $model->namespaceName = $map['NamespaceName'];
        }
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RepoName'])) {
            $model->repoName = $map['RepoName'];
        }
        if (isset($map['TargetInstanceId'])) {
            $model->targetInstanceId = $map['TargetInstanceId'];
        }
        if (isset($map['TargetRegionId'])) {
            $model->targetRegionId = $map['TargetRegionId'];
        }

        return $model;
    }
}
