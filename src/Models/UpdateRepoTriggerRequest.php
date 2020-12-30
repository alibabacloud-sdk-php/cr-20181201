<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\Tea\Model;

class UpdateRepoTriggerRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $repoId;

    /**
     * @var string
     */
    public $triggerName;

    /**
     * @var string
     */
    public $triggerUrl;

    /**
     * @var string
     */
    public $triggerType;

    /**
     * @var string
     */
    public $triggerTag;

    /**
     * @var string
     */
    public $triggerId;
    protected $_name = [
        'instanceId'  => 'InstanceId',
        'repoId'      => 'RepoId',
        'triggerName' => 'TriggerName',
        'triggerUrl'  => 'TriggerUrl',
        'triggerType' => 'TriggerType',
        'triggerTag'  => 'TriggerTag',
        'triggerId'   => 'TriggerId',
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
        if (null !== $this->triggerName) {
            $res['TriggerName'] = $this->triggerName;
        }
        if (null !== $this->triggerUrl) {
            $res['TriggerUrl'] = $this->triggerUrl;
        }
        if (null !== $this->triggerType) {
            $res['TriggerType'] = $this->triggerType;
        }
        if (null !== $this->triggerTag) {
            $res['TriggerTag'] = $this->triggerTag;
        }
        if (null !== $this->triggerId) {
            $res['TriggerId'] = $this->triggerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateRepoTriggerRequest
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
        if (isset($map['TriggerName'])) {
            $model->triggerName = $map['TriggerName'];
        }
        if (isset($map['TriggerUrl'])) {
            $model->triggerUrl = $map['TriggerUrl'];
        }
        if (isset($map['TriggerType'])) {
            $model->triggerType = $map['TriggerType'];
        }
        if (isset($map['TriggerTag'])) {
            $model->triggerTag = $map['TriggerTag'];
        }
        if (isset($map['TriggerId'])) {
            $model->triggerId = $map['TriggerId'];
        }

        return $model;
    }
}
