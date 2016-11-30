<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/1/23
 * Time: 16:33
 */
class wk_PayDayReport extends e_DataWorker{
    function Admin($cookie,$cookieKey){
        if(@$cookie['DayReportStartDay'] && $cookie['DayReportEndDay']){
            $StartDay=$cookie['DayReportStartDay'];
            $EndDay=$cookie['DayReportEndDay'];
        }else{
            $StartDay=date("Y-m-d 00:00:00");
            $EndDay=date("Y-m-d 23:59:59");
        }
        $this->assign("StartDay",$StartDay);
        $this->assign("EndDay",$EndDay);
        $ExchangeRate=$this->main['ExchangeRate'];
        $this->assign("ExchangeRate",$ExchangeRate);
        $serverS=$this->DBselectAll("gameServer","ObjectId='{$cookie['objectGround']}' and isClose=1","id,ServerTitle,GameServerUnid,DBGameName,DBLogName,DBPayName,DBPayId");
        $this->assign('serverS',$serverS);
        $serverKeyValue=array();
        foreach($serverS as $vv){
            $serverKeyValue[$vv['id']]=$vv['GameServerUnid'];
            $serverS_cl[$vv['id']]=$vv;
        }
        foreach($this->main['fromInfo'] as $vv_i){
            $fromInfo_cl[$vv_i['fromInfoId']]=$vv_i['fromInfoName'];
        }
        if(@$cookie['serverIndex'] && $cookie['serverIndex']!=0 ) {
            $this->assign('serverIndex',$cookie['serverIndex']);
            $this->assign("serverUnid",$cookie['serverUnid']);
            $dblink=new cl_gamedbS($this->update_db->get_link(),$this->rd,$cookie['objectGround'],$cookie['serverIndex']);


            $gameServerInfo=$serverS_cl[$cookie['serverIndex']];

            $startTime=strtotime($StartDay);
            $endTime=strtotime($EndDay);
            if($startTime==$endTime){
                $DayS=1;
            }else {
                $DayS = ($endTime - $startTime) / (24 * 3600)+1;
            }



            for($i=1;$i<=$DayS;$i++){
                $jsStartDay=date("Y-m-d H:i:s",$startTime+($i-1)*24*3600);
                $jsEndDay=date("Y-m-d H:i:s",$startTime+$i*24*3600);
                $data_b=array();
                $data_b['day']=date("Y-m-d",$startTime+($i-1)*24*3600);

                $sql="select aa.nNumber,aa.UserID ,aa.fromIdm,bb.UserID as oldUserID from {$gameServerInfo['DBPayName']}.dbo.Pay_{$gameServerInfo['DBPayId']} as aa LEFT  JOIN  ( select UserID from {$gameServerInfo['DBPayName']}.dbo.Pay_{$gameServerInfo['DBPayId']} where  createTimes <= '{$jsStartDay}' GROUP  BY  UserID ) as bb on bb.UserID= aa.UserID where aa.createTimes >= '{$jsStartDay}' and aa.createTimes < '{$jsEndDay}'";
                $result=$dblink->query($sql);

                $UserID_array_b=array();
                $new_UserID_array_b=array();
                $data_b['payTimeSum']=0;
                $data_b['payNumberSum']=0;
                $fromIdm_a=[];


                foreach($result as $item){
                    foreach($item as $vv){
                        $data_b['payTimeSum']++;
                        $data_b['payNumberSum']+=$vv['nNumber'];
                        if(!in_array($vv['UserID'],$UserID_array_b)) {
                            $UserID_array_b[] = $vv['UserID'];
                        }
                        if(!$vv['oldUserID']){
                            if(!in_array($vv['UserID'],$new_UserID_array_b)) {
                                $new_UserID_array_b[] = $vv['UserID'];
                            }
                        }
                        //var_dump($vv);
                       if(@$fromIdm_a[$vv['fromIdm']]){
                            @$fromIdm_a[$vv['fromIdm']]['amount']+=($vv['nNumber']/10);
                        }else{
                            $fromIdm_a[$vv['fromIdm']]['amount']=($vv['nNumber']/10);
                            @$fromIdm_a[$vv['fromIdm']]['name']=$fromInfo_cl[$vv['fromIdm']];
                        }
                    }
                }
                $data_b['payUserSum']=count($UserID_array_b);
                $data_b['NewPayUserSum']=count($new_UserID_array_b);


                $result=$this->DBselect("gameServer","ObjectId='{$cookie['objectGround']}'");
                $gameDBName=$result['DBGameName'];
                $logDBName=$result['DBLogName'];

                //总登入人数
                $logDay=date("Y_m_d",$startTime+($i-1)*24*3600);
                if(date("Y_m_d")==$logDay){
                    $sql="select PlayerID from {$gameServerInfo['DBLogName']}.dbo.logMsg GROUP  by PlayerID";
                }else{
                    $sql="select PlayerID from {$gameServerInfo['DBLogName']}.dbo.ChartLog_{$logDay} GROUP  by PlayerID";
                }
                $result=$dblink->query($sql);
                $data_b['PlayerSum']= 0;
                foreach($result as $item){
                    $data_b['PlayerSum']+=count($item);
                }
                $data_b['ARPU']=$data_b['PlayerSum']?sprintf("%.2f",$data_b['payNumberSum']/$data_b['PlayerSum']/10):0;
                $data_b['ARPPU']=$data_b['payUserSum']?sprintf("%.2f",$data_b['payNumberSum']/$data_b['payUserSum']/10):0;
                $data_b['PayLv']= $data_b['PlayerSum']?sprintf("%.4f",$data_b['payUserSum']/$data_b['PlayerSum'])*100:0;
                $data_b['fromIdm']=$fromIdm_a;
                $data[]=$data_b;
            }
            $j=0;
            foreach($data as $kk=>$vv){
                if($j>=1){
                    $jspayNumberSum=$data[$j]['payNumberSum'];
                    $qtpayNumberSum=$data[($j-1)]['payNumberSum'];
                    if($jspayNumberSum && $qtpayNumberSum){
                        if($jspayNumberSum >$qtpayNumberSum){ //增长
                            $data[$kk]['type']=1;
                            $data[$kk]['lv']=sprintf("%.4f",($jspayNumberSum-$qtpayNumberSum)/$qtpayNumberSum)*100;
                        }elseif($jspayNumberSum < $qtpayNumberSum){    //减少
                            $data[$kk]['type']=2;
                            $data[$kk]['lv']=sprintf("%.4f",($qtpayNumberSum-$jspayNumberSum)/$qtpayNumberSum)*100;
                        }else{
                            $data[$kk]['type']=0;
                        }
                    }else{
                        $data[$kk]['type']=0;
                    }
                }else{
                    $data[$kk]['type']=0;
                }
                $j++;
            }
            $this->assign('data',$data);
            $data_payDay=array();
            $data_payNumberSum=array();
            $data_payUserSum=array();
            $data_sum=array('amountSum'=>0,'payNumberSum'=>0,'payUserSumSum'=>0,'NewPayUserSumSum'=>0,'PlayerSumSum'=>0,"fromInfoSum"=>array());
            foreach($data as $vv){
                $data_payDay[]=$vv['day'];
                $data_payNumberSum[]=$vv['payNumberSum']/10;
                $data_payUserSum[]=$vv['payUserSum'];
                $data_sum['amountSum']+=$vv['payNumberSum']/10;
                $data_sum['payNumberSum']+=$vv['payTimeSum'];
                $data_sum['payUserSumSum']+=$vv['payUserSum'];
                $data_sum['NewPayUserSumSum']+=$vv['NewPayUserSum'];
                $data_sum['PlayerSumSum']+=$vv['PlayerSum'];
                foreach($vv['fromIdm'] as $keyId=>$v){
                    if(@$data_sum['fromInfoSum'][$keyId]){
                        $data_sum['fromInfoSum'][$keyId]['amount']+=$v['amount'];
                    }else{
                        $data_sum['fromInfoSum'][$keyId]['amount']=$v['amount'];
                        $data_sum['fromInfoSum'][$keyId]['name']=$v['name'];
                    }
                }
            }
            $data_sum['ARPPUSUM']=$data_sum['payUserSumSum']?sprintf("%.2f",$data_sum['amountSum']/$data_sum['payUserSumSum']):0;
            $data_sum['ARPUSUM']=$data_sum['PlayerSumSum']?sprintf("%.2f",$data_sum['amountSum']/$data_sum['PlayerSumSum']):0;
            $data_sum['PaylvSUM']=$data_sum['PlayerSumSum']?sprintf("%.4f",$data_sum['payUserSumSum']/$data_sum['PlayerSumSum'])*100:0;
            $this->assign('data_sum', $data_sum);
            $this->assign("data_payDay",json_encode($data_payDay));
            $this->assign("data_payNumberSum",json_encode($data_payNumberSum));
            $this->assign("data_payUserSum",json_encode($data_payUserSum));


        }else{
            $this->assign('data_sum', 0);
            $this->assign('serverIndex',0);
            $this->assign("serverUnid","全服");
            $this->assign('data','');
            $this->assign('data_payDay','[]');
            $this->assign('data_payNumberSum','[]');
            $this->assign('data_payUserSum','[]');
        }


        $this->display("Data/PayDayReport.html");
    }
}

?>