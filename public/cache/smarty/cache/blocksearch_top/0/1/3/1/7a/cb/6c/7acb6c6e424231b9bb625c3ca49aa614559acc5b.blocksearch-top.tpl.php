<?php /*%%SmartyHeaderCode:35057090051fe2c3c7d0990-03866904%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7acb6c6e424231b9bb625c3ca49aa614559acc5b' => 
    array (
      0 => '/var/www/sites/gorillazen/public/themes/theme696/modules/blocksearch/blocksearch-top.tpl',
      1 => 1375718418,
      2 => 'file',
    ),
    '04adb7624885edd9ab0356ee73d9a956d37e58b0' => 
    array (
      0 => '/var/www/sites/gorillazen/public/themes/theme696/modules/blocksearch/blocksearch-instantsearch.tpl',
      1 => 1375718416,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '35057090051fe2c3c7d0990-03866904',
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52033fa5967493_52542757',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52033fa5967493_52542757')) {function content_52033fa5967493_52542757($_smarty_tpl) {?><!-- block seach mobile -->
<!-- Block search module TOP -->
<section id="search_block_top" class="header-box">
	<form method="get" action="http://www.gorillazen.com/index.php?controller=search" id="searchbox">
		<p>
			<label for="search_query_top">Search</label>
			<input type="hidden" name="controller" value="search" />
			<input type="hidden" name="orderby" value="position" />
			<input type="hidden" name="orderway" value="desc" />
			<input class="search_query" type="text" id="search_query_top" name="search_query" value="" />
            <a href="javascript:document.getElementById('searchbox').submit();">Search</a>
			
	    </p>
	</form>
</section>
	<script type="text/javascript">
	// <![CDATA[
		$('document').ready( function() {
			$("#search_query_top")
				.autocomplete(
					'http://www.gorillazen.com/index.php?controller=search', {
						minChars: 3,
						max: 10,
						width: 300,
						selectFirst: false,
						scroll: false,
						dataType: "json",
						formatItem: function(data, i, max, value, term) {
							return value;
						},
							parse: function(data) {
							var mytab = new Array();
							for (var i = 0; i < data.length; i++)
								mytab[mytab.length] = { data: data[i], value: data[i].cname + ' > ' + data[i].pname };
							return mytab;
						},
						extraParams: {
							ajaxSearch: 1,
							id_lang: 1
						}
					}
				)
				.result(function(event, data, formatted) {
					$('#search_query_top').val(data.pname);
					document.location.href = data.product_link;
						})
		});
	// ]]>
	</script>

<!-- /Block search module TOP -->
<?php }} ?>