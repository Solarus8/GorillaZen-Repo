<?php /* Smarty version Smarty-3.1.13, created on 2013-08-08 02:52:54
         compiled from "/var/www/sites/gorillazen/public/themes/theme696/modules/cheque/payment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:139854055752034046d96092-96527160%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c4c52bf628eef93e734104090f0aca6fee3f76ec' => 
    array (
      0 => '/var/www/sites/gorillazen/public/themes/theme696/modules/cheque/payment.tpl',
      1 => 1375718613,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '139854055752034046d96092-96527160',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'img_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52034046dc7cc7_41085844',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52034046dc7cc7_41085844')) {function content_52034046dc7cc7_41085844($_smarty_tpl) {?>

<p class="payment_module">
	<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getModuleLink('cheque','payment',array(),true);?>
" title="<?php echo smartyTranslate(array('s'=>'Pay by cheque','mod'=>'cheque'),$_smarty_tpl);?>
">
		<img src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
/cheque.jpg" alt="<?php echo smartyTranslate(array('s'=>'Pay by check.','mod'=>'cheque'),$_smarty_tpl);?>
" width="86" height="54" />
		<?php echo smartyTranslate(array('s'=>'Pay by check (order processing will take more time).','mod'=>'cheque'),$_smarty_tpl);?>

	</a>
</p>
<?php }} ?>