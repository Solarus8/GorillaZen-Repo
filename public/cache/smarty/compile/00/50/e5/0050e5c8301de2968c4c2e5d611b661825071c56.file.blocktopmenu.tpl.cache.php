<?php /* Smarty version Smarty-3.1.13, created on 2013-08-13 07:56:49
         compiled from "/var/www/sites/gorillazen/public/themes/theme696/modules/blocktopmenu/blocktopmenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:79160372851fe2c3c935e38-64290466%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0050e5c8301de2968c4c2e5d611b661825071c56' => 
    array (
      0 => '/var/www/sites/gorillazen/public/themes/theme696/modules/blocktopmenu/blocktopmenu.tpl',
      1 => 1376394921,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '79160372851fe2c3c935e38-64290466',
  'function' => 
  array (
  ),
  'cache_lifetime' => 31536000,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51fe2c3c979930_28060406',
  'variables' => 
  array (
    'MENU' => 0,
    'MENU_SEARCH' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51fe2c3c979930_28060406')) {function content_51fe2c3c979930_28060406($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/var/www/sites/gorillazen/public/tools/smarty/plugins/modifier.escape.php';
?><?php if ($_smarty_tpl->tpl_vars['MENU']->value!=''){?>
<div id="menu-wrap" class="clearfix">
	<div id="menu-trigger"><?php echo smartyTranslate(array('s'=>'Categories','mod'=>'blocktopmenu'),$_smarty_tpl);?>
<span class="menu-icon"></span></div>
	<ul id="menu-custom">
			<?php echo $_smarty_tpl->tpl_vars['MENU']->value;?>

			<?php if ($_smarty_tpl->tpl_vars['MENU_SEARCH']->value){?>
				<li class="search">
					<form id="searchbox" action="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('search');?>
" method="get">
								<input type="hidden" name="controller" value="search" />
						<input type="hidden" value="position" name="orderby"/>
						<input type="hidden" value="desc" name="orderway"/>
						<input type="text" name="search_query" value="<?php if (isset($_GET['search_query'])){?><?php echo smarty_modifier_escape($_GET['search_query'], 'htmlall', 'UTF-8');?>
<?php }?>" placeholder="Search..." />
					</form>
				</li>
			<?php }?>
		</ul>
	</div>
<?php }?><?php }} ?>