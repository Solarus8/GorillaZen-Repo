<?php /* Smarty version Smarty-3.1.13, created on 2013-08-04 13:58:07
         compiled from "/var/www/sites/gorillazen/public/admin3117/themes/default/template/helpers/list/list_action_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:62757367651fe962f0b7ea9-79673614%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '950b800ab905634e5107d2dd0af8e7b35ce65948' => 
    array (
      0 => '/var/www/sites/gorillazen/public/admin3117/themes/default/template/helpers/list/list_action_view.tpl',
      1 => 1375515009,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '62757367651fe962f0b7ea9-79673614',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51fe962f0d4895_99852586',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51fe962f0d4895_99852586')) {function content_51fe962f0d4895_99852586($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" >
	<img src="../img/admin/details.gif" alt="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
</a><?php }} ?>