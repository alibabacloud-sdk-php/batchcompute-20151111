<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BatchCompute\V20151111\Models;

use AlibabaCloud\Tea\Model;

class CancelImageRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CancelImageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
