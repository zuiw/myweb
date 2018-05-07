<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sp_web_content".
 *
 * @property int $id
 * @property int $webId 网站ID
 * @property string $column 原网站的栏目名称
 * @property string $title 标题
 * @property string $keywords 关键词
 * @property string $describe 描述
 * @property string $content 内容
 * @property int $state 状态 0 未发布 1 已发布
 * @property int $isDelet 删除状态，1 删除 0 未删除
 * @property string $createTime
 */
class SpWebContent extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sp_web_content';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['webId', 'title', 'content', 'state'], 'required'],
            [['webId', 'state', 'isDelet'], 'integer'],
            [['describe', 'content'], 'string'],
            [['createTime'], 'safe'],
            [['column'], 'string', 'max' => 120],
            [['title'], 'string', 'max' => 300],
            [['keywords'], 'string', 'max' => 600],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'webId' => 'Web ID',
            'column' => 'Column',
            'title' => 'Title',
            'keywords' => 'Keywords',
            'describe' => 'Describe',
            'content' => 'Content',
            'state' => 'State',
            'isDelet' => 'Is Delet',
            'createTime' => 'Create Time',
        ];
    }
}
