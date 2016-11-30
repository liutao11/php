<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/2/1
 * Time: 17:43
 */
class wk_cc extends worker{
    function GET_FUN(){
        /*$dblink = new cl_gamedbS($this->update_db->get_link(), $this->rd,8, 11);
        $sql="select sAccount from MIR_HUM_INFO LEFT JOIN  GROUP  BY  sAccount";
        $db1=$dblink->query($sql);
        $dblink = new cl_gamedbS($this->update_db->get_link(), $this->rd,8, 12);

        $db2=$dblink->query($sql);
        $ob=[];                        //合集
        $db1_bb=[];
        $jb=[];                        //交集
        foreach($db1 as $vv){
            foreach($vv as $v){
                $ob[]=$v['sAccount'];
                $db1_bb[]=$v['sAccount'];
            }
        }
        foreach($db2 as $vv){
            foreach($vv as $v){
                if(!in_array($v['sAccount'],$ob)){
                    $ob[]=$v['sAccount'];
                }
                if(in_array($v['sAccount'],$db1_bb)){
                    $jb[]=$v['sAccount'];
                }
            }
        }

var_dump(count($ob),json_encode($ob));
        echo "*******************************\n";
        var_dump(count($jb),json_encode($jb));*/

/*        $dblink = new cl_gamedbS($this->update_db->get_link(), $this->rd,8, 11);

        $sql="select sAccount,fromIdm,fromIds from MIR_HUM_SDKID ";
        $aa_aa=[];
        $sss=[];
        $bb1=$dblink->query($sql);
        foreach($bb1 as $vv){
            foreach($vv as $v){
               if(!in_array($v['sAccount'],$aa_aa)){
                   if( $sss[$v['fromIdm'].'_'.$v['fromIds']]){
                       $sss[$v['fromIdm'].'_'.$v['fromIds']]++;
                   }else{
                       $sss[$v['fromIdm'].'_'.$v['fromIds']]=1;
                   }
               }
            }
        }
        $dblink = new cl_gamedbS($this->update_db->get_link(), $this->rd,8, 12);
        $bb1=$dblink->query($sql);
        foreach($bb1 as $vv){
            foreach($vv as $v){
                if(!in_array($v['sAccount'],$aa_aa)){
                    if( $sss[$v['fromIdm'].'_'.$v['fromIds']]){
                        $sss[$v['fromIdm'].'_'.$v['fromIds']]++;
                    }else{
                        $sss[$v['fromIdm'].'_'.$v['fromIds']]=1;
                    }
                }
            }
        }*/

        //"select aa.sAccount,bb.fromIdm from MIR_HUM_IBFO as aa LEFT JOIN MIR_HUM_SDKID as bb on aa.sAccount=bb.sAccount where aa.dCreateDate >= '2016-5-26 00:00:00' and aa.dCreatDate < '2016-5-26 23:59:59' and bb.fromId=7"






        $this->display("test/cc.html");
    }
}


?>