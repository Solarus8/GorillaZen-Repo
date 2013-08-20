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
    <a class="sll" href="{$home_link->url}" data-iview:image="{$this_path}{$home_link->img}" >

            <div class="caption-width item{$smarty.foreach.links.iteration}" >
			<h2 class="iview-caption"  data-transition="expandRight">{$home_link->$field1}</h2>
			<h3 class="iview-caption"  data-transition="expandRight">{$home_link->$field2}</h3>
			<h4 class="iview-caption"  data-transition="expandRight">{$home_link->$field3}</h4>
			<h5 class="iview-caption"  data-transition="expandRight">{$home_link->$field4}</h5>
			<span class="slide_btn iview-caption"  data-transition="expandRight" href="{$home_link->url}">{$home_link->$field5}</span>
              </div> 
	 </a>
	 {/foreach}   
</div></div>

<div class="clear"></div>
{/if}