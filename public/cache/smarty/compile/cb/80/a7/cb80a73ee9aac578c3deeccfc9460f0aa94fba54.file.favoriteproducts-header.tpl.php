<?php /* Smarty version Smarty-3.1.13, created on 2013-08-05 12:09:18
         compiled from "/var/www/sites/gorillazen/public/themes/theme696/modules/favoriteproducts/favoriteproducts-header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:119343505051fe2c3c526dd5-56108921%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb80a73ee9aac578c3deeccfc9460f0aa94fba54' => 
    array (
      0 => '/var/www/sites/gorillazen/public/themes/theme696/modules/favoriteproducts/favoriteproducts-header.tpl',
      1 => 1375718651,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '119343505051fe2c3c526dd5-56108921',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51fe2c3c5de7f5_48410152',
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51fe2c3c5de7f5_48410152')) {function content_51fe2c3c5de7f5_48410152($_smarty_tpl) {?>
<script type="text/javascript">
	var favorite_products_url_add = '<?php echo $_smarty_tpl->tpl_vars['link']->value->getModuleLink('favoriteproducts','actions',array('process'=>'add'),false);?>
';
	var favorite_products_url_remove = '<?php echo $_smarty_tpl->tpl_vars['link']->value->getModuleLink('favoriteproducts','actions',array('process'=>'remove'),false);?>
';
<?php if (isset($_GET['id_product'])){?>
	var favorite_products_id_product = '<?php echo intval($_GET['id_product']);?>
';
<?php }?> 
</script>
<?php }} ?>