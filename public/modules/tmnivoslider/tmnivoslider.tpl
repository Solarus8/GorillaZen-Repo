{if $page_name == 'index'}
    <script type="text/javascript" src="{$this_path}js/iview.js"></script>
    <script type="text/javascript" src="{$this_path}js/jquery.easing.js"></script>
    <script type="text/javascript" src="{$this_path}js/raphael-min.js"></script>
	<script type="text/javascript">
	{literal}
			$(document).ready(function(){
				$('#iview').iView({

				});
			});
	{/literal}
	</script>
	<div class="container-slides">
		<div id="iview">
	{foreach from=$xml->link item=home_link name=links}

    {* This was an 'a' tag - changed to div to remove linking behavior *}
    <div class="sll" href="{$home_link->url}" data-iview:image="{$this_path}{$home_link->img}" >

            <div class="caption-width item{$smarty.foreach.links.iteration}" >
			<h2 class="iview-caption"  data-transition="expandRight">{$home_link->$field1}</h2>
			<h3 class="iview-caption"  data-transition="expandRight">{$home_link->$field2}</h3>
			<h4 class="iview-caption"  data-transition="expandRight">{$home_link->$field3}</h4>
			
            {if isset($home_link->$field4) }
            <h2 class="iview-caption">&nbsp;</h2>
            <div class="iview-caption hotspot" data-transition="expandRight" onmouseover="slider_tooltip.show('{$home_link->$field4}');" onmouseout="slider_tooltip.hide();"></div>
            {/if}
			<span class="slide_btn iview-caption"  data-transition="expandRight" href="{$home_link->url}">{$home_link->$field5}</span>
            
            </div>
	 </div>
	 {/foreach}   
</div></div>
<script type="text/javascript" src="{$this_path}js/script.js"></script>
<div class="clear"></div>
{/if}