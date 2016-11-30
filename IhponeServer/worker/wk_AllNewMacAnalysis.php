<?php
/**
 * Created by PhpStorm.
 * User: lt
 * Date: 2016/7/8
 * Time: 17:38
 */
class wk_AllNewMacAnalysis extends e_DataWorker{
    function Admin($cookie,$cookieKey){
        if(@$cookie['DayReportStartDay'] && $cookie['DayReportEndDay']){
            $StartDay=$cookie['DayReportStartDay'];
            $EndDay=$cookie['DayReportEndDay'];
        }else{
            $StartDay=date("Y-m-d",time()-24*3600*5);
            $EndDay=date("Y-m-d");
        }
        $this->assign("startDay",$StartDay);
        $this->assign("endDay",$EndDay);
        $dbTimeStart=strtotime($StartDay);
        $dbTimeEnd=strtotime($EndDay)+24*3600;
        $data=[];
        for($i=$dbTimeStart;$i<$dbTimeEnd;$i+=24*3600){
            $data_key=date("Y-m-d",$i);
            $data[$data_key]=0;
        }

        $sql="select count(macInt) as macIntSum,dayStringKey from UniqueMAC where CTime >= {$dbTimeStart} and CTime < {$dbTimeEnd} GROUP  BY dayStringKey";
        $result_data=$this->DBReadLink()->query($sql);
        $result_data_array = $result_data->fetchAll(PDO::FETCH_ASSOC);

        if(@$result_data_array) {
            foreach($result_data_array as $vv){
                if(isset($data[$vv['dayStringKey']])){
                    $data[$vv['dayStringKey']]=$vv['macIntSum'];
                }
            }

        }
        $data_x=[];
        $data_y=[];
        foreach($data as $k=>$v){
            $data_x[]=$k;
            $data_y[]=$v;
        }
        $this->assign('data_x_js',json_encode($data_x));
        $this->assign('data_y_js',json_encode($data_y));

        $this->display("Data/AllNewMacAnalysis.html");
    }
}


?>