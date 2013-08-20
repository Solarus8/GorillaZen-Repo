<?php /* Smarty version Smarty-3.1.13, created on 2013-08-08 02:53:26
         compiled from "/var/www/sites/gorillazen/public/themes/theme696/modules/bankwire/payment_return.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11182095952034066e3f3e9-19988390%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5fcb38fa85c27dcea613139e69bbfbb013094f6c' => 
    array (
      0 => '/var/www/sites/gorillazen/public/themes/theme696/modules/bankwire/payment_return.tpl',
      1 => 1375718053,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11182095952034066e3f3e9-19988390',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'status' => 0,
    'shop_name' => 0,
    'total_to_pay' => 0,
    'bankwireOwner' => 0,
    'bankwireDetails' => 0,
    'bankwireAddress' => 0,
    'reference' => 0,
    'id_order' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52034066ec3706_40264375',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52034066ec3706_40264375')) {function content_52034066ec3706_40264375($_smarty_tpl) {?>

<?php if ($_smarty_tpl->tpl_vars['status']->value=='ok'){?>
  	<p class="success"><?php echo smartyTranslate(array('s'=>'Your order on %s is complete.','sprintf'=>$_smarty_tpl->tpl_vars['shop_name']->value,'mod'=>'bankwire'),$_smarty_tpl);?>
</p>
		<div class="box-payment-style">
		<?php echo smartyTranslate(array('s'=>'Please send us a bank wire with','mod'=>'bankwire'),$_smarty_tpl);?>
<br />
   <ul>
	<li><i class="icon-angle-right"></i><?php echo smartyTranslate(array('s'=>'Amount','mod'=>'bankwire'),$_smarty_tpl);?>
 <span class="price"> <strong><?php echo $_smarty_tpl->tpl_vars['total_to_pay']->value;?>
</strong></span></li>
	<li><i class="icon-angle-right"></i><?php echo smartyTranslate(array('s'=>'Name of account owner','mod'=>'bankwire'),$_smarty_tpl);?>
<strong><?php if ($_smarty_tpl->tpl_vars['bankwireOwner']->value){?><?php echo $_smarty_tpl->tpl_vars['bankwireOwner']->value;?>
<?php }else{ ?>___________<?php }?></strong></li>
	<li><i class="icon-angle-right"></i><?php echo smartyTranslate(array('s'=>'Include these details','mod'=>'bankwire'),$_smarty_tpl);?>
<strong><?php if ($_smarty_tpl->tpl_vars['bankwireDetails']->value){?><?php echo $_smarty_tpl->tpl_vars['bankwireDetails']->value;?>
<?php }else{ ?>___________<?php }?></strong></li>
	<li><i class="icon-angle-right"></i><?php echo smartyTranslate(array('s'=>'Bank name','mod'=>'bankwire'),$_smarty_tpl);?>
<strong><?php if ($_smarty_tpl->tpl_vars['bankwireAddress']->value){?><?php echo $_smarty_tpl->tpl_vars['bankwireAddress']->value;?>
<?php }else{ ?>___________<?php }?></strong></li>
		<?php if (!isset($_smarty_tpl->tpl_vars['reference']->value)){?>
	<li><i class="icon-angle-right"></i><?php echo smartyTranslate(array('s'=>'Do not forget to insert your order number #%d in the subject of your bank wire','sprintf'=>$_smarty_tpl->tpl_vars['id_order']->value,'mod'=>'bankwire'),$_smarty_tpl);?>
</li>
		<?php }else{ ?>
	<li><i class="icon-angle-right"></i><?php echo smartyTranslate(array('s'=>'Do not forget to insert your order reference %s in the subject of your bank wire.','sprintf'=>$_smarty_tpl->tpl_vars['reference']->value,'mod'=>'bankwire'),$_smarty_tpl);?>
</li>
		<?php }?>	
 	<li><i class="icon-angle-right"></i><?php echo smartyTranslate(array('s'=>'An email has been sent with this information.','mod'=>'bankwire'),$_smarty_tpl);?>
</li>
	<li><i class="icon-angle-right"></i> <strong><?php echo smartyTranslate(array('s'=>'Your order will be sent as soon as we receive payment.','mod'=>'bankwire'),$_smarty_tpl);?>
</strong></li>
	<li><i class="icon-angle-right"></i><?php echo smartyTranslate(array('s'=>'If you have questions, comments or concerns, please contact our','mod'=>'bankwire'),$_smarty_tpl);?>
<a class="cus-suport" href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('contact',true);?>
"><i class="icon-envelope-alt"></i><?php echo smartyTranslate(array('s'=>'customer support','mod'=>'bankwire'),$_smarty_tpl);?>
</a>.</li>     
</div>
<?php }else{ ?>
	<p class="warning">
		<?php echo smartyTranslate(array('s'=>'We noticed a problem with your order. If you think this is an error, feel free to contact our','mod'=>'bankwire'),$_smarty_tpl);?>
 
		<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('contact',true);?>
"><?php echo smartyTranslate(array('s'=>'expert customer support team. ','mod'=>'bankwire'),$_smarty_tpl);?>
</a>.
	</p>
<?php }?>
<?php }} ?>