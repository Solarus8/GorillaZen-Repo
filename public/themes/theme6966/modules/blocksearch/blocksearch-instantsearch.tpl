{if $instantsearch}
	<script type="text/javascript">
	// <![CDATA[
		function tryToCloseInstantSearch() {
			if ($('#old_center_column').length > 0)
			{
				$('#center_column').remove();
				$('#old_center_column').attr('id', 'center_column');
				$('body').removeClass('instant_search');
				$('#center_column').show();
				return false;
			}
		}
		
		instantSearchQueries = new Array();
		function stopInstantSearchQueries(){
			for(i=0;i<instantSearchQueries.length;i++) {
				instantSearchQueries[i].abort();
			}
			instantSearchQueries = new Array();
		}
		
		$("#search_query_{$blocksearch_type}").keyup(function(){
			$('#old_center_column').next().removeClass('span12').addClass('span9');
			if($(this).val().length > 0){
				stopInstantSearchQueries();
				instantSearchQuery = $.ajax({
					url: '{if $search_ssl == 1}{$link->getPageLink('search', true)}{else}{$link->getPageLink('search')}{/if}',
					data: {
						instantSearch: 1,
						id_lang: {$cookie->id_lang},
						q: $(this).val()
					},
					dataType: 'html',
					type: 'POST',
					success: function(data){
						if($("#search_query_{$blocksearch_type}").val().length > 0)
						{
							tryToCloseInstantSearch();
							$('#center_column').attr('id', 'old_center_column');
							$('#old_center_column').after('<div id="center_column" class="instant ' + $('#old_center_column').attr('class') + '">'+data+'</div>');
							$('#old_center_column').next().removeClass('span12').addClass('span9');
							$('body').addClass('instant_search');
							$('#old_center_column').hide();
							$("#instant_search_results a.close").click(function() {
								$("#search_query_{$blocksearch_type}").val('');
								$('body').removeClass('instant_search');
								return tryToCloseInstantSearch();
							});
							return false;
						}
						else
							tryToCloseInstantSearch();
					}
				});
				instantSearchQueries.push(instantSearchQuery);
			}
			else
				tryToCloseInstantSearch();
		});
	// ]]>
	</script>
{/if}
{if $ajaxsearch}
	<script type="text/javascript">
	// <![CDATA[
		$('document').ready( function() {
			$("#search_query_{$blocksearch_type}")
				.autocomplete(
					'{if $search_ssl == 1}{$link->getPageLink('search', true)}{else}{$link->getPageLink('search')}{/if}', {
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
							id_lang: {$cookie->id_lang}
						}
					}
				)
				.result(function(event, data, formatted) {
					$('#search_query_{$blocksearch_type}').val(data.pname);
					document.location.href = data.product_link;
						})
		});
	// ]]>
	</script>
{/if}