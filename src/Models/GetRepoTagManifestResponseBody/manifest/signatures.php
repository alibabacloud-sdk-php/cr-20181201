<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models\GetRepoTagManifestResponseBody\manifest;

use AlibabaCloud\Tea\Model;

class signatures extends Model
{
    /**
     * @var string
     */
    public $signature;

    /**
     * @var mixed[]
     */
    public $header;

    /**
     * @var string
     */
    public $protected;
    protected $_name = [
        'signature' => 'Signature',
        'header'    => 'Header',
        'protected' => 'Protected',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->signature) {
            $res['Signature'] = $this->signature;
        }
        if (null !== $this->header) {
            $res['Header'] = $this->header;
        }
        if (null !== $this->protected) {
            $res['Protected'] = $this->protected;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return signatures
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Signature'])) {
            $model->signature = $map['Signature'];
        }
        if (isset($map['Header'])) {
            $model->header = $map['Header'];
        }
        if (isset($map['Protected'])) {
            $model->protected = $map['Protected'];
        }

        return $model;
    }
}
