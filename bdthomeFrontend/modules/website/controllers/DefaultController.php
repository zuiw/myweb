<?php
/**
  *==============================================
  * Description	 网站导航页
  *==============================================
  *
  * @FILE_NAME : ${FILE_NAME}
  * @author : zuiw
  * @MailAddr : mr.lintao@gmail.com
  * @copyright : Copyright (c) 2015 iamlintao.com
  * @DATE : ${DATE} ${TIME}
  * @Tutorial :
  *
  *--------------------------------------------------------------------------------------------
  * @todo :
  *--------------------------------------------------------------------------------------------
  */

namespace app\modules\website\controllers;

use app\models\Website;
use app\models\WebsiteCategory;
use yii\web\Controller;

/**
 * Default controller for the `website` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex(){

        $list = array();

        $category = WebsiteCategory::find()->where(['is_delete'=>'0','state'=>'1'])->orderBy('sort_num asc')->all();
        foreach($category as $k=>$v){
            $list[$k]['category_name'] = $v['cn_name'];
            $list[$k]['category_enname'] = $v['en_name'];
            $list[$k]['website'] = $this->getWebsite($v['id'],'20');
        }

        return $this->render('index',['list'=>$list]);
    }

    /**
     * 根据分类id获取所有的网站
     *
     * @param $categoryID
     */
    public function getWebsite($categoryID,$limitNum=NULL){

        if($limitNum > 0){

            $list = Website::find()->where(['is_delete'=>'0','state'=>'1','category_id'=>$categoryID])->orderBy('jump_num desc')->limit($limitNum)->all();

        }else {
            $list = Website::find()->where(['is_delete' => '0', 'state' => '1','category_id'=>$categoryID])->orderBy('jump_num desc')->all();
        }

        return $list;
    }
}
