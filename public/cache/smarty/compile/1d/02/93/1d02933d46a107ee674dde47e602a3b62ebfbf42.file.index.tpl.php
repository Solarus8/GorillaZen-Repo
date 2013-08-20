<?php /* Smarty version Smarty-3.1.13, created on 2013-08-03 12:33:50
         compiled from "/var/www/sites/gorillazen/public/themes/default/mobile/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:64761261051fcf8ae9898f2-55490351%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1d02933d46a107ee674dde47e602a3b62ebfbf42' => 
    array (
      0 => '/var/www/sites/gorillazen/public/themes/default/mobile/index.tpl',
      1 => 1375530721,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '64761261051fcf8ae9898f2-55490351',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51fcf8ae98f726_31321902',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51fcf8ae98f726_31321902')) {function content_51fcf8ae98f726_31321902($_smarty_tpl) {?>
	<div data-role="content" id="content">
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"DisplayMobileIndex"),$_smarty_tpl);?>

		<?php echo $_smarty_tpl->getSubTemplate ('./sitemap.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</div><!-- /content -->
<?php }} ?>