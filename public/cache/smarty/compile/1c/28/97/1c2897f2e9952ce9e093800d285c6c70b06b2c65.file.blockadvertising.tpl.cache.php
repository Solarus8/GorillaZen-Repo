<?php /* Smarty version Smarty-3.1.13, created on 2013-08-04 02:01:33
         compiled from "/var/www/sites/gorillazen/public/modules/blockadvertising/blockadvertising.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29334801051fdee3d0798d4-23173285%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1c2897f2e9952ce9e093800d285c6c70b06b2c65' => 
    array (
      0 => '/var/www/sites/gorillazen/public/modules/blockadvertising/blockadvertising.tpl',
      1 => 1375525496,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29334801051fdee3d0798d4-23173285',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'adv_link' => 0,
    'adv_title' => 0,
    'image' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51fdee3d086c01_40599730',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51fdee3d086c01_40599730')) {function content_51fdee3d086c01_40599730($_smarty_tpl) {?>

<!-- MODULE Block advertising -->
<div class="advertising_block">
	<a href="<?php echo $_smarty_tpl->tpl_vars['adv_link']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['adv_title']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['adv_title']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['adv_title']->value;?>
" width="155"  height="163" /></a>
</div>
<!-- /MODULE Block advertising -->
<?php }} ?>