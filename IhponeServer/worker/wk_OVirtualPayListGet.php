<?php
/**
 * Created by PhpStorm.
 * User: lt
 * Date: 2016/7/27
 * Time: 14:25
 */
class wk_OVirtualPayListGet extends e_OperatorsWorker{
    function  Admin($cookie,$cookieKey){
        $serverIndex=$this->get['serverIndex'];
        $roles=$this->get['roles'];
        $Amount=$this->get['Amount'];
        $ExchangeRate=$this->main['ExchangeRate'];
        if($Amount && $serverIndex && $roles){
            $gameServerInfo=$this->DBselect('gameServer',"id='{$serverIndex}'");
            $NetUrl=$gameServerInfo['NetUrl'];
            $DBPort=$gameServerInfo['DBPort'];
            $DBUser=$gameServerInfo['DBUser'];
            $DBPassword=$gameServerInfo['DBPassword'];
            $TelnetPort=$gameServerInfo['TelnetPort'];
            $DBPayName=$gameServerInfo['DBPayName'];
            $DBPayId=$gameServerInfo['DBPayId'];
            try {
                $mssqlLink = new PDO ("dblib:host={$NetUrl}:{$DBPort};dbname={$DBPayName}", $DBUser, $DBPassword);
                $UserID="testUserId:".time();
                $sPayId="testOrder:".time().'_'.rand(1000,9999);
                $nNumber=$Amount*$ExchangeRate;
                $createTimes=date("Y-m-d H:i:s");
                $sql="insert into {$DBPayName}.dbo.Pay_v_{$DBPayId}(UserID,sPayId,nNumber,createTimes,drawout,drawouttime,fromIdm,sChrname) VALUES ('{$UserID}','{$sPayId}','{$nNumber}','{$createTimes}','1','{$createTimes}','9991','{$roles}')";
                $insert_result=$mssqlLink->query($sql);
                $mssqlError=$mssqlLink->errorInfo();
                if($insert_result && $mssqlError['0']=='00000'){
                    try{
                        $client = new swoole_client(SWOOLE_SOCK_TCP);
                        $sendState='';
                        if($client->connect($NetUrl,$TelnetPort,10)) {
                            $client->send("PAYGETV {$roles} {$Amount}\\");
                            $sendState=$client->recv();
                            $client->close();
                        }
                        if($sendState){
                            $this->response->end(json_encode(array("status" => "10002", "message" => "操作成功！")));
                        }else{
                            $this->response->end(json_encode(array("status" => "10002", "message" => "发送失败！")));
                        }
                    }catch (Exception $e){
                        $this->response->end(json_encode(array("status" => "10002", "message" => "发送失败！")));
                    }
                }else{
                    $this->response->end(json_encode(array("status" => "10002", "message" => "发送失败！")));
                }
            }catch (PDOException $e){
                $this->response->end(json_encode(array("status" => "10002", "message" => "插入数据库失败！")));
            }
        }else{
            $this->response->end(json_encode(array("status" => "10002", "message" => "提交数据非法！")));
        }
    }
}

?>