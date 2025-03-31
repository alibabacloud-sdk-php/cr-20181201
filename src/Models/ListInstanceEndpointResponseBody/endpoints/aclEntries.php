<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models\ListInstanceEndpointResponseBody\endpoints;

use AlibabaCloud\Dara\Model;

class aclEntries extends Model
{
    /**
     * @var string
     */
    public $entry;
    protected $_name = [
        'entry' => 'Entry',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->entry) {
            $res['Entry'] = $this->entry;
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
        if (isset($map['Entry'])) {
            $model->entry = $map['Entry'];
        }

        return $model;
    }
}
