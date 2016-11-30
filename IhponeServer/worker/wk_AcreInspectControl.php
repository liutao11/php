<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/1/28
 * Time: 17:14
 */
class wk_AcreInspectControl extends e_AdminWorker{
    function Admin($cookie,$cookieKey){
        $state=$this->get['state'];
        $AcerId=$this->get['AcerId'];
        $TimeS=time();
        if($state && $AcerId){
            $result=$this->DBselect("AcerApply","id='{$AcerId}'");
            if($state==1 && $result['state']==1){
                $roleS_array=explode(',',$result['roleS']);

                $dblink=new cl_gamedb($this->update_db->get_link(),$result['objectId'],$result['serverIndex']);
                foreach($roleS_array as $vv){
                    if($result['isBind']==1){
                        $sql="update dbo.MIR_HUM_INFO set nGameGold=nGameGold+{$result['number']} where sChrName='{$vv}'";
                    }elseif($result['isBind']==2){
                        $sql="update dbo.MIR_HUM_INFO set nGameGird=nGameGird+{$result['number']} where sChrName='{$vv}'";
                    }
                    $result=$dblink->update($sql);
                }
                $result=$this->DBupdate('AcerApply',"inspectName='{$cookie['username']}',inspectTime='{$TimeS}',state=2","id='{$AcerId}'");
            }elseif($state==2 && $result['state']==1){
                $result=$this->DBupdate('AcerApply',"inspectName='{$cookie['username']}',inspectTime='{$TimeS}',state=3","id='{$AcerId}'");
            }
            if($result){
                $this->response->end(json_encode(array("status" => "2000", "message" => "操作成功！")));
            }else{
                $this->response->end(json_encode(array("status" => "10002", "message" => "操作失败！")));
            }
        }else{
            $this->response->end(json_encode(array("status" => "10002", "message" => "提交数据非法！")));
        }
    }
}



?>