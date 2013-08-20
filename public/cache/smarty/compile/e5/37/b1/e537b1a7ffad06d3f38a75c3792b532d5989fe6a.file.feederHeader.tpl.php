<?php /* Smarty version Smarty-3.1.13, created on 2013-08-04 02:01:32
         compiled from "/var/www/sites/gorillazen/public/modules/feeder/feederHeader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9805709551fdee3cc85224-55977983%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e537b1a7ffad06d3f38a75c3792b532d5989fe6a' => 
    array (
      0 => '/var/www/sites/gorillazen/public/modules/feeder/feederHeader.tpl',
      1 => 1375527652,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9805709551fdee3cc85224-55977983',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'meta_title' => 0,
    'feedUrl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51fdee3cc915e9_25791325',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51fdee3cc915e9_25791325')) {function content_51fdee3cc915e9_25791325($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/var/www/sites/gorillazen/public/tools/smarty/plugins/modifier.escape.php';
?>

<link rel="alternate" type="application/rss+xml" title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['meta_title']->value, 'html', 'UTF-8');?>
" href="<?php echo $_smarty_tpl->tpl_vars['feedUrl']->value;?>
" /><?php }} ?>