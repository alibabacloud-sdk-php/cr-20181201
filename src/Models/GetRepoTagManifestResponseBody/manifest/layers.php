<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models\GetRepoTagManifestResponseBody\manifest;

use AlibabaCloud\Tea\Model;

class layers extends Model
{
    /**
     * @description The digest of the image.
     *
     * @example sha256:e692418e4cbaf90ca69d05a66403747baa33ee08806650b51fab815ad7fc331f
     *
     * @var string
     */
    public $digest;

    /**
     * @description The MIME type of the configuration file.
     *
     * @example application/vnd.docker.image.rootfs.diff.tar.gzip
     *
     * @var string
     */
    public $mediaType;

    /**
     * @description Size.
     *
     * @example 32654
     *
     * @var int
     */
    public $size;
    protected $_name = [
        'digest'    => 'Digest',
        'mediaType' => 'MediaType',
        'size'      => 'Size',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->digest) {
            $res['Digest'] = $this->digest;
        }
        if (null !== $this->mediaType) {
            $res['MediaType'] = $this->mediaType;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return layers
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Digest'])) {
            $model->digest = $map['Digest'];
        }
        if (isset($map['MediaType'])) {
            $model->mediaType = $map['MediaType'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        return $model;
    }
}
