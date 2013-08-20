<?php /* Smarty version Smarty-3.1.13, created on 2013-08-05 12:09:19
         compiled from "/var/www/sites/gorillazen/public/themes/theme696/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:84512687251fe2c3d8c5857-33249657%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bf6472affa4928ed29b13df192b0b1fd65627f1b' => 
    array (
      0 => '/var/www/sites/gorillazen/public/themes/theme696/footer.tpl',
      1 => 1375717339,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '84512687251fe2c3d8c5857-33249657',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51fe2c3d925f52_13378234',
  'variables' => 
  array (
    'content_only' => 0,
    'HOOK_RIGHT_COLUMN' => 0,
    'HOOK_FOOTER' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51fe2c3d925f52_13378234')) {function content_51fe2c3d925f52_13378234($_smarty_tpl) {?>

		<?php if (!$_smarty_tpl->tpl_vars['content_only']->value){?>
				</div>

<!-- Right -->
<aside id="right_column"  class="span3 column right_home">   
              <?php echo $_smarty_tpl->tpl_vars['HOOK_RIGHT_COLUMN']->value;?>

</aside>
</div>
	</div>
    	</div>
<div class="footer-bg-mob">
    <footer class="container ">
       <div class="row modules">
           <?php echo $_smarty_tpl->tpl_vars['HOOK_FOOTER']->value;?>

      </div>
    </footer> 
</div>          
	</div>
		</div>
  <?php }?>
</body>
</html>
<?php }} ?>