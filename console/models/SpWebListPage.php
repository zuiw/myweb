<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sp_web_list_page".
 *
 * @property int $id
 * @property int $webId 网站ID
 * @property string $home_page 采集列表页的首页
 * @property string $other_page 其他采集页面
 * @property int $state 采集状态，1 采集 2 停止采集
 * @property int $isDelete 是否删除，1 删除 0 未删除
 * @property string $createTime
 */
class SpWebListPage extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sp_web_list_page';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['webId', 'home_page', 'other_page', 'state'], 'required'],
            [['webId', 'state', 'isDelete'], 'integer'],
            [['other_page'], 'string'],
            [['createTime'], 'safe'],
            [['home_page'], 'string', 'max' => 300],
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
            'home_page' => 'Home Page',
            'other_page' => 'Other Page',
            'state' => 'State',
            'isDelete' => 'Is Delete',
            'createTime' => 'Create Time',
        ];
    }
}
