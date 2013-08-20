<?php /* Smarty version Smarty-3.1.13, created on 2013-08-05 12:22:49
         compiled from "/var/www/sites/gorillazen/public/themes/theme696/modules/blocksharefb/blocksharefb.tpl" */ ?>
<?php /*%%SmartyHeaderCode:40631427951ff47c955f6d1-36142463%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '22a19663b4fa861590622fe09b7e6d70f5706808' => 
    array (
      0 => '/var/www/sites/gorillazen/public/themes/theme696/modules/blocksharefb/blocksharefb.tpl',
      1 => 1375718439,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '40631427951ff47c955f6d1-36142463',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51ff47c95ae9b7_64881897',
  'variables' => 
  array (
    'product_link' => 0,
    'product_title' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ff47c95ae9b7_64881897')) {function content_51ff47c95ae9b7_64881897($_smarty_tpl) {?>
<li id="left_share_fb">
	<a href="http://www.facebook.com/sharer.php?u=<?php echo $_smarty_tpl->tpl_vars['product_link']->value;?>
&amp;t=<?php echo $_smarty_tpl->tpl_vars['product_title']->value;?>
" class="js-new-window"><i class="icon-facebook-sign"></i><?php echo smartyTranslate(array('s'=>'Share on Facebook','mod'=>'blocksharefb'),$_smarty_tpl);?>
</a>
</li><?php }} ?>