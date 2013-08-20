<?php /* Smarty version Smarty-3.1.13, created on 2013-08-03 12:33:47
         compiled from "/var/www/sites/gorillazen/public/admin/themes/default/template/helpers/list/list_action_addstock.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2663753851fcf8ab5d4980-03277104%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd0a0b08a09ef1e81410e942be16fd5073d52e7a8' => 
    array (
      0 => '/var/www/sites/gorillazen/public/admin/themes/default/template/helpers/list/list_action_addstock.tpl',
      1 => 1375514985,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2663753851fcf8ab5d4980-03277104',
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
  'unifunc' => 'content_51fcf8ab5dcbe5_02779617',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51fcf8ab5dcbe5_02779617')) {function content_51fcf8ab5dcbe5_02779617($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
	<img src="../img/admin/add_stock.png" alt="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
</a>
<?php }} ?>