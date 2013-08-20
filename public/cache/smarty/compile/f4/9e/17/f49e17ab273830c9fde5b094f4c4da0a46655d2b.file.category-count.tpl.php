<?php /* Smarty version Smarty-3.1.13, created on 2013-08-03 12:33:55
         compiled from "/var/www/sites/gorillazen/public/themes/default/category-count.tpl" */ ?>
<?php /*%%SmartyHeaderCode:124094952851fcf8b3ec88c4-25731015%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f49e17ab273830c9fde5b094f4c4da0a46655d2b' => 
    array (
      0 => '/var/www/sites/gorillazen/public/themes/default/category-count.tpl',
      1 => 1375530063,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '124094952851fcf8b3ec88c4-25731015',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'category' => 0,
    'nb_products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51fcf8b3ef4d75_49083372',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51fcf8b3ef4d75_49083372')) {function content_51fcf8b3ef4d75_49083372($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['category']->value->id==1||$_smarty_tpl->tpl_vars['nb_products']->value==0){?>
	<?php echo smartyTranslate(array('s'=>'There are no products in  this category'),$_smarty_tpl);?>

<?php }else{ ?>
	<?php if ($_smarty_tpl->tpl_vars['nb_products']->value==1){?>
		<?php echo smartyTranslate(array('s'=>'There is %d product.','sprintf'=>$_smarty_tpl->tpl_vars['nb_products']->value),$_smarty_tpl);?>

	<?php }else{ ?>
		<?php echo smartyTranslate(array('s'=>'There are %d products.','sprintf'=>$_smarty_tpl->tpl_vars['nb_products']->value),$_smarty_tpl);?>

	<?php }?>
<?php }?><?php }} ?>