<?php /* Smarty version Smarty-3.1.13, created on 2013-08-07 16:39:54
         compiled from "/var/www/sites/gorillazen/public/themes/theme696/mobile/page-title.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10704298875202b09a0a1286-96991448%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '376a1b8884c096b1265d3b6d57e70a04d30e9d34' => 
    array (
      0 => '/var/www/sites/gorillazen/public/themes/theme696/mobile/page-title.tpl',
      1 => 1375717998,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10704298875202b09a0a1286-96991448',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_title' => 0,
    'meta_title' => 0,
    'shop_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5202b09a0bcdc6_37711638',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5202b09a0bcdc6_37711638')) {function content_5202b09a0bcdc6_37711638($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/var/www/sites/gorillazen/public/tools/smarty/plugins/modifier.escape.php';
?><?php if (!isset($_smarty_tpl->tpl_vars['page_title']->value)&&isset($_smarty_tpl->tpl_vars['meta_title']->value)&&$_smarty_tpl->tpl_vars['meta_title']->value!=$_smarty_tpl->tpl_vars['shop_name']->value){?>
	<?php $_smarty_tpl->tpl_vars['page_title'] = new Smarty_variable(smarty_modifier_escape($_smarty_tpl->tpl_vars['meta_title']->value, 'htmlall', 'UTF-8'), null, 0);?>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['page_title']->value)){?>
	<div data-role="header" class="clearfix navbartop" data-position="inline">
		<h1><?php echo $_smarty_tpl->tpl_vars['page_title']->value;?>
</h1>
	</div><!-- /navbartop -->
<?php }?><?php }} ?>