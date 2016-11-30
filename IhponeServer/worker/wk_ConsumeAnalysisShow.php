<?php
/**
 * Created by PhpStorm.
 * User: lt
 * Date: 2016/6/30
 * Time: 14:48
 */
class wk_ConsumeAnalysisShow extends e_DataWorker{
    function Admin($cookie,$cookieKey){
        $showKey=$this->get['showKey'];
        $data_bu=$this->rd->get($showKey);
        $GameServerUnid=$this->get['serverIndex'];
        if($data_bu){
            $data=json_decode($data_bu,true);
            $data_cl=[];
            foreach($data as $key=>$value){
                if(strstr($key,'元宝改变交易')){
                    if($value['price']<0) {
                        if (@$data_cl['元宝改变交易']) {
                            $data_cl['元宝改变交易']['num'] += $value['num'];
                            $data_cl['元宝改变交易']['userNum'] += $value['userNum'];
                        } else {
                            $data_cl['元宝改变交易'] = array("num" => $value['num'], "name" => "元宝改变-交易", "userNum" => $value['userNum']);
                        }
                    }
                }else{
                    $data_cl[$key]=$value;
                }
            }
        }else{
            $data_cl='';
        }

        $this->assign('data',$data_cl);
        $this->assign('GameServerUnid',$GameServerUnid);
        $this->display("Data/ConsumeAnalysisShow.html");
    }
}




?>