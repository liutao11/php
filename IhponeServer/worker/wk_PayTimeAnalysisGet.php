<?php
/**
 * Created by PhpStorm.
 * User: lt
 * Date: 2016/6/24
 * Time: 16:51
 */
class wk_PayTimeAnalysisGet extends e_DataWorker{
    function Admin($cookie,$cookieKey){
        $serverIndex=$this->get['serverIndex'];
        $startDay=$this->get['startDay'];
        if($serverIndex && $startDay){
            $cookieName=$this->main['cookieName'];
            $cookie['serverIndex']=$serverIndex;
            $cookie['startDay']=$startDay;
            $this->rd->setex($cookieName.$cookieKey,1800,json_encode($cookie));
            $this->response->end(json_encode(array("status" => "2000", "message" => "操作成功！")));
        }else{
            $this->response->end(json_encode(array("status" => "10002", "message" => "提交数据非法！")));
        }
    }
}

?>