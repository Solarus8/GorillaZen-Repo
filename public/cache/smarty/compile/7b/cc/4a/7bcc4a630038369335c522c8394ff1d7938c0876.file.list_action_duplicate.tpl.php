<?php /* Smarty version Smarty-3.1.13, created on 2013-08-03 12:33:46
         compiled from "/var/www/sites/gorillazen/public/admin/themes/default/template/helpers/list/list_action_duplicate.tpl" */ ?>
<?php /*%%SmartyHeaderCode:37977529151fcf8aaeca9d7-87512980%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7bcc4a630038369335c522c8394ff1d7938c0876' => 
    array (
      0 => '/var/www/sites/gorillazen/public/admin/themes/default/template/helpers/list/list_action_duplicate.tpl',
      1 => 1375514992,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '37977529151fcf8aaeca9d7-87512980',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'action' => 0,
    'confirm' => 0,
    'location_ok' => 0,
    'location_ko' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51fcf8aaed7228_51677021',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51fcf8aaed7228_51677021')) {function content_51fcf8aaed7228_51677021($_smarty_tpl) {?>
<a class="pointer" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" onclick="if (confirm('<?php echo $_smarty_tpl->tpl_vars['confirm']->value;?>
')) document.location = '<?php echo $_smarty_tpl->tpl_vars['location_ok']->value;?>
'; else document.location = '<?php echo $_smarty_tpl->tpl_vars['location_ko']->value;?>
';">
	<img src="../img/admin/duplicate.png" alt="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
</a><?php }} ?>