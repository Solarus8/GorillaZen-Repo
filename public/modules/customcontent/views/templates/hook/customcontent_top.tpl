{foreach from=$xml->item item=itemPos name=items}
  {if $itemPos->hook == 'top'}{assign var='TopHook' value='true'}{/if}
{/foreach}
{if $page_name == "index"}
	{if isset($TopHook) && $TopHook=='true'}
	<div id="customcontent_top">
	  <ul class="customcontent-top row">
		{foreach from=$xml->item item=item name=items}
		  {if $item->hook == 'top'}
		  <li class="num-{$smarty.foreach.items.iteration} span4">
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
		  </li>
		  {/if}
		{/foreach}
	  </ul>
	</div>
	{/if}
{/if}