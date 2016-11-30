<?php
/**
 * Created by PhpStorm.
 * User: lt
 * Date: 2016/6/24
 * Time: 15:57
 */
class wk_PayTimeAnalysis extends e_DataWorker{
    function Admin($cookie,$cookieKey){
        $serverS=$this->DBselectAll("gameServer","ObjectId='{$cookie['objectGround']}' and isClose=1","id,ServerTitle,GameServerUnid,DBGameName,DBLogName,DBPayName,DBPayId");
        $this->assign('serverS',$serverS);
        $serverIndex=$cookie['serverIndex']?$cookie['serverIndex']:$serverS[0]['id'];
        $dblink=new cl_gamedbS($this->update_db->get_link(),$this->rd,$cookie['objectGround'],$serverIndex);
        foreach($serverS as $vv){
            if($vv['id']==$serverIndex){
                $DBPayName=$vv['DBPayName'];
                $DBPayId=$vv['DBPayId'];
                break;
            }
        }
        $ExchangeRate=$this->main['ExchangeRate'];
        $startDay=$cookie['startDay']?$cookie['startDay']:date("Y-m-d");
        $this->assign('startDay',$startDay);
        $jsStartDay=date("Y-m-d H:i:s",strtotime($startDay)+24*3600);
        $sql="select count(UserID) as PayTimeSum,sum(nNumber) as nNumberSum ,UserID from {$DBPayName}.dbo.Pay_{$DBPayId} where createTimes < '{$jsStartDay}'  GROUP BY UserID";

        $result=$dblink->query($sql);
        $data=[];
        $userSum=0;
        $mountSum=0;
        foreach($result as $item){
            foreach($item as $vv){
                if(@$data[$vv['PayTimeSum']]){
                    $data[$vv['PayTimeSum']]['userSum']++;
                    $data[$vv['PayTimeSum']]['mountSum']+=$vv['nNumberSum']/$ExchangeRate;
                }else{
                    $data[$vv['PayTimeSum']]['userSum']=1;
                    $data[$vv['PayTimeSum']]['mountSum']=$vv['nNumberSum']/$ExchangeRate;
                }
                $userSum++;
                $mountSum+=$vv['nNumberSum']/$ExchangeRate;
            }
        }
        ksort($data);
        $this->assign('data',$data);
        $this->assign('userSum',$userSum);
        $this->assign("mountSum",$mountSum);

        $this->assign('serverIndex',$serverIndex);
        $this->display("Data/PayTimeAnalysis.html");

    }
}


?>