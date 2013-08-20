<?php /* Smarty version Smarty-3.1.13, created on 2013-08-05 12:22:49
         compiled from "/var/www/sites/gorillazen/public/themes/theme696/modules/favoriteproducts/favoriteproducts-extra.tpl" */ ?>
<?php /*%%SmartyHeaderCode:87408669551ff47c95d98f8-08337737%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '62576f0a0076fc9d00cd61bb5d0ff32230159181' => 
    array (
      0 => '/var/www/sites/gorillazen/public/themes/theme696/modules/favoriteproducts/favoriteproducts-extra.tpl',
      1 => 1375718649,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '87408669551ff47c95d98f8-08337737',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51ff47c9623ff6_00452231',
  'variables' => 
  array (
    'isCustomerFavoriteProduct' => 0,
    'isLogged' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ff47c9623ff6_00452231')) {function content_51ff47c9623ff6_00452231($_smarty_tpl) {?>

<?php if (!$_smarty_tpl->tpl_vars['isCustomerFavoriteProduct']->value&&$_smarty_tpl->tpl_vars['isLogged']->value){?>
<li id="favoriteproducts_block_extra_add" class="add favorite">
	<i class="icon-heart-empty"></i><?php echo smartyTranslate(array('s'=>'Add this product to my list of favorites.','mod'=>'favoriteproducts'),$_smarty_tpl);?>

</li>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['isCustomerFavoriteProduct']->value&&$_smarty_tpl->tpl_vars['isLogged']->value){?>
<li id="favoriteproducts_block_extra_remove" class="favorite">
	<i class="icon-heart-empty"></i><?php echo smartyTranslate(array('s'=>'Remove this product from my favorite\'s list. ','mod'=>'favoriteproducts'),$_smarty_tpl);?>

</li>
<?php }?>

<li id="favoriteproducts_block_extra_added" class="favorite">
	<i class="icon-heart"></i><?php echo smartyTranslate(array('s'=>'Remove this product from my favorite\'s list. ','mod'=>'favoriteproducts'),$_smarty_tpl);?>

</li>
<li id="favoriteproducts_block_extra_removed" class="favorite">
	<i class="icon-heart-empty"></i><?php echo smartyTranslate(array('s'=>'Add this product to my list of favorites.','mod'=>'favoriteproducts'),$_smarty_tpl);?>

</li><?php }} ?>