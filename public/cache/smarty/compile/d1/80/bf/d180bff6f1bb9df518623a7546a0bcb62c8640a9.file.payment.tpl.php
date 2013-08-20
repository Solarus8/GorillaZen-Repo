<?php /* Smarty version Smarty-3.1.13, created on 2013-08-08 02:52:54
         compiled from "/var/www/sites/gorillazen/public/themes/theme696/modules/bankwire/payment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8566740552034046dd7014-34652306%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd180bff6f1bb9df518623a7546a0bcb62c8640a9' => 
    array (
      0 => '/var/www/sites/gorillazen/public/themes/theme696/modules/bankwire/payment.tpl',
      1 => 1375718050,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8566740552034046dd7014-34652306',
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
  'unifunc' => 'content_52034046dee808_93569898',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52034046dee808_93569898')) {function content_52034046dee808_93569898($_smarty_tpl) {?>

<p class="payment_module">
	<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getModuleLink('bankwire','payment');?>
" title="<?php echo smartyTranslate(array('s'=>'Pay by bank wire','mod'=>'bankwire'),$_smarty_tpl);?>
">
		<img src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
/bankwire.jpg" alt="<?php echo smartyTranslate(array('s'=>'Pay by bank wire','mod'=>'bankwire'),$_smarty_tpl);?>
" width="86" height="54"/>
		<?php echo smartyTranslate(array('s'=>'Pay by bank wire (order process will be longer)','mod'=>'bankwire'),$_smarty_tpl);?>

	</a>
</p><?php }} ?>