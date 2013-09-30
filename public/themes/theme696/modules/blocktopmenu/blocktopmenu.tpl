{if $MENU != ''}
<div id="menu-wrap" class="clearfix">
	<div id="menu-trigger">{l s='Categories' mod='blocktopmenu'}<span class="menu-icon"></span></div>
	<ul id="menu-custom">
			{$MENU}
            <li>
            <a href="#">SOCIAL MEDIA</a>
            	<ul>
                	<li><a href="https://www.facebook.com/GorillaZen" target="_blank">Facebook</a></li>
                    <li><a href="https://plus.google.com/102854063747993443901/posts" target="_blank">Google+</a></li>
                    <li><a href="http://www.linkedin.com/company/3196485" target="_blank">LinkedIn</a></li>
                    <li><a href="https://twitter.com/GorillaZen360" target="_blank">Twitter</a></li>
                    <li><a href="http://pinterest.com/gorillazen/pins/" target="_blank">Pinterest</a></li>
                    <li><a href="https://www.youtube.com/GorillaZen360" target="_blank">Youtube</a></li>
                    </ul>
             </li>
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