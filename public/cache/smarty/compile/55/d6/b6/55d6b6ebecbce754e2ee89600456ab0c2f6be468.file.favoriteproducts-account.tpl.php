<?php /* Smarty version Smarty-3.1.13, created on 2013-08-10 07:45:10
         compiled from "/var/www/sites/gorillazen/public/modules/favoriteproducts/views/templates/front/favoriteproducts-account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1468339734520627c68a26a5-06507572%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '55d6b6ebecbce754e2ee89600456ab0c2f6be468' => 
    array (
      0 => '/var/www/sites/gorillazen/public/modules/favoriteproducts/views/templates/front/favoriteproducts-account.tpl',
      1 => 1375527613,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1468339734520627c68a26a5-06507572',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'navigationPipe' => 0,
    'favoriteProducts' => 0,
    'favoriteProduct' => 0,
    'img_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_520627c695ffb0_02565721',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_520627c695ffb0_02565721')) {function content_520627c695ffb0_02565721($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/var/www/sites/gorillazen/public/tools/smarty/plugins/modifier.escape.php';
?>

<script type="text/javascript">
$('document').ready(function()
{
	$('img[rel^=ajax_id_favoriteproduct_]').click(function()
	{
		var idFavoriteProduct =  $(this).attr('rel').replace('ajax_id_favoriteproduct_', '');
		var parent = $(this).parent().parent();

		$.ajax({
			url: "<?php echo $_smarty_tpl->tpl_vars['link']->value->getModuleLink('favoriteproducts','actions',array('process'=>'remove'),true);?>
",
			type: "POST",
			data: {
				'id_product': idFavoriteProduct,
				'ajax': true
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

<?php $_smarty_tpl->_capture_stack[0][] = array('path', null, null); ob_start(); ?>
	<a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), 'htmlall', 'UTF-8');?>
">
		<?php echo smartyTranslate(array('s'=>'My account','mod'=>'favoriteproducts'),$_smarty_tpl);?>
</a>
		<span class="navigation-pipe"><?php echo $_smarty_tpl->tpl_vars['navigationPipe']->value;?>
</span><?php echo smartyTranslate(array('s'=>'My favorite products.','mod'=>'favoriteproducts'),$_smarty_tpl);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./breadcrumb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div id="favoriteproducts_block_account">
	<h2><?php echo smartyTranslate(array('s'=>'My favorite products.','mod'=>'favoriteproducts'),$_smarty_tpl);?>
</h2>
	<?php if ($_smarty_tpl->tpl_vars['favoriteProducts']->value){?>
		<div>
			<?php  $_smarty_tpl->tpl_vars['favoriteProduct'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['favoriteProduct']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['favoriteProducts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['favoriteProduct']->key => $_smarty_tpl->tpl_vars['favoriteProduct']->value){
$_smarty_tpl->tpl_vars['favoriteProduct']->_loop = true;
?>
			<div class="favoriteproduct clearfix">
				<a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['favoriteProduct']->value['id_product'],null,null,null,null,$_smarty_tpl->tpl_vars['favoriteProduct']->value['id_shop']), 'htmlall', 'UTF-8');?>
" class="product_img_link">
					<img src="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['favoriteProduct']->value['link_rewrite'],$_smarty_tpl->tpl_vars['favoriteProduct']->value['image'],'medium_default'), 'htmlall', 'UTF-8');?>
" alt=""/></a>
				<h3><a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['favoriteProduct']->value['id_product'],null,null,null,null,$_smarty_tpl->tpl_vars['favoriteProduct']->value['id_shop']), 'htmlall', 'UTF-8');?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['favoriteProduct']->value['name'], 'htmlall', 'UTF-8');?>
</a></h3>
				<div class="product_desc"><?php echo smarty_modifier_escape(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['favoriteProduct']->value['description_short']), 'htmlall', 'UTF-8');?>
</div>

				<div class="remove">
					<img rel="ajax_id_favoriteproduct_<?php echo $_smarty_tpl->tpl_vars['favoriteProduct']->value['id_product'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
icon/delete.gif" alt="" class="icon" />
				</div>
			</div>
			<?php } ?>
		</div>
	<?php }else{ ?>
		<p class="warning"><?php echo smartyTranslate(array('s'=>'No favorite products have been determined just yet. ','mod'=>'favoriteproducts'),$_smarty_tpl);?>
</p>
	<?php }?>

	<ul class="footer_links">
		<li class="fleft">
			<a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), 'htmlall', 'UTF-8');?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
icon/my-account.gif" alt="" class="icon" /></a>
			<a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), 'htmlall', 'UTF-8');?>
"><?php echo smartyTranslate(array('s'=>'Back to your account.','mod'=>'favoriteproducts'),$_smarty_tpl);?>
</a></li>
	</ul>
</div><?php }} ?>