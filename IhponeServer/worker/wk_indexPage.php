<?php
/**
 * 玩结束
 */
class wk_indexPage extends e_UserWorker{
    function Admin($cookie,$cookieKey){
        $serverS=$this->DBselectAll("gameServer","ObjectId='{$cookie['objectGround']}' and isClose=1","id,ServerTitle,GameServerUnid,DBGameName,DBLogName,DBPayName,DBPayId");
        if(@$cookie['serverIndex'] && $cookie['serverIndex']!=0 ){
            $dblink=new cl_gamedbS($this->update_db->get_link(),$this->rd,$cookie['objectGround'],$cookie['serverIndex']);
            $serverIndex=$cookie['serverIndex'];
            $this->assign('serverIndex',$cookie['serverIndex']);
        }else{

            $serverIndex=$serverS[0]['id'];
            $this->assign('serverIndex',$serverS[0]['id']);
            $dblink=new cl_gamedbS($this->update_db->get_link(),$this->rd,$cookie['objectGround'],$serverIndex);
        }
        $this->assign('serverS',$serverS);

        foreach($serverS as $vv){
            if($vv['id']==$serverIndex){
                $DBPayName=$vv['DBPayName'];
                $DBPayId='Pay_'.$vv['DBPayId'];
                $DBGameName=$vv['DBGameName'];
                break;
            }
        }


        $todaySta=date("Y-m-d 00:00:00");
        $todayEnd=date("Y-m-d 23:59:59");
        $sql="select aa.nIndex,aa.UserID,aa.nNumber,aa.createTimes,aa.sChrName from {$DBPayName}.dbo.{$DBPayId} as aa where aa.createTimes >= '{$todaySta}' order by aa.nNumber desc ";
        $todaydb=$dblink->query($sql);

        $datestyle=array();
        $todayOnlinedb_cl=array();
        $yesOnlinedb_cl=array();

        for($i=0;$i<12*24;$i++){
            $datestyle[]=date("H:i",strtotime(date("Y-m-d"))+5*60*$i);
            $todayOnlinedb_cl[]=0;
            $yesOnlinedb_cl[]=0;
        }
        $this->assign("datestyle",json_encode($datestyle));



        $today=array("00"=>0,"01"=>0,"02"=>0,"03"=>0,"04"=>0,"05"=>0,"06"=>0,"07"=>0,"08"=>0,"09"=>0,"10"=>0,"11"=>0,"12"=>0,"13"=>0,"14"=>0,"15"=>0,"16"=>0,"17"=>0,"18"=>0,"19"=>0,"20"=>0,"21"=>0,"22"=>0,"23"=>0);
        foreach($todaydb as $item){
            foreach($item as $vv) {
                $jshours=date("H", strtotime($vv['createTimes']));
                $today[$jshours] += $vv['nNumber'] / 10;
            }
        }
        foreach($today as $vv){
            $today_b[]=$vv;
        }

        $dayHours=date("H");
        foreach($today_b as $kk=>$vv){
            if($dayHours < $kk){
                unset($today_b[$kk]);
            }
        }

        $this->assign("todayJson",json_encode($today_b));


        $yesSta=date("Y-m-d 00:00:00",time()-24*3600);
        $yesEnd=date("Y-m-d 23:59:59",time()-24*3600);
        $sql="SELECT nNumber,createTimes FROM {$DBPayName}.dbo.{$DBPayId} where createTimes >= '{$yesSta}' and createTimes <= '{$yesEnd}'";
        $yesdb=$dblink->query($sql,24*3600);
        $yes=array("00"=>0,"01"=>0,"02"=>0,"03"=>0,"04"=>0,"05"=>0,"06"=>0,"07"=>0,"08"=>0,"09"=>0,"10"=>0,"11"=>0,"12"=>0,"13"=>0,"14"=>0,"15"=>0,"16"=>0,"17"=>0,"18"=>0,"19"=>0,"20"=>0,"21"=>0,"22"=>0,"23"=>0);
        foreach($yesdb as $item){
            foreach($item as $vv){
                if ($yes[date("H", strtotime($vv['createTimes']))]) {
                    $yes[date("H", strtotime($vv['createTimes']))] += $vv['nNumber'] / 10;
                } else {
                    $yes[date("H", strtotime($vv['createTimes']))] = $vv['nNumber'] / 10;
                }
            }
        }
        foreach($yes as $vv){
            $yes_b[]=$vv;
        }
        $this->assign("yesJson",json_encode($yes_b));

        //在线人数查询
        $sql="SELECT UpdateTime,OnlineCount FROM {$DBGameName}.dbo.MIR_ONLINE where UpdateTime >= '{$todaySta}' and UpdateTime <= '{$todayEnd}'";
        $todayOnlinedb=$dblink->query($sql);
        $todayOnlinedb_b=array();
        foreach($todayOnlinedb as $item){
            foreach($item as $vv) {
                $UpdateTime=strtotime($vv['UpdateTime']);
                if( @$todayOnlinedb_b[$UpdateTime]){
                    $todayOnlinedb_b[$UpdateTime] += $vv['OnlineCount'];
                }else {
                    $todayOnlinedb_b[$UpdateTime] = $vv['OnlineCount'];
                }
            }
        }
        ksort($todayOnlinedb_b);

        foreach($todayOnlinedb_b as $kk=>$vv){
            $timeStrKey=$kk;
            $todayStrKey=strtotime($todaySta);
            $key=ceil(($timeStrKey-$todayStrKey)/300);
            if($key<=287){
               $todayOnlinedb_cl[$key]=ceil($vv*1.2);
            }
        }
        $this->assign("todayOnlinedb_cl",json_encode($todayOnlinedb_cl));

        $sql="SELECT UpdateTime,OnlineCount FROM {$DBGameName}.dbo.MIR_ONLINE where UpdateTime >= '{$yesSta}' and UpdateTime < '{$yesEnd}'";

        $yesOnlinedb=$dblink->query($sql,24*3600);
        $yesOnlinedb_b=array();
        foreach($yesOnlinedb as $item){
            foreach($item as $vv){
                $UpdateTime=strtotime($vv['UpdateTime']);
                if(@$yesOnlinedb_b[$UpdateTime]){
                    $yesOnlinedb_b[$UpdateTime] += $vv['OnlineCount'];
                }else{
                    $yesOnlinedb_b[$UpdateTime] = $vv['OnlineCount'];
                }
            }
        }
        ksort($yesOnlinedb_b);
        foreach($yesOnlinedb_b as $kk=>$vv){
            $timeStrKey=$kk;
            $todayStrKey=strtotime($yesSta);
            $key=ceil(($timeStrKey-$todayStrKey)/300);
            if($key <= 287) {
                $yesOnlinedb_cl[$key] = ceil($vv * 1.2);
            }
        }
        $this->assign("yesOnlinedb_cl",json_encode($yesOnlinedb_cl));

        //最新充值查询
        $serverS_cl=array();
        foreach($serverS  as $vv){
            $serverS_cl[$vv['id']]=$vv;
        }
        $sql="SELECT top 13 aa.UserID,aa.nNumber,aa.createTimes,bb.sChrName FROM {$DBPayName}.dbo.{$DBPayId} as aa left JOIN {$DBGameName}.dbo.MIR_HUM_INFO as bb  on bb.sAccount=aa.UserID order by aa.createTimes desc";
        $payNewDB=$dblink->query($sql);

        foreach($payNewDB as $kk=>$item){
            foreach($item as $vv) {
                $vv['GameServerUnid']=$serverS_cl[$kk]['GameServerUnid'];
                $vv['createDate']=date("Y-m-d H:i:s",strtotime($vv['createTimes']));
                $this->rd->zAdd("IhponePayTimeCro_buffer",strtotime($vv['createTimes']),json_encode($vv));
            }
        }
        $payNewDB_b=$this->rd->zRevRange("IhponePayTimeCro_buffer",0,10);

        $this->rd->del("IhponePayTimeCro_buffer");

        foreach($payNewDB_b as $vv){
            $payNewDB_cl[]=json_decode($vv,true);
        }
        @$this->assign("payNewDB",$payNewDB_cl?$payNewDB_cl:array());
        //今日充值排名

        $payList=$todaydb;
        $palistIndex=array();
        foreach($payList as $kk=>$item){
            foreach($item as $vv){
                if(@$palistIndex[$kk.$vv['UserID']]) {

                    $palistIndex[$kk.$vv['UserID']]['nNumber']+=$vv['nNumber'];

                }else{
                    $palistIndex[$kk.$vv['UserID']]['GameServerUnid']=$serverS_cl[$kk]['GameServerUnid'];
                    $palistIndex[$kk.$vv['UserID']]['sChrName']=$vv['sChrName'];
                    $palistIndex[$kk.$vv['UserID']]['nNumber']=$vv['nNumber'];
                }
            }
        }

        foreach($palistIndex as $vv){
            $this->rd->zAdd("GMToolPayList_buffer", $vv['nNumber'], json_encode($vv));
        }

        $payListTopArray=$this->rd->zRevRange("GMToolPayList_buffer",0,10);
        $this->rd->del("GMToolPayList_buffer");
        $payListTopArray_cl=array();
        foreach($payListTopArray as $vv){
            $payListTopArray_cl[]=json_decode($vv,true);
        }
        $this->assign("payListTopArray",$payListTopArray_cl);
        //今日充值总数
        $sql="select sum(nNumber) as nNumberSum  from {$DBPayName}.dbo.{$DBPayId} where createTimes >= '{$todaySta}'";
        $result=$dblink->query($sql);
        $todayPaySum=0;
        foreach($result as $item){
            foreach($item as $vv){
                $todayPaySum+=$vv['nNumberSum'];
            }
        }
        $this->assign('todayPaySum',$todayPaySum);
        //本月的充值总数
        $monthPaySta=date("Y-m-d 00:00:00",strtotime(date("Y-m")));
        $sql="select sum(nNumber) as nNumberSum from  {$DBPayName}.dbo.{$DBPayId} where createTimes >= '{$monthPaySta}'";
        $result=$dblink->query($sql);
        $monthPaySun=0;
        foreach($result as $item){
            foreach($item as $vv){
                $monthPaySun+=$vv['nNumberSum'];
            }
        }
        $this->assign("monthPaySun",$monthPaySun);
        //总的充值数据
        $sql="select sum(nNumber) as nNumberSum from  {$DBPayName}.dbo.{$DBPayId}";
        $PaySun=0;
        $result=$dblink->query($sql);
        foreach($result as $item){
            foreach($item as $vv){
                $PaySun+=$vv['nNumberSum'];
            }
        }
        $this->assign("PaySum",$PaySun);
        //最新在线数据
        $sql="select top 1 OnlineCount from  {$DBGameName}.dbo.MIR_ONLINE order by UpdateTime desc";
        $result=$dblink->query($sql);
        $nowOnline=0;
        foreach($result as $item){
            foreach($item as $vv){
               $nowOnline+=$vv['OnlineCount'];
            }
        }
        $this->assign('nowOnline',ceil($nowOnline*1.2));
        $this->display("User/indexPage.html");
    }
}
?>