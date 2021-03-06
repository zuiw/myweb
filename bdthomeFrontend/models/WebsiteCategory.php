<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "website_category".
 *
 * @property integer $id
 * @property integer $parent_id
 * @property string $cn_name
 * @property string $en_name
 * @property integer $state
 * @property integer $is_delete
 * @property integer $sort_num
 */
class WebsiteCategory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'website_category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['parent_id', 'cn_name', 'en_name', 'sort_num'], 'required'],
            [['parent_id', 'state', 'is_delete', 'sort_num'], 'integer'],
            [['cn_name', 'en_name'], 'string', 'max' => 120],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'parent_id' => 'Parent ID',
            'cn_name' => 'Cn Name',
            'en_name' => 'En Name',
            'state' => 'State',
            'is_delete' => 'Is Delete',
            'sort_num' => 'Sort Num',
        ];
    }
}
