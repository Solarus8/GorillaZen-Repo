<?php /* Smarty version Smarty-3.1.13, created on 2013-08-05 03:47:47
         compiled from "/var/www/sites/gorillazen/public/admin3117/themes/default/template/helpers/list/list_action_duplicate.tpl" */ ?>
<?php /*%%SmartyHeaderCode:196485001351ff58a399f825-28883619%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8ff0693d2fede5132700abc1adfb974d08206646' => 
    array (
      0 => '/var/www/sites/gorillazen/public/admin3117/themes/default/template/helpers/list/list_action_duplicate.tpl',
      1 => 1375514992,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '196485001351ff58a399f825-28883619',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'action' => 0,
    'confirm' => 0,
    'location_ok' => 0,
    'location_ko' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51ff58a39ae279_95428499',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ff58a39ae279_95428499')) {function content_51ff58a39ae279_95428499($_smarty_tpl) {?>
<a class="pointer" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" onclick="if (confirm('<?php echo $_smarty_tpl->tpl_vars['confirm']->value;?>
')) document.location = '<?php echo $_smarty_tpl->tpl_vars['location_ok']->value;?>
'; else document.location = '<?php echo $_smarty_tpl->tpl_vars['location_ko']->value;?>
';">
	<img src="../img/admin/duplicate.png" alt="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
</a><?php }} ?>