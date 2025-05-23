<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\Dara\Model;

class GetRepoTagScanStatusRequest extends Model
{
    /**
     * @var string
     */
    public $digest;

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
    public $scanTaskId;

    /**
     * @var string
     */
    public $scanType;

    /**
     * @var string
     */
    public $tag;
    protected $_name = [
        'digest' => 'Digest',
        'instanceId' => 'InstanceId',
        'repoId' => 'RepoId',
        'scanTaskId' => 'ScanTaskId',
        'scanType' => 'ScanType',
        'tag' => 'Tag',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->digest) {
            $res['Digest'] = $this->digest;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->repoId) {
            $res['RepoId'] = $this->repoId;
        }

        if (null !== $this->scanTaskId) {
            $res['ScanTaskId'] = $this->scanTaskId;
        }

        if (null !== $this->scanType) {
            $res['ScanType'] = $this->scanType;
        }

        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
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
        if (isset($map['Digest'])) {
            $model->digest = $map['Digest'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['RepoId'])) {
            $model->repoId = $map['RepoId'];
        }

        if (isset($map['ScanTaskId'])) {
            $model->scanTaskId = $map['ScanTaskId'];
        }

        if (isset($map['ScanType'])) {
            $model->scanType = $map['ScanType'];
        }

        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }

        return $model;
    }
}
