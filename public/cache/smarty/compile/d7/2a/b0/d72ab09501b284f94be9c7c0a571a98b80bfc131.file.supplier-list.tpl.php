<?php /* Smarty version Smarty-3.1.13, created on 2013-08-13 12:25:14
         compiled from "/var/www/sites/gorillazen/public/themes/theme696/supplier-list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1748494412520a5dea0d7406-39047526%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd72ab09501b284f94be9c7c0a571a98b80bfc131' => 
    array (
      0 => '/var/www/sites/gorillazen/public/themes/theme696/supplier-list.tpl',
      1 => 1375718893,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1748494412520a5dea0d7406-39047526',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'errors' => 0,
    'nbSuppliers' => 0,
    'suppliers_list' => 0,
    'supplier' => 0,
    'link' => 0,
    'img_sup_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_520a5dea1d88e4_97906420',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_520a5dea1d88e4_97906420')) {function content_520a5dea1d88e4_97906420($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/var/www/sites/gorillazen/public/tools/smarty/plugins/modifier.escape.php';
?>

<?php $_smarty_tpl->_capture_stack[0][] = array('path', null, null); ob_start(); ?><?php echo smartyTranslate(array('s'=>'Suppliers:'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./breadcrumb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<h1><span><?php echo smartyTranslate(array('s'=>'Suppliers:'),$_smarty_tpl);?>
</span></h1>

<?php if (isset($_smarty_tpl->tpl_vars['errors']->value)&&$_smarty_tpl->tpl_vars['errors']->value){?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }else{ ?>
	<p class="clearfix title_manuf"><span class="title_shop"><?php if ($_smarty_tpl->tpl_vars['nbSuppliers']->value==0){?><?php echo smartyTranslate(array('s'=>'There are no suppliers.'),$_smarty_tpl);?>
<?php }else{ ?><?php if ($_smarty_tpl->tpl_vars['nbSuppliers']->value==1){?><?php echo smartyTranslate(array('s'=>'There is %d supplier.','sprintf'=>$_smarty_tpl->tpl_vars['nbSuppliers']->value),$_smarty_tpl);?>
<?php }else{ ?><?php echo smartyTranslate(array('s'=>'There are %d suppliers.','sprintf'=>$_smarty_tpl->tpl_vars['nbSuppliers']->value),$_smarty_tpl);?>
<?php }?><?php }?></span>
	</p>
    <div class="clear"></div>
<?php if ($_smarty_tpl->tpl_vars['nbSuppliers']->value>0){?>
	<ul id="suppliers_list" class="mnf_sup_list clearfix">
	<?php  $_smarty_tpl->tpl_vars['supplier'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['supplier']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['suppliers_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['supplier']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['supplier']->iteration=0;
 $_smarty_tpl->tpl_vars['supplier']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['supplier']->key => $_smarty_tpl->tpl_vars['supplier']->value){
$_smarty_tpl->tpl_vars['supplier']->_loop = true;
 $_smarty_tpl->tpl_vars['supplier']->iteration++;
 $_smarty_tpl->tpl_vars['supplier']->index++;
 $_smarty_tpl->tpl_vars['supplier']->first = $_smarty_tpl->tpl_vars['supplier']->index === 0;
 $_smarty_tpl->tpl_vars['supplier']->last = $_smarty_tpl->tpl_vars['supplier']->iteration === $_smarty_tpl->tpl_vars['supplier']->total;
?>
		<li class="shop_box clearfix <?php if ($_smarty_tpl->tpl_vars['supplier']->first){?>first_item<?php }elseif($_smarty_tpl->tpl_vars['supplier']->last){?>last_item<?php }else{ ?>item<?php }?>">
				<!-- logo -->
				<div class="logo">
				<?php if ($_smarty_tpl->tpl_vars['supplier']->value['nb_products']>0){?>
				<a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['link']->value->getsupplierLink($_smarty_tpl->tpl_vars['supplier']->value['id_supplier'],$_smarty_tpl->tpl_vars['supplier']->value['link_rewrite']), 'htmlall', 'UTF-8');?>
" title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['supplier']->value['name'], 'htmlall', 'UTF-8');?>
">
				<?php }?>
					<img src="<?php echo $_smarty_tpl->tpl_vars['img_sup_dir']->value;?>
<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['supplier']->value['image'], 'htmlall', 'UTF-8');?>
-medium_default.jpg" alt=""  />
				<?php if ($_smarty_tpl->tpl_vars['supplier']->value['nb_products']>0){?>
				</a>
				<?php }?>
				</div>
	<div class="left_side">
				<!-- name -->
				<h3>
					<?php if ($_smarty_tpl->tpl_vars['supplier']->value['nb_products']>0){?>
					<a class="product_link" href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['link']->value->getsupplierLink($_smarty_tpl->tpl_vars['supplier']->value['id_supplier'],$_smarty_tpl->tpl_vars['supplier']->value['link_rewrite']), 'htmlall', 'UTF-8');?>
">
					<?php }?>
					<?php echo smarty_modifier_escape($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['supplier']->value['name'],60,'...'), 'htmlall', 'UTF-8');?>

					<?php if ($_smarty_tpl->tpl_vars['supplier']->value['nb_products']>0){?>
					</a>
					<?php }?>
				</h3>
				<div>
				<?php if ($_smarty_tpl->tpl_vars['supplier']->value['nb_products']>0){?>
					<p class="product_desc">
				<?php }?>
						 <span><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', smarty_modifier_escape($_smarty_tpl->tpl_vars['supplier']->value['description'], 'htmlall', 'UTF-8')),160,'...');?>
</span>
                         <em class="des-small"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', smarty_modifier_escape($_smarty_tpl->tpl_vars['supplier']->value['description'], 'htmlall', 'UTF-8')),80,'...');?>
</em>
				<?php if ($_smarty_tpl->tpl_vars['supplier']->value['nb_products']>0){?>
				</p>
				<?php }?>
                
                				</div>
			</div>
                
						<div class="right_side">
				<p>
				<?php if ($_smarty_tpl->tpl_vars['supplier']->value['nb_products']>0){?>
					<a class="title_shop" href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['link']->value->getsupplierLink($_smarty_tpl->tpl_vars['supplier']->value['id_supplier'],$_smarty_tpl->tpl_vars['supplier']->value['link_rewrite']), 'htmlall', 'UTF-8');?>
">
				<?php }?>
					<span><?php if ($_smarty_tpl->tpl_vars['supplier']->value['nb_products']==1){?><?php echo smartyTranslate(array('s'=>'%d product','sprintf'=>intval($_smarty_tpl->tpl_vars['supplier']->value['nb_products'])),$_smarty_tpl);?>
<?php }else{ ?><?php echo smartyTranslate(array('s'=>'%d products','sprintf'=>intval($_smarty_tpl->tpl_vars['supplier']->value['nb_products'])),$_smarty_tpl);?>
<?php }?></span>
				<?php if ($_smarty_tpl->tpl_vars['supplier']->value['nb_products']>0){?>
					</a>
				<?php }?>
				</p>


			<?php if ($_smarty_tpl->tpl_vars['supplier']->value['nb_products']>0){?>
				<a class="button" href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['link']->value->getsupplierLink($_smarty_tpl->tpl_vars['supplier']->value['id_supplier'],$_smarty_tpl->tpl_vars['supplier']->value['link_rewrite']), 'htmlall', 'UTF-8');?>
"><?php echo smartyTranslate(array('s'=>'View products'),$_smarty_tpl);?>
</a>
			<?php }?>
			</div>
		</li>
	<?php } ?>
	</ul>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }?>
<?php }?>
<?php }} ?>