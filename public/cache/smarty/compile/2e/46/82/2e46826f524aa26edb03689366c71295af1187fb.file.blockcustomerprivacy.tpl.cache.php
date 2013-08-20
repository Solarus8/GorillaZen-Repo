<?php /* Smarty version Smarty-3.1.13, created on 2013-08-05 13:21:35
         compiled from "/var/www/sites/gorillazen/public/themes/theme696/modules/blockcustomerprivacy/blockcustomerprivacy.tpl" */ ?>
<?php /*%%SmartyHeaderCode:204473163551fe455e001e32-33868335%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2e46826f524aa26edb03689366c71295af1187fb' => 
    array (
      0 => '/var/www/sites/gorillazen/public/themes/theme696/modules/blockcustomerprivacy/blockcustomerprivacy.tpl',
      1 => 1375718209,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '204473163551fe455e001e32-33868335',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51fe455e040d20_47550050',
  'variables' => 
  array (
    'privacy_message' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51fe455e040d20_47550050')) {function content_51fe455e040d20_47550050($_smarty_tpl) {?>

<div class="error_customerprivacy" style="color:red;"></div>
<fieldset class="account_creation customerprivacy titled_box">
	<h2><span><?php echo smartyTranslate(array('s'=>'Customer data privacy','mod'=>'blockcustomerprivacy'),$_smarty_tpl);?>
</span></h2>
	<p class="required">
		<input type="checkbox" value="1" id="customer_privacy" name="customer_privacy" style="float:left;margin: 15px;" />				
	</p>
	<label for="customer_privacy"><?php echo $_smarty_tpl->tpl_vars['privacy_message']->value;?>
</label>		
</fieldset><?php }} ?>