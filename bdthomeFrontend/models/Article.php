<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "article".
 *
 * @property integer $id
 * @property integer $category_id
 * @property string $title
 * @property string $tags
 * @property string $description
 * @property integer $vsits
 * @property integer $state
 * @property integer $is_delete
 * @property integer $addtime
 */
class Article extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'article';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['category_id', 'title', 'addtime'], 'required'],
            [['category_id', 'vsits', 'state', 'is_delete', 'addtime'], 'integer'],
            [['description'], 'string'],
            [['title', 'tags'], 'string', 'max' => 120],
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
            'tags' => 'Tags',
            'description' => 'Description',
            'vsits' => 'Vsits',
            'state' => 'State',
            'is_delete' => 'Is Delete',
            'addtime' => 'Addtime',
        ];
    }
}
