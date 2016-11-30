<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/4/14
 * Time: 17:11
 */
class wk_SUerPaySelect extends e_ServiceWorker{
    function  Admin($cookie,$cookieKey){
        $serverS=$this->DBselectAll("gameServer","ObjectId='{$cookie['objectGround']}' and isClose=1","id,GameServerUnid,DBGameName,DBLogName");
        $this->assign('serverS',$serverS);
        $this->display("Service/SUerPaySelect.html");
    }
}
?>