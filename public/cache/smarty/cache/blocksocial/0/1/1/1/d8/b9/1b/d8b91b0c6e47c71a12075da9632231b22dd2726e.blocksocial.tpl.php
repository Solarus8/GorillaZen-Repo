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
  'cache_lifetime' => 31536000,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5208c613a3f7c5_68433909',
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
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5208c613a3f7c5_68433909')) {function content_5208c613a3f7c5_68433909($_smarty_tpl) {?><section class="block blocksocial span9">
	<h4>Follow us</h4>
	<div id="menuwrapper">  
    <div id="menu"> 
	<!--<ul class="toggle_content">--><!-- toggle_content -->
		<a href="https://www.facebook.com/GorillaZen" class="menuitem"><img  src=../themes/theme696/css/modules/blocksocial/img/fb-logo.png></a>
		<a href="https://plus.google.com/102854063747993443901/posts" class="menuitem"><img  src=../themes/theme696/css/modules/blocksocial/img/google-plus.png></a>
		<a href="http://www.linkedin.com/company/3196485" class="menuitem"><img  src=../themes/theme696/css/modules/blocksocial/img/linkedinbig-logo.png></a>
		<a href="https://twitter.com/GorillaZen360" class="menuitem"><img  src=../themes/theme696/css/modules/blocksocial/img/twitterbig-logo.png></a>
		<a href="http://pinterest.com/gorillazen/pins/" class="menuitem"><img src=../themes/theme696/css/modules/blocksocial/img/pinterestbig-logo.png></a>
		<a href="https://www.youtube.com/GorillaZen360" class="menuitem"><img  src=../themes/theme696/css/modules/blocksocial/img/youtubebig-logo.png></a>
				<!--<li class="google"><a href="https://plus.google.com/102854063747993443901/posts">GOOGLE+</a></li>		<li class="linkedIn"><a href="http://www.linkedin.com/company/3196485"><img src=../themes/theme696/css/modules/blocksocial/img/linkedin-logo.png></a></li>		<li class="twitter"><a href="https://twitter.com/GorillaZen360"><img src=../themes/theme696/css/modules/blocksocial/img/twitter-logo.png></a></li>		<li class="pinterest"><a href="http://pinterest.com/gorillazen/pins/"><img src=../themes/theme696/css/modules/blocksocial/img/pinterest-logo.png></a></li>				<li class="youtube"><a href="https://www.youtube.com/GorillaZen360"><img src=../themes/theme696/css/modules/blocksocial/img/youtube-plus.png></a></li>-->
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