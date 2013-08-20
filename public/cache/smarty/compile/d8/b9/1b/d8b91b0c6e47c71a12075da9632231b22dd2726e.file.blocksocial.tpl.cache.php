<?php /* Smarty version Smarty-3.1.13, created on 2013-08-12 07:25:07
         compiled from "/var/www/sites/gorillazen/public/themes/theme696/modules/blocksocial/blocksocial.tpl" */ ?>
<?php /*%%SmartyHeaderCode:101916999351fe2c3d63e136-25020482%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd8b91b0c6e47c71a12075da9632231b22dd2726e' => 
    array (
      0 => '/var/www/sites/gorillazen/public/themes/theme696/modules/blocksocial/blocksocial.tpl',
      1 => 1376306702,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '101916999351fe2c3d63e136-25020482',
  'function' => 
  array (
  ),
  'cache_lifetime' => 31536000,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51fe2c3d691eb7_06388041',
  'variables' => 
  array (
    'facebook_url' => 0,
    'google_url' => 0,
    'linkedIn_url' => 0,
    'twitter_url' => 0,
    'pinterest_url' => 0,
    'youtube_url' => 0,
    'rss_url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51fe2c3d691eb7_06388041')) {function content_51fe2c3d691eb7_06388041($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/var/www/sites/gorillazen/public/tools/smarty/plugins/modifier.escape.php';
?>
<section class="block blocksocial span9">
	<h4><?php echo smartyTranslate(array('s'=>'Follow us','mod'=>'blocksocial'),$_smarty_tpl);?>
</h4>
	<div id="menuwrapper">  
    <div id="menu"> 
	<!--<ul class="toggle_content">--><!-- toggle_content -->
		<?php if ($_smarty_tpl->tpl_vars['facebook_url']->value!=''){?><a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['facebook_url']->value, 'html', 'UTF-8');?>
" class="menuitem"><?php echo smartyTranslate(array('s'=>'<img  src=../themes/theme696/css/modules/blocksocial/img/fb-logo.png>','mod'=>'blocksocial'),$_smarty_tpl);?>
</a>
		<?php if ($_smarty_tpl->tpl_vars['google_url']->value!=''){?><a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['google_url']->value, 'html', 'UTF-8');?>
" class="menuitem"><?php echo smartyTranslate(array('s'=>'<img  src=../themes/theme696/css/modules/blocksocial/img/google-plus.png>','mod'=>'blocksocial'),$_smarty_tpl);?>
</a>
		<?php if ($_smarty_tpl->tpl_vars['linkedIn_url']->value!=''){?><a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['linkedIn_url']->value, 'html', 'UTF-8');?>
" class="menuitem"><?php echo smartyTranslate(array('s'=>'<img  src=../themes/theme696/css/modules/blocksocial/img/linkedinbig-logo.png>','mod'=>'blocksocial'),$_smarty_tpl);?>
</a>
		<?php if ($_smarty_tpl->tpl_vars['twitter_url']->value!=''){?><a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['twitter_url']->value, 'html', 'UTF-8');?>
" class="menuitem"><?php echo smartyTranslate(array('s'=>'<img  src=../themes/theme696/css/modules/blocksocial/img/twitterbig-logo.png>','mod'=>'blocksocial'),$_smarty_tpl);?>
</a>
		<?php if ($_smarty_tpl->tpl_vars['pinterest_url']->value!=''){?><a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['pinterest_url']->value, 'html', 'UTF-8');?>
" class="menuitem"><?php echo smartyTranslate(array('s'=>'<img src=../themes/theme696/css/modules/blocksocial/img/pinterestbig-logo.png>','mod'=>'blocksocial'),$_smarty_tpl);?>
</a>
		<?php if ($_smarty_tpl->tpl_vars['youtube_url']->value!=''){?><a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['youtube_url']->value, 'html', 'UTF-8');?>
" class="menuitem"><?php echo smartyTranslate(array('s'=>'<img  src=../themes/theme696/css/modules/blocksocial/img/youtubebig-logo.png>','mod'=>'blocksocial'),$_smarty_tpl);?>
</a>
		<?php if ($_smarty_tpl->tpl_vars['rss_url']->value!=''){?><a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['rss_url']->value, 'html', 'UTF-8');?>
"><?php echo smartyTranslate(array('s'=>'RSS','mod'=>'blocksocial'),$_smarty_tpl);?>
</a><?php }?><?php }?><?php }?><?php }?><?php }?><?php }?><?php }?>
		<!--<?php if ($_smarty_tpl->tpl_vars['google_url']->value!=''){?><li class="google"><a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['google_url']->value, 'html', 'UTF-8');?>
"><?php echo smartyTranslate(array('s'=>'GOOGLE+','mod'=>'blocksocial'),$_smarty_tpl);?>
</a></li><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['linkedIn_url']->value!=''){?><li class="linkedIn"><a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['linkedIn_url']->value, 'html', 'UTF-8');?>
"><?php echo smartyTranslate(array('s'=>'<img src=../themes/theme696/css/modules/blocksocial/img/linkedin-logo.png>','mod'=>'blocksocial'),$_smarty_tpl);?>
</a></li><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['twitter_url']->value!=''){?><li class="twitter"><a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['twitter_url']->value, 'html', 'UTF-8');?>
"><?php echo smartyTranslate(array('s'=>'<img src=../themes/theme696/css/modules/blocksocial/img/twitter-logo.png>','mod'=>'blocksocial'),$_smarty_tpl);?>
</a></li><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['pinterest_url']->value!=''){?><li class="pinterest"><a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['pinterest_url']->value, 'html', 'UTF-8');?>
"><?php echo smartyTranslate(array('s'=>'<img src=../themes/theme696/css/modules/blocksocial/img/pinterest-logo.png>','mod'=>'blocksocial'),$_smarty_tpl);?>
</a></li><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['rss_url']->value!=''){?><li class="rss"><a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['rss_url']->value, 'html', 'UTF-8');?>
"><?php echo smartyTranslate(array('s'=>'RSS','mod'=>'blocksocial'),$_smarty_tpl);?>
</a></li><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['youtube_url']->value!=''){?><li class="youtube"><a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['youtube_url']->value, 'html', 'UTF-8');?>
"><?php echo smartyTranslate(array('s'=>'<img src=../themes/theme696/css/modules/blocksocial/img/youtube-plus.png>','mod'=>'blocksocial'),$_smarty_tpl);?>
</a></li><?php }?>-->
	</div></div>
<!--	</ul>-->
	<script language="javascript">
	
	$(document).ready(function(){  
    $('.menuitem img').animate({width: 100}, 0); 
    $('.menuitem').mouseover(function(){ 
  
        gridimage = $(this).find('img'); 
        gridimage.stop().animate({width: 160}, 150); 
  
    }).mouseout(function(){ 
  
        gridimage.stop().animate({width: 100}, 150); 
  
    });
});  
	
	</script>
</section> 
<?php }} ?>