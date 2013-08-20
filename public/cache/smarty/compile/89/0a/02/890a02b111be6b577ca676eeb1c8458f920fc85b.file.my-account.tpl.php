<?php /* Smarty version Smarty-3.1.13, created on 2013-08-07 13:46:38
         compiled from "/var/www/sites/gorillazen/public/modules/mailalerts/views/templates/hook/my-account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1814601643520287fe9ed302-17379784%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '890a02b111be6b577ca676eeb1c8458f920fc85b' => 
    array (
      0 => '/var/www/sites/gorillazen/public/modules/mailalerts/views/templates/hook/my-account.tpl',
      1 => 1375528547,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1814601643520287fe9ed302-17379784',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'module_template_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_520287fea00db8_42900147',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_520287fea00db8_42900147')) {function content_520287fea00db8_42900147($_smarty_tpl) {?>

<li class="mailalerts">
	<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getModuleLink('mailalerts','account');?>
" title="<?php echo smartyTranslate(array('s'=>'My alerts','mod'=>'mailalerts'),$_smarty_tpl);?>
">
		<img src="<?php echo $_smarty_tpl->tpl_vars['module_template_dir']->value;?>
img/icon-alert.png" class="icon" />
		<?php echo smartyTranslate(array('s'=>'My alerts','mod'=>'mailalerts'),$_smarty_tpl);?>

	</a>
</li>
<?php }} ?>