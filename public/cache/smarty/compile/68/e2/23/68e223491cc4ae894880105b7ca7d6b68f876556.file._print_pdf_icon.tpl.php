<?php /* Smarty version Smarty-3.1.13, created on 2013-08-03 12:33:48
         compiled from "/var/www/sites/gorillazen/public/admin/themes/default/template/controllers/outstanding/_print_pdf_icon.tpl" */ ?>
<?php /*%%SmartyHeaderCode:152481396151fcf8acd73482-13434118%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '68e223491cc4ae894880105b7ca7d6b68f876556' => 
    array (
      0 => '/var/www/sites/gorillazen/public/admin/themes/default/template/controllers/outstanding/_print_pdf_icon.tpl',
      1 => 1375513637,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '152481396151fcf8acd73482-13434118',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'id_invoice' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51fcf8acd7db25_92108688',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51fcf8acd7db25_92108688')) {function content_51fcf8acd7db25_92108688($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/var/www/sites/gorillazen/public/tools/smarty/plugins/modifier.escape.php';
?>


<span style="width:20px; margin-right:5px;">
	<a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminPdf'), 'htmlall', 'UTF-8');?>
&submitAction=generateInvoicePDF&id_order_invoice=<?php echo $_smarty_tpl->tpl_vars['id_invoice']->value;?>
"><img src="../img/admin/tab-invoice.gif" alt="invoice" /></a>
</span><?php }} ?>