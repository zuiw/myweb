<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sp_web".
 *
 * @property int $id
 * @property string $web_host 宿主网站
 * @property string $web_name 网站名称
 * @property string $web_url 网址
 * @property int $state 抓取状态，1抓取 2 暂停
 * @property int $isDelet 是否删除
 * @property string $createTime
 */
class SpWeb extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sp_web';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['web_host', 'web_name', 'web_url'], 'required'],
            [['state', 'isDelet'], 'integer'],
            [['createTime'], 'safe'],
            [['web_host', 'web_name'], 'string', 'max' => 120],
            [['web_url'], 'string', 'max' => 300],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'web_host' => 'Web Host',
            'web_name' => 'Web Name',
            'web_url' => 'Web Url',
            'state' => 'State',
            'isDelet' => 'Is Delet',
            'createTime' => 'Create Time',
        ];
    }
}
