<?php /* Smarty version Smarty-3.1.13, created on 2013-08-03 12:33:46
         compiled from "/var/www/sites/gorillazen/public/admin/themes/default/template/helpers/list/list_action_transferstock.tpl" */ ?>
<?php /*%%SmartyHeaderCode:149666941351fcf8aaec11f6-71644736%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '21eda0011b7e949be1ebb7109f12ab3fa0ec60ff' => 
    array (
      0 => '/var/www/sites/gorillazen/public/admin/themes/default/template/helpers/list/list_action_transferstock.tpl',
      1 => 1375515007,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '149666941351fcf8aaec11f6-71644736',
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
  'unifunc' => 'content_51fcf8aaec90f6_73667765',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51fcf8aaec90f6_73667765')) {function content_51fcf8aaec90f6_73667765($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
	<img src="../img/admin/transfer_stock.png" alt="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
</a>
<?php }} ?>