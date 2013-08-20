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
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52033f6f1ff374_44757979',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52033f6f1ff374_44757979')) {function content_52033f6f1ff374_44757979($_smarty_tpl) {?>
<div class="error_customerprivacy" style="color:red;"></div>
<fieldset class="account_creation customerprivacy titled_box">
	<h2><span>Customer data privacy</span></h2>
	<p class="required">
		<input type="checkbox" value="1" id="customer_privacy" name="customer_privacy" style="float:left;margin: 15px;" />				
	</p>
	<label for="customer_privacy">The personal data you provide is used to answer queries, process orders or allow access to specific information. You have the right to modify and delete all the personal information found in the &quot;My Account&quot; page. </label>		
</fieldset><?php }} ?>