<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\Tea\Model;

class CreateArtifactBuildRuleShrinkRequest extends Model
{
    /**
     * @description The type of the artifact.
     *
     *   `ACCELERATED_IMAGE`: accelerated images.
     *
     * @example ACCELERATED_IMAGE
     *
     * @var string
     */
    public $artifactType;

    /**
     * @description The instance ID.
     *
     * @example cri-cxreylqvcyje****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description Additional parameters.
     *
     * @example {}
     *
     * @var string
     */
    public $parametersShrink;

    /**
     * @description The ID of the effective range of the rule.
     *
     *   Set the value to the ID of the image repository.
     *
     * @example crr-pmajihou6cg0****
     *
     * @var string
     */
    public $scopeId;

    /**
     * @description The effective range of the rule. Valid values:
     *
     *   `REPOSITORY`
     *
     * @example REPOSITORY
     *
     * @var string
     */
    public $scopeType;
    protected $_name = [
        'artifactType'     => 'ArtifactType',
        'instanceId'       => 'InstanceId',
        'parametersShrink' => 'Parameters',
        'scopeId'          => 'ScopeId',
        'scopeType'        => 'ScopeType',
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
        if (null !== $this->parametersShrink) {
            $res['Parameters'] = $this->parametersShrink;
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
     * @return CreateArtifactBuildRuleShrinkRequest
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
        if (isset($map['Parameters'])) {
            $model->parametersShrink = $map['Parameters'];
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
