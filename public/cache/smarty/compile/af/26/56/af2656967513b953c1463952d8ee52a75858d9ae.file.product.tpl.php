<?php /* Smarty version Smarty-3.1.13, created on 2013-08-07 13:31:10
         compiled from "/var/www/sites/gorillazen/public/modules/mailalerts/views/templates/hook/product.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18611585202845e0bf006-43997626%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'af2656967513b953c1463952d8ee52a75858d9ae' => 
    array (
      0 => '/var/www/sites/gorillazen/public/modules/mailalerts/views/templates/hook/product.tpl',
      1 => 1375528550,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18611585202845e0bf006-43997626',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'id_product' => 0,
    'email' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5202845e1275c8_99383122',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5202845e1275c8_99383122')) {function content_5202845e1275c8_99383122($_smarty_tpl) {?>
<script type="text/javascript">
// <![CDATA[
oosHookJsCodeFunctions.push('oosHookJsCodeMailAlert');

function clearText() {
	if ($('#oos_customer_email').val() == '<?php echo smartyTranslate(array('s'=>'your@email.com','mod'=>'mailalerts'),$_smarty_tpl);?>
')
		$('#oos_customer_email').val('');
}

function oosHookJsCodeMailAlert() {
	$.ajax({
		type: 'POST',
		url: "<?php echo $_smarty_tpl->tpl_vars['link']->value->getModuleLink('mailalerts','actions',array('process'=>'check'));?>
",
		data: 'id_product=<?php echo $_smarty_tpl->tpl_vars['id_product']->value;?>
&id_product_attribute='+$('#idCombination').val(),
		success: function (msg) {
			if (msg == '0') {
				$('#mailalert_link').show();
				$('#oos_customer_email').show();
			}
			else {
				$('#mailalert_link').hide();
				$('#oos_customer_email').hide();
			}
		}
	});
}

function  addNotification() {
	$.ajax({
		type: 'POST',
		url: "<?php echo $_smarty_tpl->tpl_vars['link']->value->getModuleLink('mailalerts','actions',array('process'=>'add'));?>
",
		data: 'id_product=<?php echo $_smarty_tpl->tpl_vars['id_product']->value;?>
&id_product_attribute='+$('#idCombination').val()+'&customer_email='+$('#oos_customer_email').val()+'',
		success: function (msg) {
			if (msg == '1') {
				$('#mailalert_link').hide();
				$('#oos_customer_email').hide();
				$('#oos_customer_email_result').html("<?php echo smartyTranslate(array('s'=>'Request notification registered','mod'=>'mailalerts'),$_smarty_tpl);?>
");
				$('#oos_customer_email_result').css('color', 'green').show();
			}
			else if (msg == '2' ) {
				$('#oos_customer_email_result').html("<?php echo smartyTranslate(array('s'=>'You already have an alert for this product','mod'=>'mailalerts'),$_smarty_tpl);?>
");
				$('#oos_customer_email_result').css('color', 'red').show();
			} else {
				$('#oos_customer_email_result').html("<?php echo smartyTranslate(array('s'=>'Your e-mail address is invalid','mod'=>'mailalerts'),$_smarty_tpl);?>
");
				$('#oos_customer_email_result').css('color', 'red').show();
			}
		}
	});
	return false;
}

$(document).ready(function() {
	$('#oos_customer_email').bind('keypress', function(e) {
		if(e.keyCode == 13)
		{
			addNotification();
			return false;
		}
	});
});

//]]>
</script>

<!-- MODULE MailAlerts -->
<?php if (isset($_smarty_tpl->tpl_vars['email']->value)&&$_smarty_tpl->tpl_vars['email']->value){?>
	<input type="text" id="oos_customer_email" name="customer_email" size="20" value="<?php echo smartyTranslate(array('s'=>'your@email.com','mod'=>'mailalerts'),$_smarty_tpl);?>
" class="mailalerts_oos_email" onclick="clearText();" /><br />
<?php }?>
<a href="#" onclick="return addNotification();" id="mailalert_link"><?php echo smartyTranslate(array('s'=>'Notify me when available','mod'=>'mailalerts'),$_smarty_tpl);?>
</a>
<span id="oos_customer_email_result" style="display:none;"></span>
<!-- END : MODULE MailAlerts -->
<?php }} ?>