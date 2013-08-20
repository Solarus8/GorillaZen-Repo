<?php /* Smarty version Smarty-3.1.13, created on 2013-08-05 03:49:28
         compiled from "/var/www/sites/gorillazen/public/admin3117/themes/default/template/controllers/cms_content/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:131696304951ff5908793bc9-98603277%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '311e82ac71bf1db9426e649bcdf00fcf9962dd94' => 
    array (
      0 => '/var/www/sites/gorillazen/public/admin3117/themes/default/template/controllers/cms_content/content.tpl',
      1 => 1375512817,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '131696304951ff5908793bc9-98603277',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cms_breadcrumb' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51ff59088172d5_04598604',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ff59088172d5_04598604')) {function content_51ff59088172d5_04598604($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['cms_breadcrumb']->value)){?>
	<div class="cat_bar">
		<span style="color: #3C8534;"><?php echo smartyTranslate(array('s'=>'Current category'),$_smarty_tpl);?>
 :</span>&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['cms_breadcrumb']->value;?>

	</div>
<?php }?>

<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }} ?>