<?php /* Smarty version Smarty-3.1.13, created on 2013-08-05 12:18:16
         compiled from "/var/www/sites/gorillazen/public/modules/tmnivoslider/tmnivoslider.tpl" */ ?>
<?php /*%%SmartyHeaderCode:73336880151fe2d723db431-79011359%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '111428e46705510eb2d5fa66ffab21c62a43dca9' => 
    array (
      0 => '/var/www/sites/gorillazen/public/modules/tmnivoslider/tmnivoslider.tpl',
      1 => 1375719334,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '73336880151fe2d723db431-79011359',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51fe2d72454687_21119458',
  'variables' => 
  array (
    'page_name' => 0,
    'this_path' => 0,
    'xml' => 0,
    'home_link' => 0,
    'field1' => 0,
    'field2' => 0,
    'field3' => 0,
    'field4' => 0,
    'field5' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51fe2d72454687_21119458')) {function content_51fe2d72454687_21119458($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['page_name']->value=='index'){?>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['this_path']->value;?>
js/iview.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['this_path']->value;?>
js/jquery.easing.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['this_path']->value;?>
js/raphael-min.js"></script>
	<script type="text/javascript">
	
			$(document).ready(function(){
				$('#iview').iView({

				});
			});
	
	</script>
	<div class="container-slides">
		<div id="iview">
	<?php  $_smarty_tpl->tpl_vars['home_link'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['home_link']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['xml']->value->link; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['links']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['home_link']->key => $_smarty_tpl->tpl_vars['home_link']->value){
$_smarty_tpl->tpl_vars['home_link']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['links']['iteration']++;
?>
    <a class="sll" href="<?php echo $_smarty_tpl->tpl_vars['home_link']->value->url;?>
" data-iview:image="<?php echo $_smarty_tpl->tpl_vars['this_path']->value;?>
<?php echo $_smarty_tpl->tpl_vars['home_link']->value->img;?>
" >

            <div class="caption-width item<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['links']['iteration'];?>
" >
			<h2 class="iview-caption"  data-transition="expandRight"><?php echo $_smarty_tpl->tpl_vars['home_link']->value->{$_smarty_tpl->tpl_vars['field1']->value};?>
</h2>
			<h3 class="iview-caption"  data-transition="expandRight"><?php echo $_smarty_tpl->tpl_vars['home_link']->value->{$_smarty_tpl->tpl_vars['field2']->value};?>
</h3>
			<h4 class="iview-caption"  data-transition="expandRight"><?php echo $_smarty_tpl->tpl_vars['home_link']->value->{$_smarty_tpl->tpl_vars['field3']->value};?>
</h4>
			<h5 class="iview-caption"  data-transition="expandRight"><?php echo $_smarty_tpl->tpl_vars['home_link']->value->{$_smarty_tpl->tpl_vars['field4']->value};?>
</h5>
			<span class="slide_btn iview-caption"  data-transition="expandRight" href="<?php echo $_smarty_tpl->tpl_vars['home_link']->value->url;?>
"><?php echo $_smarty_tpl->tpl_vars['home_link']->value->{$_smarty_tpl->tpl_vars['field5']->value};?>
</span>
              </div> 
	 </a>
	 <?php } ?>   
</div></div>

<div class="clear"></div>
<?php }?><?php }} ?>