<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\SubmitCustomHotTopicBroadcastJobRequest\hotTopicBroadcastConfig\stepForNewsBroadcastContentConfig;

use AlibabaCloud\Dara\Model;

class customHotValueWeights extends Model
{
    /**
     * @var string
     */
    public $dimension;

    /**
     * @var string
     */
    public $dimensionName;

    /**
     * @var int
     */
    public $weight;
    protected $_name = [
        'dimension' => 'Dimension',
        'dimensionName' => 'DimensionName',
        'weight' => 'Weight',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dimension) {
            $res['Dimension'] = $this->dimension;
        }

        if (null !== $this->dimensionName) {
            $res['DimensionName'] = $this->dimensionName;
        }

        if (null !== $this->weight) {
            $res['Weight'] = $this->weight;
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
        if (isset($map['Dimension'])) {
            $model->dimension = $map['Dimension'];
        }

        if (isset($map['DimensionName'])) {
            $model->dimensionName = $map['DimensionName'];
        }

        if (isset($map['Weight'])) {
            $model->weight = $map['Weight'];
        }

        return $model;
    }
}
