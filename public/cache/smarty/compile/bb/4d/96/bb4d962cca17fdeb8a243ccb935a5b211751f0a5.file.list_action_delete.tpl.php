<?php /* Smarty version Smarty-3.1.13, created on 2013-08-04 06:25:46
         compiled from "/var/www/sites/gorillazen/public/admin3117/themes/default/template/helpers/list/list_action_delete.tpl" */ ?>
<?php /*%%SmartyHeaderCode:84221075751fe2c2a7e8532-63796424%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bb4d962cca17fdeb8a243ccb935a5b211751f0a5' => 
    array (
      0 => '/var/www/sites/gorillazen/public/admin3117/themes/default/template/helpers/list/list_action_delete.tpl',
      1 => 1375514989,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '84221075751fe2c2a7e8532-63796424',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'confirm' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51fe2c2a838b17_09373458',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51fe2c2a838b17_09373458')) {function content_51fe2c2a838b17_09373458($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" class="delete" <?php if (isset($_smarty_tpl->tpl_vars['confirm']->value)){?>onclick="if (confirm('<?php echo $_smarty_tpl->tpl_vars['confirm']->value;?>
')){ return true; }else{ event.stopPropagation(); event.preventDefault();};"<?php }?> title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
	<img src="../img/admin/delete.gif" alt="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
</a><?php }} ?>