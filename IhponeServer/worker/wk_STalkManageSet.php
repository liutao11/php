<?php
/**
 * Created by PhpStorm.
 * User: lt
 * Date: 2016/6/17
 * Time: 14:54
 */
class wk_STalkManageSet extends  e_ServiceWorker{
    function  Admin($cookie,$cookieKey){
        $data=$this->DBselectAll("TalkKey");
        $this->assign('data',$data);
        @$maxScore=$this->rd->get("PhoneServer::TalkManage::maxScore")?$this->rd->get("PhoneServer::TalkManage::maxScore"):$this->main['defaultMaxScore'];
        $this->assign("maxScore",$maxScore);
        $this->display("Service/STalkManageSet.html");
    }
}


?>