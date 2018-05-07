<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sp_web_content_page".
 *
 * @property int $id
 * @property int $webId 网站ID
 * @property string $page_url 页面地址
 * @property int $state 采集状态，0 未采集  1 采集成功
 * @property int $isDelet 删除状态，1 删除 0 未删除
 * @property string $createTime
 */
class SpWebContentPage extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sp_web_content_page';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['webId', 'page_url', 'state'], 'required'],
            [['webId', 'state', 'isDelet'], 'integer'],
            [['createTime'], 'safe'],
            [['page_url'], 'string', 'max' => 300],
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
            'page_url' => 'Page Url',
            'state' => 'State',
            'isDelet' => 'Is Delet',
            'createTime' => 'Create Time',
        ];
    }
}
