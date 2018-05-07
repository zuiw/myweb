<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "article_body".
 *
 * @property integer $article_id
 * @property string $article_content
 */
class ArticleBody extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'article_body';
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
            [['article_id', 'article_content'], 'required'],
            [['article_id'], 'integer'],
            [['article_content'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'article_id' => 'Article ID',
            'article_content' => 'Article Content',
        ];
    }
}
