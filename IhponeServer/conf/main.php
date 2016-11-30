<?php
/**
 * Created by PhpStorm.
 * User: liutao
 * Date: 2015/9/21
 * Time: 16:46
 */
$main=array(
    //角色配置
    'roleS'=>array('1'=>"超级管理",'2'=>'平台管理','3'=>"数据",'4'=>"运营","5"=>"客服","6"=>"渠道用户"),
    //cookie 前缀
    'cookieName'=>"IhponeServer_",
    //玩家动作选择
    "PlayerDoing"=>array(
        "0"=>"全部","40"=>"物品消耗",'41'=>"传承","51"=>"玩家属性","52"=>"会员等级变化","53"=>'元宝数据','54'=>'礼卷改变','55'=>'金币变化','56'=>'工会贡献','57'=>'挖宝积分',
        '58'=>'功勋改变','59'=>'等级改变', '60'=>'水晶改变',"61"=>"挖宝获得","62"=>"物品获得","63"=>"物品被叠加","64"=>"存入创库","65"=>"仓库取出","66"=>"建立行会",
        "67"=>"分解行会","68"=>"行会职位改变"
    ),
    "PlayerDoingMessage"=>array(
        "40"=>array("title"=>"物品消耗","message"=>"消耗物品-消费方式,中括号内容是消耗后，改玩家剩余装备数量;"),
        "51"=>array("title"=>"玩家属性","message"=>"经验增加方式-获得经验NPC"),
        "53"=>array("title"=>"元宝数据","message"=>"元宝改变-改变方式,当单次值为负数时,代表消费，当单次值为正数时，代表获得,"),
        "55"=>array("title"=>"金币变化","message"=>"金币改变-金币改变方式,当单次值为负数时,代表消费，当单次值为正数时，代表获得"),
        "56"=>array("title"=>"工会贡献","message"=>"公会贡献值改变-改变方式,当单次值为负数时,代表消费，当单次值为正数时，代表增加"),
        "57"=>array('title'=>"挖宝积分","message"=>"挖宝积分改变-改变方式,当单次值为负数时,代表挖宝商城消费，当单次值为正数时，代表增加"),
        "61"=>array("title"=>"挖宝获得","message"=>"挖宝获得物品-脚本设置"),
        "62"=>array("title"=>"物品获得","message"=>"获得物品名-获得方式"),
    ),
    "ipAddressSend"=>"0",                    //是否远程监测ip地址
    "RunBufferFile"=>"/root/log/IhponeBuffer.json",                      //运行时产出的一些重要数据
    "ExchangeRate"=>10,                     //人民币与元宝数换算
    //渠道id匹配
    "fromInfo"=>array(
        'yj'=>array("fromInfoId"=>1,"fromInfoName"=>"易接"),
        'uc'=>array("fromInfoId"=>2,"fromInfoName"=>"UC"),
        'xm'=>array("fromInfoId"=>3,"fromInfoName"=>"小米"),
        'yyb'=>array("fromInfoId"=>4,"fromInfoName"=>"应用宝"),
        '360'=>array("fromInfoId"=>5,"fromInfoName"=>"360"),
        'yjIos'=>array("fromInfoId"=>6,"fromInfoName"=>"IOS越狱"),
        "wanke"=>array("fromInfoId"=>7,"fromInfoName"=>'玩客'),
        "yiwan"=>array("fromInfoId"=>10,"fromInfoName"=>'益玩')
    ),
    "defaultMaxScore"=>10,                                                  //默认监控禁言级别
)
?>