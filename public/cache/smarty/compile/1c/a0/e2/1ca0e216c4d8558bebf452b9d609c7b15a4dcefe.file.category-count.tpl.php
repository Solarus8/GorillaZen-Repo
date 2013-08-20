<?php /* Smarty version Smarty-3.1.13, created on 2013-08-05 12:28:00
         compiled from "/var/www/sites/gorillazen/public/themes/theme696/category-count.tpl" */ ?>
<?php /*%%SmartyHeaderCode:88761199351fe43fc1325a0-63783463%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1ca0e216c4d8558bebf452b9d609c7b15a4dcefe' => 
    array (
      0 => '/var/www/sites/gorillazen/public/themes/theme696/category-count.tpl',
      1 => 1375716939,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '88761199351fe43fc1325a0-63783463',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51fe43fc14bf87_26101422',
  'variables' => 
  array (
    'category' => 0,
    'nb_products' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51fe43fc14bf87_26101422')) {function content_51fe43fc14bf87_26101422($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['category']->value->id==1||$_smarty_tpl->tpl_vars['nb_products']->value==0){?>
	<?php echo smartyTranslate(array('s'=>'There are no products in  this category'),$_smarty_tpl);?>

<?php }else{ ?>
	<?php if ($_smarty_tpl->tpl_vars['nb_products']->value==1){?>
		<?php echo smartyTranslate(array('s'=>'There is %d product.','sprintf'=>$_smarty_tpl->tpl_vars['nb_products']->value),$_smarty_tpl);?>

	<?php }else{ ?>
		<?php echo smartyTranslate(array('s'=>'There are %d products.','sprintf'=>$_smarty_tpl->tpl_vars['nb_products']->value),$_smarty_tpl);?>

	<?php }?>
<?php }?><?php }} ?>