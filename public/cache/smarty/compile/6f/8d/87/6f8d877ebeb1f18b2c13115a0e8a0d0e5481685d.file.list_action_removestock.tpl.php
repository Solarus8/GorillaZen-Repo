<?php /* Smarty version Smarty-3.1.13, created on 2013-08-03 12:33:46
         compiled from "/var/www/sites/gorillazen/public/admin/themes/default/template/helpers/list/list_action_removestock.tpl" */ ?>
<?php /*%%SmartyHeaderCode:65056490251fcf8aaeee628-35808604%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6f8d877ebeb1f18b2c13115a0e8a0d0e5481685d' => 
    array (
      0 => '/var/www/sites/gorillazen/public/admin/themes/default/template/helpers/list/list_action_removestock.tpl',
      1 => 1375514997,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '65056490251fcf8aaeee628-35808604',
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
  'unifunc' => 'content_51fcf8aaef6f85_27502022',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51fcf8aaef6f85_27502022')) {function content_51fcf8aaef6f85_27502022($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
	<img src="../img/admin/remove_stock.png" alt="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
</a>
<?php }} ?>