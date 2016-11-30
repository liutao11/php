<?php
/**
 * 玩结束
 */
class wk_UserSet extends e_AdminWorker{
    function Admin($cookie,$cookieKey){
        $this->assign("groundId",$cookie['groundId']);
        $this->assign("roleS",$this->main['roleS']);
        $objectS=$this->DBselectAll("objectS");
        $this->assign("objectS",$objectS);
        $this->assign("fromInfo",$this->main['fromInfo']);
        $SKIDStr=file_get_contents($this->homeUrl."/conf/YijieSkIdSetup.php");
        $YJSKIDArray=json_decode($SKIDStr,true);
        $this->assign("YJSKIDArray",$YJSKIDArray);
        foreach($objectS as $vv){
            $objectS_b[$vv['id']]=$vv['title'];
        }
        $this->assign('objectS_b',$objectS_b);
        $this->assign("data",$this->DBselectAll('userList'));
        $this->display('Admin/UserSet.html');
    }
}
?>