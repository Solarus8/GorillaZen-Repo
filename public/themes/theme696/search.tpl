{*
* 2007-2013 PrestaShop
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
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2013 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}

{capture name=path}{l s='Search'}{/capture}
{include file="$tpl_dir./breadcrumb.tpl"}

<h1 {if isset($instant_search) && $instant_search}id="instant_search_results"{/if}><span>
{l s='Search'}&nbsp;{if $nbProducts > 0}"{if isset($search_query) && $search_query}{$search_query|escape:'htmlall':'UTF-8'}{elseif $search_tag}{$search_tag|escape:'htmlall':'UTF-8'}{elseif $ref}{$ref|escape:'htmlall':'UTF-8'}{/if}"{/if}</span>
{if isset($instant_search) && $instant_search}<span class="title_shop_block"><a href="#" class="close title_shop">{l s='Return to the previous page'}</a></span>{/if}</h1>

{include file="$tpl_dir./errors.tpl"}
{if !$nbProducts}
	<p class="warning">
		{if isset($search_query) && $search_query}
			{l s='No results were found for your search'}&nbsp;"{if isset($search_query)}{$search_query|escape:'htmlall':'UTF-8'}{/if}"
		{elseif isset($search_tag) && $search_tag}
			{l s='No results were found for your search'}&nbsp;"{$search_tag|escape:'htmlall':'UTF-8'}"
		{else}
			{l s='Please enter a search keyword'}
		{/if}
	</p>
{else}
<div class="titled_box">	<h2 class="nbresult"><span class="big">{if $nbProducts == 1}{l s='%d result has been found.' sprintf=$nbProducts|intval}{else}{l s='%d results have been found.' sprintf=$nbProducts|intval}{/if}</span></h2></div>
	{if !isset($instant_search) || (isset($instant_search) && !$instant_search)}
	<div class="sortPagiBar clearfix">
		{include file="$tpl_dir./product-sort.tpl"}
        {include file="./nbr-product-page.tpl"}
	</div>
	{/if}
	
	{include file="$tpl_dir./product-list.tpl" products=$search_products}
	{if !isset($instant_search) || (isset($instant_search) && !$instant_search)}
    <div class="bottom_pagination shop_box_row  clearfix">
    {include file="./product-compare.tpl"}{include file="$tpl_dir./pagination.tpl"}
    </div>
    {/if}
	
{/if}
