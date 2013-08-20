<?php /* Smarty version Smarty-3.1.13, created on 2013-08-03 12:33:50
         compiled from "/var/www/sites/gorillazen/public/admin/themes/default/template/controllers/slip/_print_pdf_icon.tpl" */ ?>
<?php /*%%SmartyHeaderCode:148074753351fcf8ae6d2715-18511551%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '10e7444b2295e5b15ca9f48aa055ce596fd80fe6' => 
    array (
      0 => '/var/www/sites/gorillazen/public/admin/themes/default/template/controllers/slip/_print_pdf_icon.tpl',
      1 => 1375514262,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '148074753351fcf8ae6d2715-18511551',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'order_slip' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51fcf8ae6e3288_56258122',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51fcf8ae6e3288_56258122')) {function content_51fcf8ae6e3288_56258122($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/var/www/sites/gorillazen/public/tools/smarty/plugins/modifier.escape.php';
?>


<span style="width:20px; margin-right:5px;">
<a target="_blank" href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminPdf'), 'htmlall', 'UTF-8');?>
&submitAction=generateOrderSlipPDF&id_order_slip=<?php echo $_smarty_tpl->tpl_vars['order_slip']->value->id;?>
"><img src="../img/admin/tab-invoice.gif" alt="order_slip" /></a>
</span>
<?php }} ?>