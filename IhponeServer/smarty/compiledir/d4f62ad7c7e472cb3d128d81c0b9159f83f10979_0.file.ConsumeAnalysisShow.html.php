<?php /* Smarty version 3.1.28-dev/54, created on 2016-06-30 15:42:03
         compiled from "/mnt/hgfs/linux/IhponeServer/views/Data/ConsumeAnalysisShow.html" */ ?>
<?php
/*%%SmartyHeaderCode:1844624825774cd4b7a4175_73247850%%*/
$_valid = $_smarty_tpl->decodeProperties(array (
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/54',
  'unifunc' => 'content_5774cd4b806733_22903701',
  'file_dependency' => 
  array (
    'd4f62ad7c7e472cb3d128d81c0b9159f83f10979' => 
    array (
      0 => '/mnt/hgfs/linux/IhponeServer/views/Data/ConsumeAnalysisShow.html',
      1 => 1467272320,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
  'isChild' => false,
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5774cd4b806733_22903701')) {
function content_5774cd4b806733_22903701 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '1844624825774cd4b7a4175_73247850';
?>
<head>
    <meta http-equiv=Content-Type content="text/html;charset=utf-8">
</head>
<body>
<style>
    .ReportDataTitle{height: 40px;}
    .ReportDataTitle_list{float: left;line-height: 40px;height: 40px;width: 150px;text-align: center;font-size: 14px;font-weight: 600}
    .ReportDataCenter{background:#F5F5F5;border-bottom:1px solid #DEDEDE;height: 30px;}
    .ReportDataCenter_list{float: left;line-height: 30px;height: 30px;width: 150px;text-align: center;font-size: 12px;}
</style>
<table>
<?php if ($_smarty_tpl->tpl_vars['data']->value) {?>
    <tr class="ReportDataTitle">
        <td class="ReportDataTitle_list">服区</td>
        <td class="ReportDataTitle_list"  style="width: 200px">动作代号</td>
        <td class="ReportDataTitle_list">次数(去重)</td>
        <td class="ReportDataTitle_list">账号数</td>
    </tr>
    <?php
$_from = $_smarty_tpl->tpl_vars['data']->value;
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
        <tr class="ReportDataCenter" >
            <td class="ReportDataCenter_list"><?php echo $_smarty_tpl->tpl_vars['GameServerUnid']->value;?>
</td>
            <td class="ReportDataCenter_list" style="width: 200px"><?php echo $_smarty_tpl->tpl_vars['vv']->value['name'];?>
</td>
            <td class="ReportDataCenter_list"><?php echo $_smarty_tpl->tpl_vars['vv']->value['num'];?>
</td>
            <td class="ReportDataCenter_list"><?php echo $_smarty_tpl->tpl_vars['vv']->value['userNum'];?>
</td>
        </tr>
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
<?php } else { ?>
<tr class="ReportDataCenter">没有数据！</tr>
<?php }?>
</table>
</body><?php }
}
?>