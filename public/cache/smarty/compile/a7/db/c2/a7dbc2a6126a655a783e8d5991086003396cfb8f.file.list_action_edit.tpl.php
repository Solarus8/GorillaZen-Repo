<?php /* Smarty version Smarty-3.1.13, created on 2013-08-04 06:25:46
         compiled from "/var/www/sites/gorillazen/public/admin3117/themes/default/template/helpers/list/list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:55176851051fe2c2a7c3df0-53910357%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a7dbc2a6126a655a783e8d5991086003396cfb8f' => 
    array (
      0 => '/var/www/sites/gorillazen/public/admin3117/themes/default/template/helpers/list/list_action_edit.tpl',
      1 => 1375514994,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '55176851051fe2c2a7c3df0-53910357',
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
  'unifunc' => 'content_51fe2c2a7e5306_68518964',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51fe2c2a7e5306_68518964')) {function content_51fe2c2a7e5306_68518964($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" class="edit" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
	<img src="../img/admin/edit.gif" alt="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
</a><?php }} ?>