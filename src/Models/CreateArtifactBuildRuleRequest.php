<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\Tea\Model;

class CreateArtifactBuildRuleRequest extends Model
{
    /**
     * @example ACCELERATED_IMAGE
     *
     * @var string
     */
    public $artifactType;

    /**
     * @example cri-cxreylqvcyje****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example crr-pmajihou6cg0****
     *
     * @var string
     */
    public $scopeId;

    /**
     * @example REPOSITORY
     *
     * @var string
     */
    public $scopeType;
    protected $_name = [
        'artifactType' => 'ArtifactType',
        'instanceId'   => 'InstanceId',
        'scopeId'      => 'ScopeId',
        'scopeType'    => 'ScopeType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->artifactType) {
            $res['ArtifactType'] = $this->artifactType;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->scopeId) {
            $res['ScopeId'] = $this->scopeId;
        }
        if (null !== $this->scopeType) {
            $res['ScopeType'] = $this->scopeType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateArtifactBuildRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ArtifactType'])) {
            $model->artifactType = $map['ArtifactType'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['ScopeId'])) {
            $model->scopeId = $map['ScopeId'];
        }
        if (isset($map['ScopeType'])) {
            $model->scopeType = $map['ScopeType'];
        }

        return $model;
    }
}