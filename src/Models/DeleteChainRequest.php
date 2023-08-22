<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\Tea\Model;

class DeleteChainRequest extends Model
{
    /**
     * @description The ID of the delivery pipeline.
     *
     * @example chi-02ymhtwl3cq8****
     *
     * @var string
     */
    public $chainId;

    /**
     * @description The ID of the instance.
     *
     * @example cri-4cdrlqmhn4gm****
     *
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'chainId'    => 'ChainId',
        'instanceId' => 'InstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->chainId) {
            $res['ChainId'] = $this->chainId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteChainRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChainId'])) {
            $model->chainId = $map['ChainId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
