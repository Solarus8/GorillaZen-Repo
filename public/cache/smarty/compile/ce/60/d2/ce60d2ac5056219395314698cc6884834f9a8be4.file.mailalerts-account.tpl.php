<?php /* Smarty version Smarty-3.1.13, created on 2013-08-10 07:44:56
         compiled from "/var/www/sites/gorillazen/public/modules/mailalerts/views/templates/front/mailalerts-account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:237254135520627b8b590a1-48373405%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ce60d2ac5056219395314698cc6884834f9a8be4' => 
    array (
      0 => '/var/www/sites/gorillazen/public/modules/mailalerts/views/templates/front/mailalerts-account.tpl',
      1 => 1375528532,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '237254135520627b8b590a1-48373405',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'navigationPipe' => 0,
    'mailAlerts' => 0,
    'mailAlert' => 0,
    'img_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_520627b8c5dba9_84691889',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_520627b8c5dba9_84691889')) {function content_520627b8c5dba9_84691889($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/var/www/sites/gorillazen/public/tools/smarty/plugins/modifier.escape.php';
?>

<script type="text/javascript">
$('document').ready(function()
{
	$('img[rel^=ajax_id_mailalert_]').click(function()
	{
		var ids =  $(this).attr('rel').replace('ajax_id_mailalert_', '');
		ids = ids.split('_');
		var id_product_mail_alert = ids[0];
		var id_product_attribute_mail_alert = ids[1];
		var parent = $(this).parent().parent();

		$.ajax({
			url: "<?php echo $_smarty_tpl->tpl_vars['link']->value->getModuleLink('mailalerts','actions',array('process'=>'remove'));?>
",
			type: "POST",
			data: {
				'id_product': id_product_mail_alert,
				'id_product_attribute': id_product_attribute_mail_alert
			},
			success: function(result)
			{
				if (result == '0')
				{
					parent.fadeOut("normal", function()
					{
						parent.remove();
					});
				}
 		 	}
		});
	});
});
</script>

<?php $_smarty_tpl->_capture_stack[0][] = array('path', null, null); ob_start(); ?><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true);?>
"><?php echo smartyTranslate(array('s'=>'My account','mod'=>'mailalerts'),$_smarty_tpl);?>
</a><span class="navigation-pipe"><?php echo $_smarty_tpl->tpl_vars['navigationPipe']->value;?>
</span><?php echo smartyTranslate(array('s'=>'My alerts','mod'=>'mailalerts'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./breadcrumb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div id="mailalerts_block_account">
	<h2><?php echo smartyTranslate(array('s'=>'My alerts','mod'=>'mailalerts'),$_smarty_tpl);?>
</h2>
	<?php if ($_smarty_tpl->tpl_vars['mailAlerts']->value){?>
		<div>
			<?php  $_smarty_tpl->tpl_vars['mailAlert'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['mailAlert']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mailAlerts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['mailAlert']->key => $_smarty_tpl->tpl_vars['mailAlert']->value){
$_smarty_tpl->tpl_vars['mailAlert']->_loop = true;
?>
			<div class="mailalert clearfix">
				<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['mailAlert']->value['id_product'],null,null,null,null,$_smarty_tpl->tpl_vars['mailAlert']->value['id_shop']);?>
" class="product_img_link"><img src="<?php echo $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['mailAlert']->value['link_rewrite'],$_smarty_tpl->tpl_vars['mailAlert']->value['cover'],'small_default');?>
" alt=""/></a>
				<h3><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['mailAlert']->value['id_product'],null,null,null,null,$_smarty_tpl->tpl_vars['mailAlert']->value['id_shop']);?>
"><?php echo $_smarty_tpl->tpl_vars['mailAlert']->value['name'];?>
</a></h3>
				<div class="product_desc"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['mailAlert']->value['attributes_small'], 'htmlall', 'UTF-8');?>
</div>

				<div class="remove">
					<img rel="ajax_id_mailalert_<?php echo $_smarty_tpl->tpl_vars['mailAlert']->value['id_product'];?>
_<?php echo $_smarty_tpl->tpl_vars['mailAlert']->value['id_product_attribute'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
icon/delete.gif" alt="" class="icon" />
				</div>
			</div>
			<?php } ?>
		</div>
	<?php }else{ ?>
		<p class="warning"><?php echo smartyTranslate(array('s'=>'No mail alerts yet.','mod'=>'mailalerts'),$_smarty_tpl);?>
</p>
	<?php }?>

	<ul class="footer_links">
		<li class="fleft"><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
icon/my-account.gif" alt="" class="icon" /></a><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true);?>
"><?php echo smartyTranslate(array('s'=>'Back to Your Account','mod'=>'mailalerts'),$_smarty_tpl);?>
</a></li>
	</ul>
</div><?php }} ?>