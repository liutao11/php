<?php
/**角色*/
class wk_UserRoleList extends e_ServiceWorker{
    function Admin($cookie,$cookieKey){
        $serverS=$this->DBselectAll("gameServer","ObjectId='{$cookie['objectGround']}' and isClose=1","id,GameServerUnid,DBGameName,DBLogName,DBPayName,DBPayId,ServerTitle");
        $this->assign('serverS',$serverS);


        if(@$cookie['serverIndex'] && $cookie['serverIndex']!=0 ){
            $this->assign('serverIndex',$cookie['serverIndex']);
            $serverIndex=$cookie['serverIndex'];
        }else{
            $serverIndex=$serverS[0]['id'];
            $this->assign('serverIndex',$serverIndex);
        }
        if(@$cookie['DayReportStartDayS'] && $cookie['DayReportEndDayS']){
            $StartDay=$cookie['DayReportStartDayS'];
            $EndDay=$cookie['DayReportEndDayS'];
        }else{
            $StartDay=date("Y-m-d");
            $EndDay=date("Y-m-d");
        }
        @$values=$cookie['UserRoleListBlurValues'];
        @$index=$cookie['UserRoleListBlurIndex'];
        if($values){
            if($index==1){
                $sql_butter="and aa.sChrName like '{$values}%'";
            }elseif($index==2){
                $sql_butter="and aa.sAccount like '{$values}%'";
            }elseif($index==3){
                if($values=="男"){
                    $sql_butter="and aa.btSex=0";
                }elseif($values=="女"){
                    $sql_butter="and aa.btSex=1";
                }
            }elseif($index==4){
                if($values=="战士"){
                    $sql_butter="and aa.btJob=0";
                }elseif($values=="法师"){
                    $sql_butter="and aa.btJob=1";
                }elseif($values=="道士"){
                    $sql_butter="and aa.btJob=2";
                }
            }elseif($index==5){
                $sql_butter="and aa.Level='{$values}'";
            }elseif($index==6){
                $sql_butter="and aa.btRelevel='{$values}'";
            }
        }else{
            $sql_butter="";
        }
        $this->assign("index",$index?$index:0);
        $this->assign("value",$values?$values:"");

        $this->assign("startDay",$StartDay);
        $this->assign("endDay",$EndDay);
        $dblink=new cl_gamedbS($this->update_db->get_link(),$this->rd,$cookie['objectGround'], $serverIndex);

        foreach($serverS as $vv){
            if($serverIndex==$vv['id']){
                $DBGameName=$vv['DBGameName'];
                $DBPayName=$vv['DBPayName'];
                $DBLogName=$vv['DBLogName'];
                $DBPayId=$vv['DBPayId'];
            }
        }

        $EndDay_sql=date("Y-m-d H:i:s",strtotime($EndDay)+24*3600);
        $StartDay_sql=date("Y-m-d H:i:s",strtotime($StartDay));
        $sql="select aa.Id,aa.sChrName,aa.sAccount,aa.btSex,aa.btJob,aa.Level,aa.btRelevel,aa.nGold,aa.nGameGird,bb.moneyInt,CONVERT(varchar(100),aa.dCreateDate,20) dCreateDate from {$DBGameName}.dbo.MIR_HUM_INFO as aa LEFT JOIN (select UserID,sum(nNumber)/10 as moneyInt from {$DBPayName}.dbo.Pay_{$DBPayId} GROUP BY UserID ) as bb on bb.UserID=aa.sAccount where aa.dCreateDate >='{$StartDay_sql}' and   aa.dCreateDate <='{$EndDay_sql}' {$sql_butter} ORDER  BY aa.id desc";
        $result=$dblink->query($sql,600);
        $data=$result[$serverIndex];

        $className="UserRoleList";
        if(@$cookie[$className.'ChangePageInt']){
            $showPageInt=$cookie[$className.'ChangePageInt'];
        }else{
            $showPageInt=1;
        }
        $this->assign('showPageInt',$showPageInt);

        $pagelength=40;
        $data_s=array();
        foreach($data as $kk=>$vv){
            if((($showPageInt-1)*$pagelength-1) <= $kk && $kk <= ($showPageInt*$pagelength-1)){
                $data_s[]=$vv;
            }
        }
        $this->assign('data',$data_s);
        $pageSum=ceil(count($data)/$pagelength);
        $this->assign("pageSum",$pageSum);
        $this->assign("pageSumTo5",$pageSum-5);
        $this->assign("pageSumTo11",$pageSum-11);

        $this->assign("showPageIntS5",$showPageInt-5);
        $this->assign("showPageIntA5",$showPageInt+5);
        $this->assign("pageSum_11",$pageSum-11);
        $this->assign('pagelength',$pagelength);
        $this->assign('className',$className);



        $this->display("Service/UserRoleList.html");
    }
}






















?>