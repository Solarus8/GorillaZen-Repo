<?php /* Smarty version Smarty-3.1.13, created on 2013-08-03 12:33:47
         compiled from "/var/www/sites/gorillazen/public/admin/themes/default/template/helpers/list/list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:167240596451fcf8ab58be32-57499526%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7bd3348294c853688bb096cff0994706efa7322f' => 
    array (
      0 => '/var/www/sites/gorillazen/public/admin/themes/default/template/helpers/list/list_action_edit.tpl',
      1 => 1375514994,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '167240596451fcf8ab58be32-57499526',
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
  'unifunc' => 'content_51fcf8ab593fd7_81958132',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51fcf8ab593fd7_81958132')) {function content_51fcf8ab593fd7_81958132($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" class="edit" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
	<img src="../img/admin/edit.gif" alt="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
</a><?php }} ?>