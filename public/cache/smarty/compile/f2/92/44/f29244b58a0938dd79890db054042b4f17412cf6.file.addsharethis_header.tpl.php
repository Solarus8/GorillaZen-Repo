<?php /* Smarty version Smarty-3.1.13, created on 2013-08-05 12:17:22
         compiled from "/var/www/sites/gorillazen/public/modules/addsharethis/addsharethis_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:189200381551fe2d05cbbbf5-89155789%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f29244b58a0938dd79890db054042b4f17412cf6' => 
    array (
      0 => '/var/www/sites/gorillazen/public/modules/addsharethis/addsharethis_header.tpl',
      1 => 1375719131,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '189200381551fe2d05cbbbf5-89155789',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51fe2d05ddc595_74388023',
  'variables' => 
  array (
    'product' => 0,
    'cover' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51fe2d05ddc595_74388023')) {function content_51fe2d05ddc595_74388023($_smarty_tpl) {?><meta property="og:type" content="website" />
<meta property="og:image" content="<?php echo $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value->link_rewrite,$_smarty_tpl->tpl_vars['cover']->value['id_image'],'large');?>
" />

<?php }} ?>