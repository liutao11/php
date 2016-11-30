<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/2/16
 * Time: 10:12
 */
class wk_DoingLogShow extends e_AdminWorker{
    function  Admin($cookie,$cookieKey){
        if(@$cookie['DoingLogShowStartDay'] && $cookie['DoingLogShowEndDay']){
            $StartDay=$cookie['DoingLogShowStartDay'];
            $EndDay=$cookie['DoingLogShowEndDay'];
        }else{
            $StartDay=date("Y-m-d");
            $EndDay=date("Y-m-d");
        }
        $this->assign("startDay",$StartDay);
        $this->assign("endDay",$EndDay);
        $StartTime=strtotime($StartDay);
        $EndTime=strtotime($EndDay)+24*3600;
        $pagelength=15;
        $className=__CLASS__;
        @$showPageInt=$cookie[$className.'ShowPage']?$cookie[$className.'ShowPage']:1;
        $result_listSum=$this->DBReadLink()->query("select count(id) as listSum  from DoingLog where tTime >= '{$StartTime}' and tTime <= '{$EndTime}'");
        $listSum_array=$result_listSum->fetchAll(PDO::FETCH_ASSOC);
        $limitStart=($showPageInt-1)*$pagelength;
        $limitEnd=$showPageInt*$pagelength;
        $data_result=$this->DBReadLink()->query("select * from DoingLog where tTime >= '{$StartTime}' and tTime <= '{$EndTime}' ORDER BY id DESC limit {$limitStart},{$limitEnd}");
        $data=$data_result->fetchAll(PDO::FETCH_ASSOC);
        $ListSum=$listSum_array['0']['listSum'];
        @$this->assign('data',$data);
        $pageSum = ceil($ListSum / $pagelength);
        $this->assign("pageSum", $pageSum);
        $this->assign("pageSumTo5", $pageSum - 5);
        $this->assign("pageSumTo11", $pageSum - 11);
        $this->assign("showPageInt",$showPageInt);
        $this->assign("showPageIntS5", $showPageInt - 5);
        $this->assign("showPageIntA5", $showPageInt + 5);
        $this->assign("pageSum_11", $pageSum - 11);
        $this->assign('pagelength', $pagelength);
        $this->assign("class",$className);
        $this->display("Data/DoingLogShow.html");
    }
}





?>