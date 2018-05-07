<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "website".
 *
 * @property integer $id
 * @property integer $category_id
 * @property string $title
 * @property string $url
 * @property string $tags
 * @property string $description
 * @property string $top_pic
 * @property integer $vsits
 * @property integer $jump_num
 * @property integer $state
 * @property integer $is_delete
 * @property integer $addtime
 */
class Website extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'website';
    }

    /**
     * @return \yii\db\Connection the database connection used by this AR class.
     */
    public static function getDb()
    {
        return Yii::$app->get('db1');
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['category_id', 'title', 'url', 'addtime'], 'required'],
            [['category_id', 'vsits', 'jump_num', 'state', 'is_delete', 'addtime'], 'integer'],
            [['description'], 'string'],
            [['title', 'url', 'tags'], 'string', 'max' => 120],
            [['top_pic'], 'string', 'max' => 60],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category_id' => 'Category ID',
            'title' => 'Title',
            'url' => 'Url',
            'tags' => 'Tags',
            'description' => 'Description',
            'top_pic' => 'Top Pic',
            'vsits' => 'Vsits',
            'jump_num' => 'Jump Num',
            'state' => 'State',
            'is_delete' => 'Is Delete',
            'addtime' => 'Addtime',
        ];
    }
}
