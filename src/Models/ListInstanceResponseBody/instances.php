<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models\ListInstanceResponseBody;

use AlibabaCloud\SDK\Cr\V20181201\Models\ListInstanceResponseBody\instances\tags;
use AlibabaCloud\Tea\Model;

class instances extends Model
{
    /**
     * @description The time when the instance was created.
     *
     * @example 1562849679000
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The instance ID.
     *
     * @example cri-sgedpenzw80e****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The issue occurs on the instance.
     *
     * @example oss bucket already exists
     *
     * @var string
     */
    public $instanceIssue;

    /**
     * @description The name of the instance.
     *
     * @example test
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The edition of the Container Registry Enterprise Edition instance.
     *
     * @example Enterprise_Basic
     *
     * @var string
     */
    public $instanceSpecification;

    /**
     * @description The status of the instance.
     *
     * @example RUNNING
     *
     * @var string
     */
    public $instanceStatus;

    /**
     * @description The time when the instance was last modified.
     *
     * @example 1562849760000
     *
     * @var string
     */
    public $modifiedTime;

    /**
     * @description The region ID of the instance.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group to which the instance belongs.
     *
     * @example rg-aek2h3aexpy****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var tags[]
     */
    public $tags;
    protected $_name = [
        'createTime'            => 'CreateTime',
        'instanceId'            => 'InstanceId',
        'instanceIssue'         => 'InstanceIssue',
        'instanceName'          => 'InstanceName',
        'instanceSpecification' => 'InstanceSpecification',
        'instanceStatus'        => 'InstanceStatus',
        'modifiedTime'          => 'ModifiedTime',
        'regionId'              => 'RegionId',
        'resourceGroupId'       => 'ResourceGroupId',
        'tags'                  => 'Tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceIssue) {
            $res['InstanceIssue'] = $this->instanceIssue;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->instanceSpecification) {
            $res['InstanceSpecification'] = $this->instanceSpecification;
        }
        if (null !== $this->instanceStatus) {
            $res['InstanceStatus'] = $this->instanceStatus;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instances
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceIssue'])) {
            $model->instanceIssue = $map['InstanceIssue'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['InstanceSpecification'])) {
            $model->instanceSpecification = $map['InstanceSpecification'];
        }
        if (isset($map['InstanceStatus'])) {
            $model->instanceStatus = $map['InstanceStatus'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
