<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "article_category".
 *
 * @property integer $id
 * @property integer $parent_id
 * @property string $cn_name
 * @property string $en_name
 * @property integer $state
 * @property integer $is_delete
 */
class ArticleCategory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'article_category';
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
            [['parent_id', 'cn_name', 'en_name'], 'required'],
            [['parent_id', 'state', 'is_delete'], 'integer'],
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
        ];
    }
}
