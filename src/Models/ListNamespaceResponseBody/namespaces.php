<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models\ListNamespaceResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cr\V20181201\Models\RepoConfiguration;

class namespaces extends Model
{
    /**
     * @var bool
     */
    public $autoCreateRepo;

    /**
     * @var RepoConfiguration
     */
    public $defaultRepoConfiguration;

    /**
     * @var string
     */
    public $defaultRepoType;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $namespaceId;

    /**
     * @var string
     */
    public $namespaceName;

    /**
     * @var string
     */
    public $namespaceStatus;

    /**
     * @var string
     */
    public $resourceGroupId;
    protected $_name = [
        'autoCreateRepo' => 'AutoCreateRepo',
        'defaultRepoConfiguration' => 'DefaultRepoConfiguration',
        'defaultRepoType' => 'DefaultRepoType',
        'instanceId' => 'InstanceId',
        'namespaceId' => 'NamespaceId',
        'namespaceName' => 'NamespaceName',
        'namespaceStatus' => 'NamespaceStatus',
        'resourceGroupId' => 'ResourceGroupId',
    ];

    public function validate()
    {
        if (null !== $this->defaultRepoConfiguration) {
            $this->defaultRepoConfiguration->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoCreateRepo) {
            $res['AutoCreateRepo'] = $this->autoCreateRepo;
        }

        if (null !== $this->defaultRepoConfiguration) {
            $res['DefaultRepoConfiguration'] = null !== $this->defaultRepoConfiguration ? $this->defaultRepoConfiguration->toArray($noStream) : $this->defaultRepoConfiguration;
        }

        if (null !== $this->defaultRepoType) {
            $res['DefaultRepoType'] = $this->defaultRepoType;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->namespaceId) {
            $res['NamespaceId'] = $this->namespaceId;
        }

        if (null !== $this->namespaceName) {
            $res['NamespaceName'] = $this->namespaceName;
        }

        if (null !== $this->namespaceStatus) {
            $res['NamespaceStatus'] = $this->namespaceStatus;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoCreateRepo'])) {
            $model->autoCreateRepo = $map['AutoCreateRepo'];
        }

        if (isset($map['DefaultRepoConfiguration'])) {
            $model->defaultRepoConfiguration = RepoConfiguration::fromMap($map['DefaultRepoConfiguration']);
        }

        if (isset($map['DefaultRepoType'])) {
            $model->defaultRepoType = $map['DefaultRepoType'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['NamespaceId'])) {
            $model->namespaceId = $map['NamespaceId'];
        }

        if (isset($map['NamespaceName'])) {
            $model->namespaceName = $map['NamespaceName'];
        }

        if (isset($map['NamespaceStatus'])) {
            $model->namespaceStatus = $map['NamespaceStatus'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        return $model;
    }
}
