<?php
/**
 *==============================================
 * Description  已采集内容
 *==============================================
 *
 * @FILE_NAME :
 * @PRODUCT:
 * @PROJECT:
 * @author : zuiw
 * @MailAddr : mr.lintao@gmail.com
 * @copyright : Copyright (c) 2017 iamlintao.com
 * @DATE : ${DATE} ${TIME}
 *
 *--------------------------------------------------------------------------------------------
 * @Mark :
 *
 *--------------------------------------------------------------------------------------------
 */

namespace app\modules\spider\controllers;
use app\models\SpWebContent;
use yii\web\Controller;
use yii\data\Pagination;


/**
 * Default controller for the `spider` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        $data = SpWebContent::find()->where(['isDelet'=>'0','state'=>'0'])->orderBy('id desc');
        $pages = new Pagination(['totalCount' =>$data->count(), 'pageSize' => '10']);
        $_list = $data->offset($pages->offset)->limit($pages->limit)->all();

        $list = array();
        foreach ($_list as $k=>$v ) {
            $list[$k]['id']         = $v['id'];
            $list[$k]['title']      = $v['title'];
            $list[$k]['state']      = $v['state'];
            $list[$k]['keywords']   = $v['keywords'];
            $list[$k]['isDelet']  = $v['isDelet'];
            $list[$k]['createTime']    = $v['createTime'];
        }


        return $this->render('index',['list'=>$list,'pages'=>$pages]);
    }
}
