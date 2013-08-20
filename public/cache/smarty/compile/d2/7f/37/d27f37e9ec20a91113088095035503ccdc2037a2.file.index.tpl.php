<?php /* Smarty version Smarty-3.1.13, created on 2013-08-07 16:39:34
         compiled from "/var/www/sites/gorillazen/public/themes/theme696/mobile/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15554828195202b086bb36a3-07451549%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd27f37e9ec20a91113088095035503ccdc2037a2' => 
    array (
      0 => '/var/www/sites/gorillazen/public/themes/theme696/mobile/index.tpl',
      1 => 1375717943,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15554828195202b086bb36a3-07451549',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5202b086bf7fb0_21671124',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5202b086bf7fb0_21671124')) {function content_5202b086bf7fb0_21671124($_smarty_tpl) {?>
	<div data-role="content" id="content">
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"DisplayMobileIndex"),$_smarty_tpl);?>

		<?php echo $_smarty_tpl->getSubTemplate ('./sitemap.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</div><!-- /content -->
<?php }} ?>