<?php /* Smarty version Smarty-3.1.13, created on 2013-08-03 12:33:49
         compiled from "/var/www/sites/gorillazen/public/admin/themes/default/template/controllers/not_found/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:111830856951fcf8ad492498-82788579%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7eb0acce0360c14048d58f74c13d71d15e494297' => 
    array (
      0 => '/var/www/sites/gorillazen/public/admin/themes/default/template/controllers/not_found/content.tpl',
      1 => 1375513543,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '111830856951fcf8ad492498-82788579',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'controller' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51fcf8ad49b715_35813079',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51fcf8ad49b715_35813079')) {function content_51fcf8ad49b715_35813079($_smarty_tpl) {?>
<h1><?php echo smartyTranslate(array('s'=>'The controller %s is missing or invalid.','sprintf'=>$_smarty_tpl->tpl_vars['controller']->value),$_smarty_tpl);?>
</h1>
<ul>
<li><a href="index.php"><?php echo smartyTranslate(array('s'=>'Go to the dashboard.'),$_smarty_tpl);?>
</a></li>
<li><a href="#" onclick="window.history.back();"><?php echo smartyTranslate(array('s'=>'Back to the previous page.'),$_smarty_tpl);?>
</a></li>
</ul>
<?php }} ?>