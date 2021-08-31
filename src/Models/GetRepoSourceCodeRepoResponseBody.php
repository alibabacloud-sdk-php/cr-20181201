<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\Tea\Model;

class GetRepoSourceCodeRepoResponseBody extends Model
{
    /**
     * @var string
     */
    public $codeRepoType;

    /**
     * @var string
     */
    public $repoId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $codeRepoNamespaceName;

    /**
     * @var string
     */
    public $overseaBuild;

    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $codeRepoName;

    /**
     * @var string
     */
    public $autoBuild;

    /**
     * @var bool
     */
    public $isSuccess;

    /**
     * @var string
     */
    public $disableCacheBuild;

    /**
     * @var string
     */
    public $codeRepoDomain;
    protected $_name = [
        'codeRepoType'          => 'CodeRepoType',
        'repoId'                => 'RepoId',
        'requestId'             => 'RequestId',
        'codeRepoNamespaceName' => 'CodeRepoNamespaceName',
        'overseaBuild'          => 'OverseaBuild',
        'code'                  => 'Code',
        'codeRepoName'          => 'CodeRepoName',
        'autoBuild'             => 'AutoBuild',
        'isSuccess'             => 'IsSuccess',
        'disableCacheBuild'     => 'DisableCacheBuild',
        'codeRepoDomain'        => 'CodeRepoDomain',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->codeRepoType) {
            $res['CodeRepoType'] = $this->codeRepoType;
        }
        if (null !== $this->repoId) {
            $res['RepoId'] = $this->repoId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->codeRepoNamespaceName) {
            $res['CodeRepoNamespaceName'] = $this->codeRepoNamespaceName;
        }
        if (null !== $this->overseaBuild) {
            $res['OverseaBuild'] = $this->overseaBuild;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->codeRepoName) {
            $res['CodeRepoName'] = $this->codeRepoName;
        }
        if (null !== $this->autoBuild) {
            $res['AutoBuild'] = $this->autoBuild;
        }
        if (null !== $this->isSuccess) {
            $res['IsSuccess'] = $this->isSuccess;
        }
        if (null !== $this->disableCacheBuild) {
            $res['DisableCacheBuild'] = $this->disableCacheBuild;
        }
        if (null !== $this->codeRepoDomain) {
            $res['CodeRepoDomain'] = $this->codeRepoDomain;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetRepoSourceCodeRepoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CodeRepoType'])) {
            $model->codeRepoType = $map['CodeRepoType'];
        }
        if (isset($map['RepoId'])) {
            $model->repoId = $map['RepoId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['CodeRepoNamespaceName'])) {
            $model->codeRepoNamespaceName = $map['CodeRepoNamespaceName'];
        }
        if (isset($map['OverseaBuild'])) {
            $model->overseaBuild = $map['OverseaBuild'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['CodeRepoName'])) {
            $model->codeRepoName = $map['CodeRepoName'];
        }
        if (isset($map['AutoBuild'])) {
            $model->autoBuild = $map['AutoBuild'];
        }
        if (isset($map['IsSuccess'])) {
            $model->isSuccess = $map['IsSuccess'];
        }
        if (isset($map['DisableCacheBuild'])) {
            $model->disableCacheBuild = $map['DisableCacheBuild'];
        }
        if (isset($map['CodeRepoDomain'])) {
            $model->codeRepoDomain = $map['CodeRepoDomain'];
        }

        return $model;
    }
}
