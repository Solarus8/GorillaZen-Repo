<?php /* Smarty version Smarty-3.1.13, created on 2013-08-03 12:33:47
         compiled from "/var/www/sites/gorillazen/public/admin/themes/default/template/controllers/translations/auto_translate.tpl" */ ?>
<?php /*%%SmartyHeaderCode:26942940651fcf8ab8f96a2-51068956%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6969e5b0651648a001db2267085d99d76ea1ff60' => 
    array (
      0 => '/var/www/sites/gorillazen/public/admin/themes/default/template/controllers/translations/auto_translate.tpl',
      1 => 1375514832,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26942940651fcf8ab8f96a2-51068956',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'language_code' => 0,
    'not_available' => 0,
    'tooltip_title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51fcf8ab9042c4_48831649',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51fcf8ab9042c4_48831649')) {function content_51fcf8ab9042c4_48831649($_smarty_tpl) {?>

<input type="button" class="button" id="translate_all" value="<?php echo smartyTranslate(array('s'=>'Translate with Google (experimental).'),$_smarty_tpl);?>
" />
<script type="text/javascript">
	var gg_translate = {
		language_code : '<?php echo $_smarty_tpl->tpl_vars['language_code']->value;?>
',
		not_available : '<?php echo $_smarty_tpl->tpl_vars['not_available']->value;?>
',
		tooltip_title : '<?php echo $_smarty_tpl->tpl_vars['tooltip_title']->value;?>
'
	};
</script><?php }} ?>