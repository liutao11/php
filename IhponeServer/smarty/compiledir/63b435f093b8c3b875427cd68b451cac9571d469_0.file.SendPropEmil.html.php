<?php /* Smarty version 3.1.28-dev/54, created on 2016-07-28 17:06:09
         compiled from "/mnt/hgfs/linux/IhponeServer/views/Operators/SendPropEmil.html" */ ?>
<?php
/*%%SmartyHeaderCode:150762505799cb015f5516_78378571%%*/
$_valid = $_smarty_tpl->decodeProperties(array (
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/54',
  'unifunc' => 'content_5799cb01720b19_72105717',
  'file_dependency' => 
  array (
    '63b435f093b8c3b875427cd68b451cac9571d469' => 
    array (
      0 => '/mnt/hgfs/linux/IhponeServer/views/Operators/SendPropEmil.html',
      1 => 1463563526,
      2 => 'file',
    ),
    'ba8622e0524d5bd58d6704a76aae2039b67917da' => 
    array (
      0 => '/mnt/hgfs/linux/IhponeServer/views/Admin/index.html',
      1 => 1469694608,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Admin/index.html' => 1,
  ),
  'isChild' => true,
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5799cb01720b19_72105717')) {
function content_5799cb01720b19_72105717 ($_smarty_tpl) {
ob_start();
$_smarty_tpl->compiled->nocache_hash = '150762505799cb015f5516_78378571';
?>

<?php 
$_smarty_tpl->_Block->registerBlock($_smarty_tpl, array('caching' => false, 'function' => 'block_function_bbb_7459441975799cb0169a996_08326824', 'name' => 'bbb'));
ob_end_clean();
/*  Call merged included template "Admin/index.html" */
$_smarty_tpl->_Inline->renderInline($_smarty_tpl, 'Admin/index.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 1, false, false, 'content_5799cb016acc37_75848252', 'ba8622e0524d5bd58d6704a76aae2039b67917da');
/*  End of included template "Admin/index.html" */
}
}
?><?php
/*%%SmartyHeaderCode:150762505799cb015f5516_78378571%%*/
/* file:Admin/index.html */
if ($_valid && !is_callable('content_5799cb016acc37_75848252')) {
function content_5799cb016acc37_75848252 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->compiled->nocache_hash = '150762505799cb015f5516_78378571';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>后台管理系统</title>
    <?php echo '<script'; ?>
 src="/views/js/jquery-1.7.2.min.js"><?php echo '</script'; ?>
>
    <meta http-equiv=Content-Type content="text/html;charset=utf-8">
    <style>
        *{padding: 0;margin: 0;color:#616161;font-size: 14px;}
        img{border: none}
        a{text-decoration: none}
        .list_m{display: none;background: #FFFFFF}
        .indexCenter{width: 100%;margin-top: 20px;}
        .left{float: left;width: 200px;background:#FAFAFA;box-shadow: 0 4px 5px rgba(0, 0, 0, 0.15);border: 1px solid #DEDEDE;margin-top: 10px;border-radius: 8px;margin-left: 10px;}
        .right{float: left;width: 1160px;margin-left: 40px;}
        .list_x{background: #FAFAFA;height: 40px;line-height: 40px;text-align: center;font-size: 15px;font-weight:600;border-bottom: 1px solid #cccccc; }
        .list_x:hover{background:#c8e5f6 }
        .head{background: #438EB9;height: 50px;position: relative;box-shadow: 0 4px 5px #438EB9;}

        .list_m_list{font-size: 10px;line-height: 30px;background:#FAFAFA;padding-left: 30px;width: 168px; background: url("/views/img/cc.png") repeat-y}
        .list_m_list a{font-size: 12px;}
        .tt_a{display:block;float: left}
        .title{font-size: 14px;color: #438EB9;margin: 10px 40px 0 0;height: 35px;line-height: 35px;background:#FAFAFA ;border: 1px solid #DEDEDE;border-radius: 6px;padding-left: 10px;}
        .ttright{float: right;width: 150px;position: relative}
        .user_list{position: absolute;top: 50px;box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);display: none;right: 30px;}
        .user_list_list{background: #ffffff;line-height: 30px;text-align: center;font-size: 14px;width: 150px;border-radius: 0 0 4px 4px;}
        .user_list_list_div{height: 30px;line-height: 30px;border-radius: 0 0 4px 4px;}
		
        .user_list_list_div a{font-size: 12px;}

        .question_title{color:#438EB9;font-size: 16px;font-weight: 600 }
        .question_tt{color:#438EB9;font-weight: 600;font-size: 14px;margin-top: 5px;background: #F6F6F6;line-height: 30px;height: 30px; }
        .question_cention{font-size: 13px;line-height: 30px;text-indent: 2em}
        .icon{width:20px;height: 20px;background: url("/views/img/tubiao.png") -15px -15px;float: left;margin: 12px 0 0 8px;}
        .icon0{width:20px;height: 20px;background: url("/views/img/tubiao.png") -166px 0;float: left;margin: 12px 0 0 8px;}
        .icon1{width:20px;height: 20px;background: url("/views/img/tubiao.png") -208px 0;float: left;margin: 12px 0 0 8px;}
        .icon2{width:20px;height: 20px;background: url("/views/img/tubiao.png") -250px -75px;float: left;margin: 12px 0 0 8px;}
        .icon3{width:20px;height: 20px;background: url("/views/img/tubiao.png") -250px -113px;float: left;margin: 12px 0 0 8px;}
        .icon4{width:20px;height: 20px;background: url("/views/img/tubiao.png") -165px -190px;float: left;margin: 12px 0 0 8px;}
        .icon5{width:20px;height: 20px;background: url("/views/img/tubiao.png") -290px -112px;float: left;margin: 12px 0 0 8px;}
        .icon_add{width:20px;height: 20px;background: url("/views/img/tubiao.png") -206px -150px;float: left;margin-top: 5px;}
        .page{height: 30px;width: 150px;border-radius: 6px;float: left;background: #ffffff;line-height: 30px; text-align: center;margin: 10px;cursor: pointer}
		.page_left{height: 30px;line-height: 30px;float: left;width: 120px;text-align: center}
        .page_select{width: 150px;position: absolute;top: 42px;left: 191px;z-index: 100;background: #ffffff;border: 1px solid #aaaaaa;border-radius:0 0 3px 3px;border-top:none;box-shadow: 0 4px 5px rgba(0, 0, 0, 0.15);display: none}
        .page_select_list{line-height: 30px;height: 30px;padding-left:10px; cursor:pointer;font-size: 12px;}
        .page_select_list:hover{color:#438EB9;background:#c8e5f6}
        .page_select_list_x{line-height: 30px;height: 30px;padding-left:10px; }
        .title_index_center{background:#FAFAFA ;border: 1px solid #DEDEDE;border-radius: 8px;margin-top: 40px;margin-right: 40px;padding: 80px 60px;}
        .title_index_center p{font-size: 18px;  font-weight: 200;  line-height: 27px;  color: inherit;}
        .title_index_yh{font-size: 60px;line-height: 1.6em;font-weight: bold}
        .list_m_title{height: 30px;line-height: 30px;color:#8d8c8c;cursor: pointer}
		.list_m_title:hover{background:#dbf8dc}
        .list_m_select{clear: both;display: none}
        .list_icon{height:15px;width: 15px;background: url("/views/img/iconC.png") -168px 0;float: left;margin:7px 10px 0 5px;}
        .list_icon1{height:15px;width: 15px;background: url("/views/img/iconC.png") -457px -143px no-repeat;float: left;margin:7px 10px 0 5px;}
        .list_icon2{height:15px;width: 15px;background: url("/views/img/iconC.png") -219px -119px;float: left;margin:7px 10px 0 5px;}
        .list_icon3{height:15px;width: 15px;background: url("/views/img/iconC.png") -313px -23px;float: left;margin:7px 10px 0 5px;}
        .list_icon4{height:15px;width: 15px;background: url("/views/img/iconC.png") -361px -119px;float: left;margin:7px 10px 0 5px;}
        .list_icon5{height:15px;width: 15px;background: url("/views/img/iconC.png") -241px 0;float: left;margin:7px 10px 0 5px;}
        .list_icon6{height:15px;width: 15px;background: url("/views/img/iconC.png") -24px -144px;float: left;margin:7px 10px 0 5px;}
        .list_icon7{height:15px;width: 15px;background: url("/views/img/iconC.png") -73px -144px;float: left;margin:7px 10px 0 5px;}
        .list_icon8{height:15px;width: 15px;background: url("/views/img/iconC.png") -360px -23px;float: left;margin:7px 10px 0 5px;}
        .list_icon9{height:15px;width: 15px;background: url("/views/img/iconC.png") -217px -95px;float: left;margin:7px 10px 0 5px;}
        .list_icon10{height:15px;width: 15px;background: url("/views/img/iconC.png") -22px -122px;float: left;margin:7px 10px 0 5px;}
        .key_icon{height:15px;width: 15px;background: url("/views/img/iconC.png") -48px -120px;float: left;margin:7px 10px 0 5px;}
        .exit_icon{height:15px;width: 15px;background: url("/views/img/iconC.png") -217px -95px;float: left;margin:7px 10px 0 5px;}
        a:hover{color:#438EB9;font-weight: 600}
        .list_x_tt{float: left;text-align: center;width: 140px;font-size: 15px;cursor: pointer}
        .foot{height: 75px;clear: both;width: 100%;padding-top: 20px;}
        .foot_center{box-shadow: 4px 0 5px rgba(0, 0, 0, 0.15);height: 75px;padding: 10px 0 0 50px;font-size: 12px; color:rgba(0, 0, 0, 0.15)}
        .tt_right{float: right;margin-top: 10px;width: 150px;border-radius: 6px;background: #ffffff;height: 30px;margin-right: 30px;cursor: pointer}
        .ren_icon{height:15px;width: 15px;background: url("/views/img/iconC.png") -168px 0;float: left;margin:7px 10px 0 5px;}
        .tt_right_tt{float: left;font-size: 12px;line-height: 30px;}
        .select_icon{float: right;width: 20px;height: 30px;border-radius: 0 6px 6px 0;background: url("/views/img/select2.png") no-repeat #DEDEDE;}
        select,input{border: 1px solid #cccccc}
    </style>
</head>
<body>
    <div class="head">
        <a href="#" class="tt_a"><img src="/views/img/Admin_logo.png"></a>
        <div class="page"><div class="page_left"><?php echo $_smarty_tpl->tpl_vars['objectName']->value;?>
</div><div class="select_icon"></div></div>
        <div class="page_select">
            <div values="0" class="page_select_list">高级管理</div>
            <div values="0" class="page_select_list_x">选择平台</div>
            <?php
$_from = $_smarty_tpl->tpl_vars['objectS']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_vv_0_saved_item = isset($_smarty_tpl->tpl_vars['vv']) ? $_smarty_tpl->tpl_vars['vv'] : false;
$__foreach_vv_0_saved_key = isset($_smarty_tpl->tpl_vars['kk']) ? $_smarty_tpl->tpl_vars['kk'] : false;
$_smarty_tpl->tpl_vars['vv'] = new Smarty_Variable();
$__foreach_vv_0_total = $_smarty_tpl->_count($_from);
if ($__foreach_vv_0_total) {
$_smarty_tpl->tpl_vars['kk'] = new Smarty_Variable();
foreach ($_from as $_smarty_tpl->tpl_vars['kk']->value => $_smarty_tpl->tpl_vars['vv']->value) {
$__foreach_vv_0_saved_local_item = $_smarty_tpl->tpl_vars['vv'];
?>
            <div values="<?php echo $_smarty_tpl->tpl_vars['vv']->value['id'];?>
"  class="page_select_list" style="margin-left: 10px;"><?php echo $_smarty_tpl->tpl_vars['vv']->value['title'];?>
</div>
            <?php
$_smarty_tpl->tpl_vars['vv'] = $__foreach_vv_0_saved_local_item;
}
}
if ($__foreach_vv_0_saved_item) {
$_smarty_tpl->tpl_vars['vv'] = $__foreach_vv_0_saved_item;
}
if ($__foreach_vv_0_saved_key) {
$_smarty_tpl->tpl_vars['kk'] = $__foreach_vv_0_saved_key;
}
?>
        </div>
        <div class="ttright">
            <div class="tt_right">
                <div class="ren_icon"></div>
                <div class="tt_right_tt"><?php echo $_smarty_tpl->tpl_vars['userName']->value;?>
,欢迎光临</div>
                <div class="select_icon"></div>
            </div>
            <div class="user_list">
                <div class="user_list_list">
                    <div  class="user_list_list_div"><div class="key_icon"></div><a href="/changePassword/">修改密码</a></div>
                    <div  class="user_list_list_div"><div class="exit_icon"></div><a href="/exit/">退出</a></div>
                </div>
            </div>
        </div>
    </div>
    <div class="indexCenter">
        <div class="left">
            <?php if ($_smarty_tpl->tpl_vars['pageType']->value == 1) {?>
                <div class="list_x" style="border-radius: 8px 8px 0 0;">
                    <div class="icon0"></div>
                    <div class="list_x_tt">首 页</div>
                </div>
                <div class="list_m"  <?php if ($_smarty_tpl->tpl_vars['xx']->value == 'a1') {?>style="display: block "<?php }?>>
                    <div class="list_m_title"><div class='list_icon1'></div>首页</div>
                    <div class="list_m_select" <?php if ($_smarty_tpl->tpl_vars['zz']->value == 'a1') {?>style="display: block "<?php }?>>
                        <div class="list_m_list" ><a href="/index/?xx=a1&zz=a1&yy=1" >首页</a></div>
                    </div>
                    <div class="list_m_title"><div class='list_icon'></div>全平台运营报表</div>
                    <div class="list_m_select" <?php if ($_smarty_tpl->tpl_vars['zz']->value == 'a2') {?>style="display: block "<?php }?>>
                       <div class="list_m_list" ><a href="/OAllCreateReport/?xx=a1&zz=a2&yy=2" >全平台创建率</a></div>
                       <div class="list_m_list" ><a href="/OAllOnlineReport/?xx=a1&zz=a2&yy=2" >全平台在线</a></div>
                       <div class="list_m_list" ><a href="/OAllPayReport/?xx=a1&zz=a2&yy=2" >全平台充值</a></div>
					</div>
                </div>
                <?php if ($_smarty_tpl->tpl_vars['groundId']->value == 1) {?>
                    <div class="list_x">
                        <div class="icon4"></div>
                        <div class="list_x_tt">系 统</div>
                    </div>
                    <div class="list_m" <?php if ($_smarty_tpl->tpl_vars['xx']->value == 'a2') {?>style="display: block "<?php }?>>
                        <div class="list_m_title"><div class='list_icon9'></div>用户</div>
                        <div class="list_m_select" <?php if ($_smarty_tpl->tpl_vars['zz']->value == 'a3') {?>style="display: block "<?php }?>>
                            <div class="list_m_list" ><a href="/UserSet/?xx=a2&zz=a3&yy=2" >用户管理</a></div>
                            <div class="list_m_list"><a href="/DoingLogShow/?xx=a2&zz=a3&yy=4">操作日志</a></div>
                        </div>
                    </div>
                    <div class="list_x">
                        <div class="icon1"></div>
                        <div class="list_x_tt">运 维</div>
                    </div>
                    <div class="list_m" <?php if ($_smarty_tpl->tpl_vars['xx']->value == 'a3') {?>style="display: block "<?php }?>>
                        <div class="list_m_title"><div class='list_icon'></div>平台</div>
                        <div class="list_m_select" <?php if ($_smarty_tpl->tpl_vars['zz']->value == 'a4') {?>style="display: block "<?php }?>>
                            <div class="list_m_list" ><a href="/ObjectSet/?xx=a3&zz=a4&yy=1" >平台管理</a></div>
                        </div>
                        <div class="list_m_title"><div class='list_icon1'></div>服区管理</div>
                        <div class="list_m_select" <?php if ($_smarty_tpl->tpl_vars['zz']->value == 'a5') {?>style="display: block "<?php }?>>
                            <div class="list_m_list"><a href="/GameServer/?xx=a3&zz=a5&yy=5" >服区</a></div>
                            <div class="list_m_list"><a href="/MergeGameServer/?xx=a3&zz=a5&yy=6" >合并服区</a></div>
                            <div class="list_m_list"><a href="/ResourceServer/?xx=a3&zz=a5&yy=3">资源服务管理</a></div>
                        </div>
                    </div>
                    <div class="list_x">
                        <div class="icon5"></div>
                        <div class="list_x_tt">运 营</div>
                    </div>
                    <div class="list_m" <?php if ($_smarty_tpl->tpl_vars['xx']->value == 'a4') {?>style="display: block "<?php }?>>
                        <div class="list_m_title"><div class='list_icon3'></div>元宝申请审核</div>
                        <div class="list_m_select" <?php if ($_smarty_tpl->tpl_vars['zz']->value == 'a6') {?>style="display: block "<?php }?>>
                            <div class="list_m_list" ><a href="/AcreInspect/?xx=a4&zz=a6&yy=1" >元宝申请审核</a></div>
                        </div>
                    </div>
                <?php }?>
            <?php } else { ?>
                <div class="list_x" style="border-radius: 8px 8px 0 0;">
                    <div class="icon0"></div>
                    <div class="list_x_tt">首 页</div>
                </div>
                <div class="list_m"  <?php if ($_smarty_tpl->tpl_vars['xx']->value == 'b1') {?>style="display: block "<?php }?>>
                    <div class="list_m_title"><div class='list_icon'></div>首页</div>
                    <div class="list_m_select" <?php if ($_smarty_tpl->tpl_vars['zz']->value == 'a7') {?>style="display: block "<?php }?>>
                       <div class="list_m_list" ><a href="/indexPage/?xx=b1&zz=a7&yy=0" >平台首页</a></div>
                    </div>
                </div>
                <?php if ($_smarty_tpl->tpl_vars['groundId']->value == 1 || $_smarty_tpl->tpl_vars['groundId']->value == 2 || $_smarty_tpl->tpl_vars['groundId']->value == 3) {?>
                    <div class="list_x">
                        <div class="icon1"></div>
                        <div class="list_x_tt">数 据</div>
                    </div>
                    <div class="list_m" <?php if ($_smarty_tpl->tpl_vars['xx']->value == 'b2') {?>style="display: block "<?php }?>>
                        <div class="list_m_title"><div class='list_icon1'></div>创建率数据</div>
                        <div class="list_m_select" <?php if ($_smarty_tpl->tpl_vars['zz']->value == 'a8') {?>style="display: block "<?php }?>>
                            <div class="list_m_list" ><a href="/DayReport/?xx=b2&zz=a8&yy=1" >创建率分日报表</a></div>
                            <div class="list_m_list" ><a href="/HoursReport/?xx=b2&zz=a8&yy=2">创建率分时报表</a></div>
                            <div class="list_m_list" ><a href="/DfromReport/?xx=b2&zz=a8&yy=2">渠道统计</a></div>
                            <div class="list_m_list" ><a href="/DGoldReport/?xx=b2&zz=a8&yy=2">金币统计</a></div>
                            <div class="list_m_list" ><a href="/DUserInfoReport/?xx=b2&zz=a8&yy=2">玩家数据统计</a></div>
                            <div class="list_m_list" ><a href="/DUserDistribu/?xx=b2&zz=a8&yy=2">玩家信息排序</a></div>
                        </div>
                        <div class="list_m_title"><div class='list_icon2'></div>在线数据</div>
                        <div class="list_m_select" <?php if ($_smarty_tpl->tpl_vars['zz']->value == 'a9') {?>style="display: block "<?php }?>>
                           <div class="list_m_list" ><a href="/RealTime/?xx=b2&zz=a9&yy=3">实时监控</a></div>
                           <div class="list_m_list" ><a href="/OnlineImg/?xx=b2&zz=a9&yy=4">在线数据图表</a></div>
                        </div>
                        <div class="list_m_title"><div class='list_icon3'></div>活跃数据</div>
                        <div class="list_m_select" <?php if ($_smarty_tpl->tpl_vars['zz']->value == 'a10') {?>style="display: block "<?php }?>>
                            <div class="list_m_list" ><a href="/LevelCount/?xx=b2&zz=a10&yy=5">等级流失统计</a></div>
                            <div class="list_m_list" ><a href="/ActiveUsers/?xx=b2&zz=a10&yy=6" >登录活跃统计</a></div>
                            <div class="list_m_list" ><a href="/UserRetention/?xx=b2&zz=a10&yy=6">留存率</a></div>
                        </div>
                        <div class="list_m_title"><div class='list_icon4'></div>充值数据</div>
                        <div class="list_m_select" <?php if ($_smarty_tpl->tpl_vars['zz']->value == 'a11') {?>style="display: block "<?php }?>>
                            <div class="list_m_list" ><a href="/PayList/?xx=b2&zz=a11&yy=7">订单列表</a></div>
                            <div class="list_m_list" ><a href="/PayDayReport/?xx=b2&zz=a11&yy=8">充值分日报表</a></div>
                            <div class="list_m_list" ><a href="/PayHoursReport/?xx=b2&zz=a11&yy=9" >充值分时报表</a></div>
                            <div class="list_m_list" ><a href="/PaySumAnalyse/?xx=b2&zz=a11&yy=10" >总计额度分析</a></div>
                            <div class="list_m_list" ><a href="/TimesPayAnalyse/?xx=b2&zz=a11&yy=11">单笔额度分析</a></div>
                            <div class="list_m_list" ><a href="/FirstPayAnalyse/?xx=b2&zz=a11&yy=12">首笔额度分析</a></div>
                            <div class="list_m_list" ><a href="/FirstPayLevel/?xx=b2&zz=a11&yy=12" >首笔等级分析</a></div>
                            <div class="list_m_list" ><a href="/PayTimeAnalysis/?xx=b2&zz=a11&yy=13" >充值次数分析</a></div>
                            <div class="list_m_list" ><a href="/PayRanking/?xx=b2&zz=a11&yy=14">玩家充值排行</a></div>
                            <div class="list_m_list" ><a href="/ConsumeRanking/?xx=b2&zz=a11&yy=15" >玩家消费元宝排行</a></div>
                            <div class="list_m_list" ><a href="/ConsumeAnalysis/?xx=b2&zz=a11&yy=16" >游戏日志分析</a></div>
                        </div>
                        <div class="list_m_title"><div class='list_icon5'></div>全服区报表</div>
                        <div class="list_m_select" <?php if ($_smarty_tpl->tpl_vars['zz']->value == 'a12') {?>style="display: block "<?php }?>>
                            <div class="list_m_list" ><a href="/AllNewReport/?xx=b2&zz=a12&yy=14">全服运营创建报表</a></div>
                            <div class="list_m_list" ><a href="/AllOnlineReport/?xx=b2&zz=a12&yy=15" >全服运营在线人数表</a></div>
                            <div class="list_m_list" ><a href="/AllPayReport/?xx=b2&zz=a12&yy=16" >全服运营充值表</a></div>
                            <div class="list_m_list" ><a href="/AllUserLeave/?xx=b2&zz=a12&yy=17" >全服运营留存表</a></div>
                            <div class="list_m_list" ><a href="/AllNewMacAnalysis/?xx=b2&zz=a12&yy=18" >全服新进入MAC报表</a></div>
                        </div>
                    </div>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['groundId']->value == 1 || $_smarty_tpl->tpl_vars['groundId']->value == 2 || $_smarty_tpl->tpl_vars['groundId']->value == 4) {?>
                    <div class="list_x">
                        <div class="icon2"></div>
                        <div class="list_x_tt">运 维</div>
                    </div>
                    <div class="list_m" <?php if ($_smarty_tpl->tpl_vars['xx']->value == 'b4') {?>style="display: block "<?php }?>>
                        <div class="list_m_title"><div class='list_icon6'></div>公告</div>
                        <div class="list_m_select" <?php if ($_smarty_tpl->tpl_vars['zz']->value == 'a13') {?>style="display: block "<?php }?>>
	                        <div class="list_m_list" ><a href="/NoticeList/?xx=b4&zz=a13&yy=1" >公告列表</a></div>
	                        <div class="list_m_list" ><a href="/NoticeAdd/?xx=b4&zz=a13&yy=2" >发布公告</a></div>
                        </div>
                        <div class="list_m_title"><div class='list_icon7'></div>元宝申请</div>
                        <div class="list_m_select" <?php if ($_smarty_tpl->tpl_vars['zz']->value == 'a14') {?>style="display: block "<?php }?>>
                            <div class="list_m_list" ><a href="/AcerApplyList/?xx=b4&zz=a14&yy=3" >元宝申请记录</a></div>
                            <div class="list_m_list" ><a href="/AcerApply/?xx=b4&zz=a14&yy=4">申请元宝</a></div>
                            <div class="list_m_list" ><a href="/OVirtualPayList/?xx=a4&zz=a6&yy=1" >虚假充值生成</a></div>
                        </div>
                        <div class="list_m_title"><div class='list_icon10'></div>道具补发邮件</div>
                        <div class="list_m_select" <?php if ($_smarty_tpl->tpl_vars['zz']->value == 'a15') {?>style="display: block "<?php }?>>
                            <div class="list_m_list" ><a href="/SendPropEmil/?xx=b4&zz=a15&yy=3" >发送道具邮件</a></div>
                            <div class="list_m_list" ><a href="/SendObjectPropEmil/?xx=b4&zz=a15&yy=3" >范围道具邮件发送</a></div>
                            <div class="list_m_list" ><a href="/OPropEmilList/?xx=b4&zz=a15&yy=3" >道具邮件列表</a></div>
                        </div>
                    </div>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['groundId']->value == 1 || $_smarty_tpl->tpl_vars['groundId']->value == 2 || $_smarty_tpl->tpl_vars['groundId']->value == 5) {?>
                    <div class="list_x">
                        <div class="icon3"></div>
                        <div class="list_x_tt">客 服</div>
                    </div>
                    <div class="list_m" <?php if ($_smarty_tpl->tpl_vars['xx']->value == 'b5') {?>style="display: block "<?php }?>>
                        <div class="list_m_title"><div class='list_icon'></div>玩家</div>
                        <div class="list_m_select" <?php if ($_smarty_tpl->tpl_vars['zz']->value == 'a16') {?>style="display: block "<?php }?>>
                            <div class="list_m_list" ><a href="/UserRoleList/?xx=b5&zz=a16&yy=1" >角色列表</a></div>
                            <div class="list_m_list" ><a href="/UserDoingLog/?xx=b5&zz=a16&yy=2">动作记录</a></div>
                            <div class="list_m_list" ><a href="/UserLoginLog/?xx=b5&zz=a16&yy=3">登录记录</a></div>
                        </div>

<!--                        <div class="list_m_title"><div class='list_icon8'></div>禁言</div>
                        <div class="list_m_select" <?php if ($_smarty_tpl->tpl_vars['zz']->value == 'a17') {?>style="display: block "<?php }?>>
                        <div class="list_m_list" ><a href="/GagListSet/?xx=b5&zz=a17&yy=6">禁言管理</a></div>
                        <div class="list_m_list" ><a href="/AddGag/?xx=b5&zz=a17&yy=7">禁言</a></div>
                        </div>-->
<!--                        <div class="list_m_title"><div class='list_icon9'></div>封禁帐号</div>
                        <div class="list_m_select" <?php if ($_smarty_tpl->tpl_vars['zz']->value == 'a18') {?>style="display: block "<?php }?>>
                           <div class="list_m_list" ><a href="/BanNumberSet/?xx=b5&yy=6">封号管理</a></div>                        
						   <div class="list_m_list" ><a href="/AddBanNumber/?xx=b5&yy=7">封号</a></div>
						</div>-->
                        <div class="list_m_title"><div class='list_icon10'></div>玩家查询</div>
                        <div class="list_m_select" <?php if ($_smarty_tpl->tpl_vars['zz']->value == 'a19') {?>style="display: block "<?php }?>>
                             <div class="list_m_list" ><a href="/ServiceSelectUserInfo/?xx=b5&zz=a19&yy=1">玩家信息查询</a></div>
                             <div class="list_m_list" ><a href="/SUerPaySelect/?xx=b5&zz=a19&yy=2">玩家充值查询</a></div>
                        </div>
                        <div class="list_m_title"><div class='list_icon10'></div>对玩家控制</div>
                        <div class="list_m_select" <?php if ($_smarty_tpl->tpl_vars['zz']->value == 'a20') {?>style="display: block "<?php }?>>
                            <div class="list_m_list" ><a href="/SUserOffline/?xx=b5&zz=a20&yy=1">踢人、禁言、封号</a></div>
                            <div class="list_m_list" ><a href="/SUserControlLog/?xx=b5&zz=a20&yy=2">控制日志</a></div>
                            <div class="list_m_list" ><a href="/STalkManageSet/?xx=b5&zz=a20&yy=3">玩家聊天监控</a></div>
                        </div>
                    </div>
                <?php }?>
            <?php }?>
        </div>
        <div class="right">
            <?php 
$_smarty_tpl->_Block->callBlock($_smarty_tpl, array('caching' => false, 'function' => 'block_function_bbb_4988359825799cb0170ac66_30581445', 'name' => 'bbb'));
?>

        </div>
    </div>
    <div class="foot">
        <div class="foot_center">
            © 2016  版权所有    IE 及其外壳浏览器请使用 IE9 或以上版本的内核
        </div>
    </div>
<?php echo '<script'; ?>
>
    $(function (){
        var window_x=$(window).width();
        var window_y=$(window).height();

        if(window_x>=1900) {
            $(".right").css({
                "width": (window_x - 280) + "px"
            });
        }else{
            $(".indexCenter").css({"width": "1920px"});
            $(".right").css({"width": "1640px"});
        }
        if((window_y-35)<800){
            $(".left").css({"height": "850px"});
        }else {
            $(".left").css({"height": (window_y - 35) + "px"});
        }

        list_x_index=-1;
        $(".list_x").each(function (index){
            $(this).click(function(){
                if(index ==list_x_index){
                    $(".list_m").hide();
                    list_x_index=-1;
                    $(".list_x").css({"color": "#616161", "borderTop": "none"});
                }else {
                    $(".list_x").css({"color": "#616161", "borderTop": "none"});
                    $(".list_x:eq(" + index + ")").css({"color": "#438EB9"});
                    $(".list_m").hide();
                    $(".list_m:eq(" + index + ")").show();
                    list_x_index=index;
                }
            })
        });
        tt_rightState=1;
        $(".tt_right").click(function(){
            if(tt_rightState==1) {
                $(".user_list").show();
                tt_rightState=2;
            }else{
                $(".user_list").hide();
                tt_rightState=1;
            }
        });
        pageState=1;
        $(".page").click(function(){
            if(pageState==1) {
                $(".page_select").show();
                pageState=2;
            }else{
                $(".page_select").hide();
                pageState=1;
            }
        });
        $(".page_select_list").each(function(index){
            $(this).click(function(){
                var values=$(this).attr('values');
                $.get('/PageGet/',{"values":values,'doingunid':new Date().getTime()},function(data){
                    var obj = jQuery.parseJSON(data);
                    if(obj.status!=2000){
                        alert(obj.message)
                    }else{
                        location.href="/index/?xx=0&yy=0&zz=0";
                    }
                })
            })
		});
		 var selectShowInt=-1;
        $(".list_m_title").each(function(index){
            $(this).click(function(){
                if(selectShowInt==index) {
                    $(".list_m_select").eq(index).hide();
                    selectShowInt=-1;
                }else{
                    $(".list_m_select").hide();
                    $(".list_m_select").eq(index).show();
                    selectShowInt=index;
                }
            })
        })
    })
<?php echo '</script'; ?>
>
</body>
</html><?php
/*/%%SmartyNocache:150762505799cb015f5516_78378571%%*/
}
}
?><?php
/* block_function_bbb_7459441975799cb0169a996_08326824  file:Operators/SendPropEmil.html */
if (!function_exists('block_function_bbb_7459441975799cb0169a996_08326824')) {
function block_function_bbb_7459441975799cb0169a996_08326824($_smarty_tpl, $block) {?>
<style>
    .page_title{font-size: 14px;color: #438EB9;margin: 10px 0 0 0;height: 35px;line-height: 35px;background:#FAFAFA ;border: 1px solid #DEDEDE;border-radius: 6px;padding-left: 10px;}
    .page_title span{font-size: 18px;color: #438EB9;padding-left: 10px;height: 40px;line-height: 40px;font-weight: bold}
    .ReportData{box-shadow: 0 4px 5px rgba(0, 0, 0, 0.15);border: 1px solid #DEDEDE;border-radius: 5px;}
    .showList{clear: both;height: 32px;margin-top: 10px;}
    .showList_s{clear: both;height: 32px;margin-top: 10px;}
    .showList_name{float: left;height: 30px;line-height: 30px;font-size: 12px;;text-align: right;width: 150px;}
    .showList_message{float: left;height: 30px;width: 500px;line-height: 30px;}
    .showList_message span {color: #DEDEDE;font-size: 12px;line-height: 30px;height: 30px;}
    .showList_message_select{float: left;width: 120px;line-height: 30px;height: 30px;text-align: center;font-size: 12px;background:#438EB9;color: #ffffff;border-radius: 4px;margin-right: 10px;cursor: pointer }
    .showList select{display: block;float: left;height: 30px;line-height: 30px;font-size: 12px;width: 150px;}
    .showList span{display: block;float: left;height: 30px;line-height: 30px;font-size: 12px;width: 150px;}
    .showList_s span{display: block;float: left;height: 30px;line-height: 30px;font-size: 12px;width: 150px;}
    .showList input{height: 30px;line-height: 30px;display: block;float: left;width: 300px;border: 1px solid #cccccc;font-size: 14px;}
    .showList_s input{height: 30px;line-height: 30px;display: block;float: left;width: 300px;border: 1px solid #cccccc;font-size: 14px;}
    .showList textarea{line-height: 30px;height: 90px;display: block;float: left;width: 700px;}
    .showList_submit{width: 120px;height: 30px;line-height: 30px;font-size: 14px;text-align: center;background: #438EB9;cursor: pointer;color: #ffffff;font-weight: 600}
    .container_tt{height: 40px;line-height: 40px;font-size: 16px;background: transparent linear-gradient(to bottom, rgba(255, 255, 255, 0) 0%, rgba(0, 0, 0, 0.1) 100%) repeat scroll 0% 0%}
    .iconC1{width: 20px;height: 20px;background: url("/views/img/iconC.png") 0 0;float: left;margin: 12px 10px auto 10px;}
    .roleS{display: block;float: left}
    .userTest{width: 120px;height: 32px;border-radius: 4px;text-align: center;background:#438EB9;cursor: pointer;float: left;line-height: 32px;color: #ffffff;margin-left: 10px;}
    .addPropList{width: 120px;height: 32px;border-radius: 4px;text-align: center;background:#438EB9;cursor: pointer;float: left;line-height: 32px;color: #ffffff;margin-left: 10px;}
    .addPropList_in_select{position: absolute;width: 180px;height: 200px;top: 35px;left: 300px;box-shadow: 0 4px 5px rgba(0, 0, 0, 0.15);border: 1px solid #DEDEDE;border-radius: 5px;background: #DEDEDE;display: none;overflow-y: scroll;overflow-x: hidden}
    .addPropList_in_select_list{padding-left: 10px;font-size: 12px;line-height: 22px;height: 22px;}
    .addPropList_in_select_list:hover{background: #ffffff}
    .addPropListSelectList{width: 200px;height: 30px;background:  #438EB9 ;border-radius: 4px;float: left;margin-right: 10px;margin-bottom: 10px;}
    .addPropListSelectList span{display: block;float: left;text-align: center;width: 120px;font-size: 12px;line-height: 30px;height: 30px}
    .addPropListSelectList input{display: block;float: left;height: 20px;line-height: 20px;width:40px;border-radius: 4px;background: #ffffff;margin-top: 4px;}
    .addPropListSelectListDel{float: left;margin: 4px 0 0 5px;;width: 20px;height: 20px;border-radius: 4px;cursor: pointer;background: url("/views/img/select2.png") -43px 5px no-repeat #ffffff;border: 1px solid #DEDEDE}
    .searchBut{width: 120px;height: 32px;border-radius: 4px;text-align: center;background:#438EB9;cursor: pointer;float: left;line-height: 32px;color: #ffffff;margin-left: 10px;}
    .serverSelectListTitle{float: left;width: 90px;height: 30px;line-height: 30px;}
    .serverSelectListDel{float: left;margin: 4px 0 0 5px;;width: 20px;height: 20px;border-radius: 4px;cursor: pointer;background: url("/views/img/select2.png") -43px 5px no-repeat #ffffff;border: 1px solid #DEDEDE}
    input[type="radio"]{border: none}
    .shamInput{border: 1px solid #DEDEDE;float: left;height: 28px;width: 150px;line-height: 28px;text-align: center;cursor: pointer}
    .shamInput:hover{background: #DEDEDE}
    .shamInputDown{box-shadow: 0 4px 5px rgba(0, 0, 0, 0.15);border: 1px solid #DEDEDE;background: #ffffff;width: 150px;top: 30px;position: absolute;left: 150px;display: none}
    .shamOption{line-height: 30px;height: 30px;font-size: 12px;padding-left: 10px;}
    .shamOption:hover{background: #c8e5f6}
</style>
<?php echo '<script'; ?>
 src="/views/dataTimeStyle/jquery.datetimepicker.js"><?php echo '</script'; ?>
>
<link rel="stylesheet" href="/views/dataTimeStyle/jquery.datetimepicker.css" type="text/css" />
<div class="page_title"><span><?php echo $_smarty_tpl->tpl_vars['objectName']->value;?>
</span> 平台->运维->道具邮件发送</div>
<div style="padding-top: 10px;">
    <div class="ReportData">
        <div class="container_tt"><div class="iconC1"></div>道具邮件发送</div>
        <div class="showList" style="position: relative">
            <div class="showList_name">服区*：</div>
            <div class="shamInput">--选择服区--</div>
            <div class="shamInputDown">
                <?php
$_from = $_smarty_tpl->tpl_vars['serverS']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_vv_0_saved_item = isset($_smarty_tpl->tpl_vars['vv']) ? $_smarty_tpl->tpl_vars['vv'] : false;
$_smarty_tpl->tpl_vars['vv'] = new Smarty_Variable();
$__foreach_vv_0_total = $_smarty_tpl->_count($_from);
if ($__foreach_vv_0_total) {
foreach ($_from as $_smarty_tpl->tpl_vars['vv']->value) {
$__foreach_vv_0_saved_local_item = $_smarty_tpl->tpl_vars['vv'];
?>
                <div class="shamOption" valueInt="<?php echo $_smarty_tpl->tpl_vars['vv']->value['id'];?>
" ><?php echo $_smarty_tpl->tpl_vars['vv']->value['ServerTitle'];?>
</div>
                <?php
$_smarty_tpl->tpl_vars['vv'] = $__foreach_vv_0_saved_local_item;
}
}
if ($__foreach_vv_0_saved_item) {
$_smarty_tpl->tpl_vars['vv'] = $__foreach_vv_0_saved_item;
}
?>
            </div>



            <!--<select class="serverIndex">
                <option value="0" selected>&#45;&#45;选择服区&#45;&#45;</option>

            </select>-->
        </div>
        <div class="showList">
            <div class="showList_name">已经服区*：</div>
            <div class="showList_message"><span>无</span></div>
        </div>


        <div class="showList_s">
<!--            <div class="showList_name">发送对象*：</div>
            <input type="radio" name="sendType" style="width: 10px;" value="1" class="sendType">
            <span>范围</span>
            <input type="radio" name="sendType" style="width: 10px;" value="2" class="sendType" checked>
            <span>角色</span>-->
        </div>

        <div class="showList">
            <div class="showList_name">角色名*：</div>
            <input type="text" class="roleS" style="width: 700px;">
            <div class="userTest">检测用户</div>
        </div>
        <div class="showList" style="display: none">
<!--            <div class="showList_name">选择范围*：</div>
            <input type="radio" name="userObject" style="width: 10px;" value="1" checked>
            <span>在线用户</span>
            <input type="radio" name="userObject" style="width: 10px;" value="2">
            <span>离线用户</span>
            <input type="radio" name="userObject" style="width: 10px;" value="2">
            <span>全部用户</span>-->
        </div>
        <div class="showList">
            <div class="showList_name"></div>
            <div class="showList_message">以半角 ',' 分隔多个角色名。</div>
        </div>

        <div class="showList">
            <div class="showList_name">是否定时发送*：</div>
            <input type="radio" name="isSetupTime" style="width: 10px;" value="1">
            <span>是</span>
            <input type="radio" name="isSetupTime" style="width: 10px;" value="2" checked>
            <span>否</span>
        </div>
        <div class="showList" style="display: none">
            <div class="showList_name">发送时间*：</div>
            <input type="text" class="setupTime" name="setupTime">
        </div>
        <div class="showList">
            <div class="showList_name">标题*：</div>
            <input type="text" class="message" name="title">
        </div>
        <div class="showList" style="height: 90px;">
            <div class="showList_name">内容*：</div>
            <textarea class="textarea" name="center"></textarea>
        </div>
        <div class="showList" style="position: relative">
            <div class="showList_name">附件*：</div>
            <div class="addPropList" style="margin: 0 10px 0 0">增加附件</div>
            <input type="text" class="addPropList_in" name="title" style="margin-left: 20px;width: 180px;display: none">
            <div class="searchBut" style="margin: 0 10px 0 30px;display: none">搜索</div>
            <div class="addPropList_in_select"></div>
        </div>

        <div class="showList" style="height: 70px">
            <div class="showList_name">已选择附件*：</div>
            <div class="showList_message" style="overflow:hidden;width: 1400px;height: 70px;"></div>
        </div>
        <div class="showList" style="height: 64px;">
            <div class="showList_submit" style="margin: 0 auto">提交</div>
        </div>
    </div>
</div>
</div>
<?php echo '<script'; ?>
>
    showList_submit_status=1;               //是否可以提交
    rolesTesting=0;                          //用户名检测，0 未通过，1 通过
    $(function(){
        addPropList_in_statues=1;
        $(".addPropList").click(function(){
             if(addPropList_in_statues==1){
                 $(".addPropList_in").show();

                 $(".searchBut").show();
                 addPropList_in_statues=2;
             }else{
                 $(".addPropList_in").hide();
                 $(".searchBut").hide();
                 addPropList_in_statues=1;
             }
            $('.addPropList_in_select').hide();
        });
        $(".searchBut").click(function(){
            var values=$('.addPropList_in').val();
            if(values) {
                $.get("/SendPropEmilGet_Buffer/", {"doing": "PropSelect","values": values,'doingunid':new Date().getTime()}, function (data) {
                    var obj = jQuery.parseJSON(data);
                    if (obj.status == 2000) {

                        var showString="";
                        $.each(obj.data, function (index) {
                            showString+='<div serverId="'+obj.data[index].id+'" class="addPropList_in_select_list"  onclick="addPropListSelect('+obj.data[index].id+',\''+obj.data[index].name+'\')">' + obj.data[index].name+'</div>';
                        });
                        $(".addPropList_in_select").show().html(showString);
                    }
                });
            }
        });
        $(".addPropList_in_select_list").each(function(index){
           $(this).click(function(){
               alert(index);
           })
        });
        //选择范围改变
        $(".sendType").each(function(index){
            $(this).click(function(){
                if(index==0){
                    $(".showList").eq(2).hide();
                    $(".showList").eq(3).show();
                }else{
                    $(".showList").eq(3).hide();
                    $(".showList").eq(2).show();
                }
            })
        });

        $('.setupTime').datetimepicker({
            lang:"ch",           //语言选择中文
            format:"Y-m-d H:00:00",      //格式化日期
            timepicker:true,    //关闭时间选项
            yearStart:2000,     //设置最小年份
            yearEnd:2050,        //设置最大年份
            todayButton:false    //关闭选择今天按钮
        });
        var shamInputStatus=1;
        $(".shamInput").click(function(){
            if(shamInputStatus==1){
                $(".shamInputDown").show();
                shamInputStatus=0;
            }else{
                $(".shamInputDown").hide();
                shamInputStatus=1;
            }
        });
        $(".shamOption").each(function(index){
            $(this).click(function(){
                $(".shamInputDown").hide();
                shamInputStatus=1;
                var serverId=$(this).attr('valueInt');
                if(serverId) {
                    $.get("/SendPropEmilGet_Buffer/", {"doing": "serverIdAddOnly", "serverId": serverId,'doingunid':new Date().getTime()}, function (data) {
                        $(".serverIndex").find("option").eq(0).selected;
                        var obj = jQuery.parseJSON(data);
                        if (obj.status == 2000) {
                            var dataLeng=0;
                            var showString="";
                            $.each(obj.data, function (index) {
                                showString+='<div onclick="deleteServer(\''+obj.data[index].id+'\')" serverId="'+obj.data[index].id+'" class="showList_message_select"><div class="serverSelectListTitle">' + obj.data[index].GameServerUnid+'</div><div class="serverSelectListDel"></div></div>';
                                dataLeng++;
                            });
                            $(".showList_message").eq(0).html(showString);
                            if(dataLeng<=1){
                                $(".showList").eq(2).show();
                                $(".showList").eq(3).hide();
                                $(".showList_message").eq(1).html("以半角 ',' 分隔多个角色名。");
                                $(".showList_s").show();
                                $(".sendType").eq(1).attr("checked",true);
                                $(".sendType").eq(0).attr("checked",false);
                                rolesTesting=0;
                            }else{
                                $(".showList").eq(3).show();
                                $(".showList").eq(2).hide();
                                $(".showList_s").hide();
                                rolesTesting=1;

                                $(".sendType").eq(0).attr("checked",true);
                                $(".sendType").eq(1).attr("checked",false);
                                $(".showList_message").eq(1).html("多服务器时，只能选择范围发送。");
                            }
                        }
                    })
                }
            });
        });
        $("input[name='isSetupTime']").each(function(){
            $(this).click(function(){
                var isSetupTimeValue=$(this).val();
                if(isSetupTimeValue==1){
                    $('.showList').eq(6).show();
                }else{
                    $('.showList').eq(6).hide();
                }
            })
        });

        $(".roleS").change(function(){
            $('.userTest').html('检测用户').css({"background": "#438EB9"});
        });

        $(".userTest").click(function(){
            var roleS=$(".roleS").val();
            if(roleS){
                $(this).html('发送中...');
                $(this).css({"background":"#616161"});
                $.get("/SendPropEmilGet_Buffer/",{"doing": "roleSTest", "roleS": roleS,'doingunid':new Date().getTime()},function(data){
                    var obj = jQuery.parseJSON(data);
                    if (obj.status == 2000) {
                        $('.userTest').html('检测用户').css({"background": "#dbf8dc"});
                        rolesTesting=1;
                    }else {
                        alert(obj.message);
                        $('.userTest').html('检测用户').css({"background": "#438EB9"});
                    }
                });
            }else{
                alert("空值不能提交！")
            }
        });
        $(".showList_submit").click(function(){
             if(showList_submit_status==1) {
                 if(rolesTesting) {
                     var roleS = $(".roleS").val();
                     var userObject = $("input[name='userObject']:checked").val();
                     var isSetupTime = $("input[name='isSetupTime']:checked").val();
                     var sendType = $("input[name='sendType']:checked").val();
                     var setupTime=$(".setupTime").val();
                     var title=$("input[name='title']").val();
                     var textarea=$(".textarea").val();
                     if (isSetupTime && title && textarea ) {
                         $(this).html('发送中...');
                         $(this).css({"background": "#616161"});
                         $.get("/SendPropEmilGet/", {"roleS": roleS,"sendType":sendType, "userObject":userObject, "isSetupTime": isSetupTime, "setupTime": setupTime, "title": title, "textarea":textarea,'doingunid':new Date().getTime()}, function (data) {
                             var obj = jQuery.parseJSON(data);
                             if (obj.status != 2000) {
                                 alert(obj.message);
                             } else {
                                 alert(obj.message);
                                 window.location.reload();
                             }
                             $(".showList_submit").html('提交').css({"background": "#438EB9"});
                         });
                     }else{
                         alert("填写完整信息！")
                     }
                 }else{
                     alert("角色名没有通过验证！")
                 }
             }else{
                 alert("请等待服务返回...")
             }
        });
    });
    function deleteServer(serverId){
        $.get("/SendPropEmilGet_Buffer/", {"doing": "serverIdDel", "serverId": serverId,'doingunid':new Date().getTime()}, function (data) {
            var obj = jQuery.parseJSON(data);
            if (obj.status == 2000) {
                var showString="";
                var dataLeng=0;
                $.each(obj.data, function (index) {
                    showString+='<div onclick="deleteServer(\''+obj.data[index].id+'\')" serverId="'+obj.data[index].id+'" class="showList_message_select">' + obj.data[index].GameServerUnid+'</div>';
                    dataLeng++;
                });
                $(".showList_message").eq(0).html(showString);
                if(dataLeng<=1){
                    $(".showList").eq(2).show();
                    $(".showList").eq(3).hide();
                    $(".showList_message").eq(1).html("以半角 ',' 分隔多个角色名。");
                    $(".showList_s").show();
                    $(".sendType").eq(1).attr("checked",true);
                    $(".sendType").eq(0).attr("checked",false);
                }else{
                    $(".showList").eq(3).show();
                    $(".showList").eq(2).hide();
                    $(".sendType").eq(0).attr("checked",true);
                    $(".sendType").eq(1).attr("checked",false);
                    $(".showList_message").eq(1).html("多服务器时，只能选择范围发送。");
                    $(".showList_s").hide();
                }
            }
        });
    }
    function addPropListSelect(id,title){
        $.get("/SendPropEmilGet_Buffer/",{"doing": "AddPropDefault",'PropId':id,'PropNum':'1',"PropName":title,'doingunid':new Date().getTime()},function(data){
            var obj = jQuery.parseJSON(data);
            if(obj.status==2000) {
                var showString="";
                $.each(obj.data, function (index) {
                     showString+="<div class='addPropListSelectList' id=\"addPropListSelectListId" + index + "\"><span>" + obj.data[index].PropName + "</span><input type='text' value='"+obj.data[index].PropNum+"' name='Prop' id=\"addPropListSelectListInputId" + index + "\" onchange='PropNumber(" + index + ")' PropId='" + index + "'><div class=\"addPropListSelectListDel\" onclick=\'addPropListSelectListDel(" + index + ")\'></div></div>";
                });
                $(".showList_message").eq(2).html(showString);
                $(".addPropList_in").hide();

                $(".searchBut").hide();
                $(".addPropList_in_select").hide();
                addPropList_in_statues=1;

               // $(".showList_message").eq(2).append("<div class='addPropListSelectList' id=\"addPropListSelectListId" + id + "\"><span>" + title + "</span><input type='text' value='1' name='Prop' id=\"addPropListSelectListInputId" + id + "\" onchange='PropNumber(" + id + ")' PropId='" + id + "'><div class=\"addPropListSelectListDel\" onclick=\'addPropListSelectListDel(" + id + ")\'></div></div>");
            }
        });
    }
    function addPropListSelectListDel(id){
        $("#addPropListSelectListId"+id).css({"background":"#cccccc"});
        $.get("/SendPropEmilGet_Buffer/",{"doing":"AddPropDel","PropId":id,'doingunid':new Date().getTime()},function(data){
            var obj = jQuery.parseJSON(data);
            if(obj.status==2000) {
                $("#addPropListSelectListId"+id).remove();
            }
        });
    }
    function PropNumber(id){
        var values=$("#addPropListSelectListInputId"+id).val();
        var PropId=$("#addPropListSelectListInputId"+id).attr("PropId");
        if(values>0 && PropId!=''){
            $(".showList_submit").css({"background":"#616161",'doingunid':new Date().getTime()}).html("等待服务响应...");
            showList_submit_status=0;
            $.get("/SendPropEmilGet_Buffer/",{"doing": "AddPropChange",'PropId':PropId,'PropNum':values},function(data){
                var obj = jQuery.parseJSON(data);
                if(obj.status!=2000) {
                }
                showList_submit_status=1;
                $(".showList_submit").css({"background":"#438EB9"}).html("提交");

            });
        }


    }
<?php echo '</script'; ?>
>
<?php
}
}
/*/ block_function_bbb_7459441975799cb0169a996_08326824 */
?>
<?php
/* block_function_bbb_4988359825799cb0170ac66_30581445  file:Admin/index.html */
if (!function_exists('block_function_bbb_4988359825799cb0170ac66_30581445')) {
function block_function_bbb_4988359825799cb0170ac66_30581445($_smarty_tpl, $block) {?>
            <div class="title">首页</div>
            <div class="title_index_center">
                <div class="title_index_yh">欢迎来到本后台管理系统！</div>
                <p>您好，<?php echo $_smarty_tpl->tpl_vars['userName']->value;?>
，您的角色是系统管理员。<?php if ($_smarty_tpl->tpl_vars['xx']->value == 'a') {
echo $_smarty_tpl->tpl_vars['xx']->value;
echo $_smarty_tpl->tpl_vars['yy']->value;
}?></p>
                <p>这里是高级管理界面。</p>
                <p>请从页面左上方的下拉框选择管理界面，从左侧的菜单选择功能。或者点选以下快捷链接</p>
            </div>
            <?php
}
}
/*/ block_function_bbb_4988359825799cb0170ac66_30581445 */
?>
