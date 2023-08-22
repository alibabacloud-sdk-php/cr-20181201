<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\Tea\Model;

class DeleteRepoSyncRuleRequest extends Model
{
    /**
     * @description The ID of the instance.
     *
     * @example cri-hpdfkc6utbaq****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The ID of the synchronization rule.
     *
     * @example crsr-gk5p2ns1kzns****
     *
     * @var string
     */
    public $syncRuleId;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'syncRuleId' => 'SyncRuleId',
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
        if (null !== $this->syncRuleId) {
            $res['SyncRuleId'] = $this->syncRuleId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteRepoSyncRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['SyncRuleId'])) {
            $model->syncRuleId = $map['SyncRuleId'];
        }

        return $model;
    }
}
