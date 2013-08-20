<?php /* Smarty version Smarty-3.1.13, created on 2013-08-05 15:37:50
         compiled from "/var/www/sites/gorillazen/public/themes/theme696/store_infos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:127911942051ffb5f1baae07-86141669%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '858c1cd57e4f780a7100a8b6e4cbaa4d2c56b419' => 
    array (
      0 => '/var/www/sites/gorillazen/public/themes/theme696/store_infos.tpl',
      1 => 1375718891,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '127911942051ffb5f1baae07-86141669',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51ffb5f1bcc3c9_79590557',
  'variables' => 
  array (
    'days_datas' => 0,
    'one_day' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ffb5f1bcc3c9_79590557')) {function content_51ffb5f1bcc3c9_79590557($_smarty_tpl) {?>

<br />
<br />
<span id="store_hours"><?php echo smartyTranslate(array('s'=>'working hours'),$_smarty_tpl);?>
</span>
<table class="table_map" style="font-size: 9px;">
	<?php  $_smarty_tpl->tpl_vars['one_day'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['one_day']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['days_datas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['one_day']->key => $_smarty_tpl->tpl_vars['one_day']->value){
$_smarty_tpl->tpl_vars['one_day']->_loop = true;
?>
	<tr>
		<td style="width: 70px;"><?php echo smartyTranslate(array('s'=>$_smarty_tpl->tpl_vars['one_day']->value['day']),$_smarty_tpl);?>
</td><td><?php echo $_smarty_tpl->tpl_vars['one_day']->value['hours'];?>
</td>
	</tr>
	<?php } ?>
</table>
<?php }} ?>