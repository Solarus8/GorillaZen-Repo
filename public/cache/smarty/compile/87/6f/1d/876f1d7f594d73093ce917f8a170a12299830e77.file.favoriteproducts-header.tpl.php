<?php /* Smarty version Smarty-3.1.13, created on 2013-08-04 02:01:32
         compiled from "/var/www/sites/gorillazen/public/modules/favoriteproducts/views/templates/hook/favoriteproducts-header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:189034881851fdee3cc0df65-89229100%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '876f1d7f594d73093ce917f8a170a12299830e77' => 
    array (
      0 => '/var/www/sites/gorillazen/public/modules/favoriteproducts/views/templates/hook/favoriteproducts-header.tpl',
      1 => 1375527629,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '189034881851fdee3cc0df65-89229100',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51fdee3cc6fff6_16893863',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51fdee3cc6fff6_16893863')) {function content_51fdee3cc6fff6_16893863($_smarty_tpl) {?>
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