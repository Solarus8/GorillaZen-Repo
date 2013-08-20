{foreach from=$xml->item item=itemPos name=items}
  {if $itemPos->hook == 'home'}{assign var='HomeHook' value='true'}{/if}
{/foreach}
{if $page_name == "index"}
	{if isset($HomeHook) && $HomeHook=='true'}
	<div id="customcontent_home">
	  <ul class="customcontent-home row">
		{foreach from=$xml->item item=item name=items}
		  {if $item->hook == 'home'}
		  <li class="num-{$smarty.foreach.items.iteration} span4"><div class="border_l_r">
			{if $item->img && $item->url}
			  <a href="{$item->url}">
				<img src="{$img_path}{$item->img}" alt=""/>
			  </a>
			{/if}
			{if $item->img && !$item->url}
				<img src="{$img_path}{$item->img}" alt=""/>
			{/if}
			{if $item->html->$html_lang}    
			   <a class="contant-banner-link" href="{$item->url}">{$item->html->$html_lang}</a>
			{/if}
		  </div></li>
		  {/if}
		{/foreach}
	  </ul>
	</div>
	{/if}
{/if}