{if $MENU != ''}
<div id="menu-wrap" class="clearfix">
	<div id="menu-trigger">{l s='Categories' mod='blocktopmenu'}<span class="menu-icon"></span></div>
	<ul id="menu-custom">
			{$MENU}
			{if $MENU_SEARCH}
				<li class="search">
					<form id="searchbox" action="{$link->getPageLink('search')}" method="get">
								<input type="hidden" name="controller" value="search" />
						<input type="hidden" value="position" name="orderby"/>
						<input type="hidden" value="desc" name="orderway"/>
						<input type="text" name="search_query" value="{if isset($smarty.get.search_query)}{$smarty.get.search_query|escape:'htmlall':'UTF-8'}{/if}" placeholder="Search..." />
					</form>
				</li>
			{/if}
		</ul>
	</div>
{/if}