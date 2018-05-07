<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "article_label".
 *
 * @property integer $id
 * @property string $name
 * @property integer $isdelete
 */
class ArticleLabel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'article_label';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['isdelete'], 'integer'],
            [['name'], 'string', 'max' => 60],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'isdelete' => 'Isdelete',
        ];
    }
}
