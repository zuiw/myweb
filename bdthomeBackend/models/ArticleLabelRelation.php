<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "article_label_relation".
 *
 * @property integer $label_id
 * @property integer $article_id
 */
class ArticleLabelRelation extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'article_label_relation';
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
            [['label_id', 'article_id'], 'required'],
            [['label_id', 'article_id'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'label_id' => 'Label ID',
            'article_id' => 'Article ID',
        ];
    }
}
