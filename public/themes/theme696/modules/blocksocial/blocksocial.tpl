{*
* 2007-2013 GORILLA ZEN, LLC™
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade GORILLA ZEN, LLC™ to newer
* versions in the future. If you wish to customize GORILLA ZEN, LLC™ for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author GORILLA ZEN, LLC™ SA <contact@prestashop.com>
*  @copyright  2007-2013 GORILLA ZEN, LLC™ SA

*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of GORILLA ZEN, LLC™ SA 
*}
<section class="block blocksocial span12">
	<h4>{l s='Follow us' mod='blocksocial'}</h4>
	<div id="menuwrapper">  
    <div id="menu"> 
	<!--<ul class="toggle_content">--><!-- toggle_content -->
		{if $facebook_url != ''}<a href="{$facebook_url|escape:html:'UTF-8'}" target="_blank" class="menuitem">{l s='<img  src=../themes/theme696/css/modules/blocksocial/img/fb-logo.png>' mod='blocksocial'}</a>
		{if $google_url != ''}<a href="{$google_url|escape:html:'UTF-8'}" target="_blank" class="menuitem">{l s='<img  src=../themes/theme696/css/modules/blocksocial/img/google-plus.png>' mod='blocksocial'}</a>
		{if $linkedIn_url != ''}<a href="{$linkedIn_url|escape:html:'UTF-8'}" target="_blank" class="menuitem">{l s='<img  src=../themes/theme696/css/modules/blocksocial/img/linkedinbig-logo.png>' mod='blocksocial'}</a>
		{if $twitter_url != ''}<a href="{$twitter_url|escape:html:'UTF-8'}" target="_blank" class="menuitem">{l s='<img  src=../themes/theme696/css/modules/blocksocial/img/twitterbig-logo.png>' mod='blocksocial'}</a>
		{if $pinterest_url != ''}<a href="{$pinterest_url|escape:html:'UTF-8'}" target="_blank" class="menuitem">{l s='<img src=../themes/theme696/css/modules/blocksocial/img/pinterestbig-logo.png>' mod='blocksocial'}</a>
		{if $youtube_url != ''}<a href="{$youtube_url|escape:html:'UTF-8'}" target="_blank" class="menuitem">{l s='<img  src=../themes/theme696/css/modules/blocksocial/img/youtubebig-logo.png>' mod='blocksocial'}</a>
		{if $rss_url != ''}<a href="{$rss_url|escape:html:'UTF-8'}">{l s='RSS' mod='blocksocial'}</a>{/if}{/if}{/if}{/if}{/if}{/if}{/if}
		<!--{if $google_url != ''}<li class="google"><a href="{$google_url|escape:html:'UTF-8'}">{l s='GOOGLE+' mod='blocksocial'}</a></li>{/if}
		{if $linkedIn_url != ''}<li class="linkedIn"><a href="{$linkedIn_url|escape:html:'UTF-8'}">{l s='<img src=../themes/theme696/css/modules/blocksocial/img/linkedin-logo.png>' mod='blocksocial'}</a></li>{/if}
		{if $twitter_url != ''}<li class="twitter"><a href="{$twitter_url|escape:html:'UTF-8'}">{l s='<img src=../themes/theme696/css/modules/blocksocial/img/twitter-logo.png>' mod='blocksocial'}</a></li>{/if}
		{if $pinterest_url != ''}<li class="pinterest"><a href="{$pinterest_url|escape:html:'UTF-8'}">{l s='<img src=../themes/theme696/css/modules/blocksocial/img/pinterest-logo.png>' mod='blocksocial'}</a></li>{/if}
		{if $rss_url != ''}<li class="rss"><a href="{$rss_url|escape:html:'UTF-8'}">{l s='RSS' mod='blocksocial'}</a></li>{/if}
		{if $youtube_url != ''}<li class="youtube"><a href="{$youtube_url|escape:html:'UTF-8'}">{l s='<img src=../themes/theme696/css/modules/blocksocial/img/youtube-plus.png>' mod='blocksocial'}</a></li>{/if}-->
	</div></div>
<!--	</ul>-->
	<script language="javascript">
	{literal}
	$(document).ready(function(){  
    $('.menuitem img').animate({width: 100}, 0); 
    $('.menuitem').mouseover(function(){ 
  
        gridimage = $(this).find('img'); 
        gridimage.stop().animate({width: 160}, 150); 
  
    }).mouseout(function(){ 
  
        gridimage.stop().animate({width: 100}, 150); 
  
    });
});  
	{/literal}
	</script>
</section> 
