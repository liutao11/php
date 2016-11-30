<?php
/**
 * Created by PhpStorm.
 * User: lt
 * Date: 2016/6/17
 * Time: 16:01
 */
class wk_STalkManageSetGet extends  e_ServiceWorker{
    function  Admin($cookie,$cookieKey){
        $state=$this->get['state'];
        if($state==1){
            $AddKeyInput=$this->get['AddKeyInput'];
            if($AddKeyInput){
                $this->DBinsert('TalkKey',"keyStr","'{$AddKeyInput}'");
                $this->response->end(json_encode(array("status" => "2000", "message" => "操作成功！")));
            }else{
                $this->response->end(json_encode(array("status" => "1002", "message" => "缺少参数！")));
            }
        }elseif($state==2){
            $keystrid=$this->get['keystrid'];
            if($keystrid){
                $this->DBdelete('TalkKey',"id='{$keystrid}'");
                $this->response->end(json_encode(array("status" => "2000", "message" => "操作成功！")));
            }else{
                $this->response->end(json_encode(array("status" => "1002", "message" => "缺少参数！")));
            }
        }elseif($state==3){
            $index=$this->get['index'];
            if($index==0 || $index==1){
                @$maxScore=$this->rd->get("PhoneServer::TalkManage::maxScore")?$this->rd->get("PhoneServer::TalkManage::maxScore"):$this->main['defaultMaxScore'];
                if($index==0){
                    if($maxScore==1){
                        $this->response->end(json_encode(array("status" => "1002", "message" => "操作失败！")));
                    }else{
                        $this->rd->set("PhoneServer::TalkManage::maxScore",$maxScore-1);
                        $this->response->end(json_encode(array("status" => "2000", "message" => "操作成功！")));
                    }
                }else{
                    if($maxScore==10){
                        $this->response->end(json_encode(array("status" => "1002", "message" => "操作失败！")));
                    }else{
                        $this->rd->set("PhoneServer::TalkManage::maxScore",$maxScore+1);
                        $this->response->end(json_encode(array("status" => "2000", "message" => "操作成功！")));
                    }
                }
            }else{
                $this->response->end(json_encode(array("status" => "1002", "message" => "缺少参数！")));
            }
        }
    }
}



?>