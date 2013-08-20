<?php /* Smarty version Smarty-3.1.13, created on 2013-08-08 03:57:39
         compiled from "/var/www/sites/gorillazen/public/themes/theme696/modules/cheque/payment_return.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20256088752034f73db1243-60865259%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3dee038950ad83801a1fc126d72d64fec8fb986e' => 
    array (
      0 => '/var/www/sites/gorillazen/public/themes/theme696/modules/cheque/payment_return.tpl',
      1 => 1375718616,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20256088752034f73db1243-60865259',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'status' => 0,
    'shop_name' => 0,
    'total_to_pay' => 0,
    'chequeName' => 0,
    'chequeAddress' => 0,
    'reference' => 0,
    'id_order' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52034f73e0ccf0_05979817',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52034f73e0ccf0_05979817')) {function content_52034f73e0ccf0_05979817($_smarty_tpl) {?>

<?php if ($_smarty_tpl->tpl_vars['status']->value=='ok'){?>
	<p class="success"><?php echo smartyTranslate(array('s'=>'Your order on %s is complete.','sprintf'=>$_smarty_tpl->tpl_vars['shop_name']->value,'mod'=>'cheque'),$_smarty_tpl);?>
</p>
		<div class="box-payment-style">
   <?php echo smartyTranslate(array('s'=>'Your check must include:','mod'=>'cheque'),$_smarty_tpl);?>
<br />
   <ul>
	<li><i class="icon-angle-right"></i> <?php echo smartyTranslate(array('s'=>'Payment ammount.','mod'=>'cheque'),$_smarty_tpl);?>
 <span class="price"><strong><?php echo $_smarty_tpl->tpl_vars['total_to_pay']->value;?>
</strong></span><br /></li>
	<li><i class="icon-angle-right"></i> <?php echo smartyTranslate(array('s'=>'Payable to the order of','mod'=>'cheque'),$_smarty_tpl);?>
 <strong><?php if ($_smarty_tpl->tpl_vars['chequeName']->value){?><?php echo $_smarty_tpl->tpl_vars['chequeName']->value;?>
<?php }else{ ?>___________<?php }?></strong></li>
	<li><i class="icon-angle-right"></i><?php echo smartyTranslate(array('s'=>'Mail to','mod'=>'cheque'),$_smarty_tpl);?>
 <strong><?php if ($_smarty_tpl->tpl_vars['chequeAddress']->value){?><?php echo $_smarty_tpl->tpl_vars['chequeAddress']->value;?>
<?php }else{ ?>___________<?php }?></strong></li>
		<?php if (!isset($_smarty_tpl->tpl_vars['reference']->value)){?>
	<li><i class="icon-angle-right"></i> <?php echo smartyTranslate(array('s'=>'Do not forget to insert your order number #%d.','sprintf'=>$_smarty_tpl->tpl_vars['id_order']->value,'mod'=>'cheque'),$_smarty_tpl);?>
</li>
		<?php }else{ ?>
	<li><i class="icon-angle-right"></i><?php echo smartyTranslate(array('s'=>'Do not forget to insert your order reference %s.','sprintf'=>$_smarty_tpl->tpl_vars['reference']->value,'mod'=>'cheque'),$_smarty_tpl);?>
</li>
		<?php }?>
	<li><i class="icon-angle-right"></i><?php echo smartyTranslate(array('s'=>'An email has been sent to you with this information.','mod'=>'cheque'),$_smarty_tpl);?>
</li>
	<li><i class="icon-angle-right"></i> <strong><?php echo smartyTranslate(array('s'=>'Your order will be sent as soon as we receive your payment.','mod'=>'cheque'),$_smarty_tpl);?>
</strong></li>
	<li><i class="icon-angle-right"></i><?php echo smartyTranslate(array('s'=>'For any questions or for further information, please contact our','mod'=>'cheque'),$_smarty_tpl);?>
 <a class="cus-suport" href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('contact',true);?>
"><i class="icon-envelope-alt"></i><?php echo smartyTranslate(array('s'=>'customer support','mod'=>'cheque'),$_smarty_tpl);?>
</a>.</li>
    </ul>
    
	</div>
<?php }else{ ?>
	<p class="warning">
		<?php echo smartyTranslate(array('s'=>'We have noticed that there is a problem with your order. If you think this is an error, you can contact our','mod'=>'cheque'),$_smarty_tpl);?>
 
		<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('contact',true);?>
"><?php echo smartyTranslate(array('s'=>'customer service department.','mod'=>'cheque'),$_smarty_tpl);?>
</a>.
	</p>
<?php }?>
<?php }} ?>