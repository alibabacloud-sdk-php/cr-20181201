<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\Tea\Model;

class CreateRepoSourceCodeRepoRequest extends Model
{
    /**
     * @description Specifies whether to trigger image building when source code is committed. Valid values:
     *
     *   `true`: triggers image building when source code is committed.
     *   `false`: does not trigger image building when source code is committed.
     *
     * @example true
     *
     * @var bool
     */
    public $autoBuild;

    /**
     * @description The name of the source code repository.
     *
     * @example repo
     *
     * @var string
     */
    public $codeRepoName;

    /**
     * @description The namespace to which the source code repository belongs.
     *
     * @example namespace
     *
     * @var string
     */
    public $codeRepoNamespaceName;

    /**
     * @description The type of the source code hosting platform. Valid values: `GITHUB`, `GITLAB`, `GITEE`, `CODE`, and `CODEUP`.
     *
     * @example GITHUB
     *
     * @var string
     */
    public $codeRepoType;

    /**
     * @description Specifies whether to disable building caches. Valid values:
     *
     *   `true`: disables building caches.
     *   `false`: enables building caches.
     *
     * @example false
     *
     * @var bool
     */
    public $disableCacheBuild;

    /**
     * @description The ID of the instance.
     *
     * @example cri-shac42yvqzvq****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description Specifies whether to enable Build With Servers Deployed Outside Chinese Mainland. Valid values:
     *
     *   `true`: enables Build With Servers Deployed Outside Chinese Mainland.
     *   `false`: does not enable Build With Servers Deployed Outside Chinese Mainland.
     *
     * @example false
     *
     * @var bool
     */
    public $overseaBuild;

    /**
     * @description The ID of the image repository.
     *
     * @example crr-gzsrlevmvoaq****
     *
     * @var string
     */
    public $repoId;
    protected $_name = [
        'autoBuild'             => 'AutoBuild',
        'codeRepoName'          => 'CodeRepoName',
        'codeRepoNamespaceName' => 'CodeRepoNamespaceName',
        'codeRepoType'          => 'CodeRepoType',
        'disableCacheBuild'     => 'DisableCacheBuild',
        'instanceId'            => 'InstanceId',
        'overseaBuild'          => 'OverseaBuild',
        'repoId'                => 'RepoId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoBuild) {
            $res['AutoBuild'] = $this->autoBuild;
        }
        if (null !== $this->codeRepoName) {
            $res['CodeRepoName'] = $this->codeRepoName;
        }
        if (null !== $this->codeRepoNamespaceName) {
            $res['CodeRepoNamespaceName'] = $this->codeRepoNamespaceName;
        }
        if (null !== $this->codeRepoType) {
            $res['CodeRepoType'] = $this->codeRepoType;
        }
        if (null !== $this->disableCacheBuild) {
            $res['DisableCacheBuild'] = $this->disableCacheBuild;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->overseaBuild) {
            $res['OverseaBuild'] = $this->overseaBuild;
        }
        if (null !== $this->repoId) {
            $res['RepoId'] = $this->repoId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateRepoSourceCodeRepoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoBuild'])) {
            $model->autoBuild = $map['AutoBuild'];
        }
        if (isset($map['CodeRepoName'])) {
            $model->codeRepoName = $map['CodeRepoName'];
        }
        if (isset($map['CodeRepoNamespaceName'])) {
            $model->codeRepoNamespaceName = $map['CodeRepoNamespaceName'];
        }
        if (isset($map['CodeRepoType'])) {
            $model->codeRepoType = $map['CodeRepoType'];
        }
        if (isset($map['DisableCacheBuild'])) {
            $model->disableCacheBuild = $map['DisableCacheBuild'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['OverseaBuild'])) {
            $model->overseaBuild = $map['OverseaBuild'];
        }
        if (isset($map['RepoId'])) {
            $model->repoId = $map['RepoId'];
        }

        return $model;
    }
}
