<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models\ListRepoSyncTaskResponseBody;

use AlibabaCloud\SDK\Cr\V20181201\Models\ListRepoSyncTaskResponseBody\syncTasks\imageFrom;
use AlibabaCloud\SDK\Cr\V20181201\Models\ListRepoSyncTaskResponseBody\syncTasks\imageTo;
use AlibabaCloud\Tea\Model;

class syncTasks extends Model
{
    /**
     * @var int
     */
    public $createTime;

    /**
     * @var bool
     */
    public $crossUser;

    /**
     * @var imageFrom
     */
    public $imageFrom;

    /**
     * @var imageTo
     */
    public $imageTo;

    /**
     * @var int
     */
    public $modifedTime;

    /**
     * @var string
     */
    public $syncBatchTaskId;

    /**
     * @var string
     */
    public $syncRuleId;

    /**
     * @var string
     */
    public $syncTaskId;

    /**
     * @var bool
     */
    public $syncTransAccelerate;

    /**
     * @var string
     */
    public $taskStatus;

    /**
     * @var string
     */
    public $taskTrigger;
    protected $_name = [
        'createTime'          => 'CreateTime',
        'crossUser'           => 'CrossUser',
        'imageFrom'           => 'ImageFrom',
        'imageTo'             => 'ImageTo',
        'modifedTime'         => 'ModifedTime',
        'syncBatchTaskId'     => 'SyncBatchTaskId',
        'syncRuleId'          => 'SyncRuleId',
        'syncTaskId'          => 'SyncTaskId',
        'syncTransAccelerate' => 'SyncTransAccelerate',
        'taskStatus'          => 'TaskStatus',
        'taskTrigger'         => 'TaskTrigger',
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
        if (null !== $this->crossUser) {
            $res['CrossUser'] = $this->crossUser;
        }
        if (null !== $this->imageFrom) {
            $res['ImageFrom'] = null !== $this->imageFrom ? $this->imageFrom->toMap() : null;
        }
        if (null !== $this->imageTo) {
            $res['ImageTo'] = null !== $this->imageTo ? $this->imageTo->toMap() : null;
        }
        if (null !== $this->modifedTime) {
            $res['ModifedTime'] = $this->modifedTime;
        }
        if (null !== $this->syncBatchTaskId) {
            $res['SyncBatchTaskId'] = $this->syncBatchTaskId;
        }
        if (null !== $this->syncRuleId) {
            $res['SyncRuleId'] = $this->syncRuleId;
        }
        if (null !== $this->syncTaskId) {
            $res['SyncTaskId'] = $this->syncTaskId;
        }
        if (null !== $this->syncTransAccelerate) {
            $res['SyncTransAccelerate'] = $this->syncTransAccelerate;
        }
        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
        }
        if (null !== $this->taskTrigger) {
            $res['TaskTrigger'] = $this->taskTrigger;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return syncTasks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CrossUser'])) {
            $model->crossUser = $map['CrossUser'];
        }
        if (isset($map['ImageFrom'])) {
            $model->imageFrom = imageFrom::fromMap($map['ImageFrom']);
        }
        if (isset($map['ImageTo'])) {
            $model->imageTo = imageTo::fromMap($map['ImageTo']);
        }
        if (isset($map['ModifedTime'])) {
            $model->modifedTime = $map['ModifedTime'];
        }
        if (isset($map['SyncBatchTaskId'])) {
            $model->syncBatchTaskId = $map['SyncBatchTaskId'];
        }
        if (isset($map['SyncRuleId'])) {
            $model->syncRuleId = $map['SyncRuleId'];
        }
        if (isset($map['SyncTaskId'])) {
            $model->syncTaskId = $map['SyncTaskId'];
        }
        if (isset($map['SyncTransAccelerate'])) {
            $model->syncTransAccelerate = $map['SyncTransAccelerate'];
        }
        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
        }
        if (isset($map['TaskTrigger'])) {
            $model->taskTrigger = $map['TaskTrigger'];
        }

        return $model;
    }
}
