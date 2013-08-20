<?php /*%%SmartyHeaderCode:100208800651fe2c3c754235-69875995%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bffb6faa66f5be7ab135d3a5fd7cbef054eb990e' => 
    array (
      0 => '/var/www/sites/gorillazen/public/themes/theme696/modules/blockpermanentlinks/blockpermanentlinks-header.tpl',
      1 => 1376138895,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '100208800651fe2c3c754235-69875995',
  'cache_lifetime' => 31536000,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52063694a261f8_71058044',
  'variables' => 
  array (
    'link' => 0,
    'logged' => 0,
    'come_from' => 0,
    'meta_title' => 0,
  ),
  'has_nocache_code' => false,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52063694a261f8_71058044')) {function content_52063694a261f8_71058044($_smarty_tpl) {?>
<!-- Block permanent links module HEADER -->
<section class="header-box blockpermanentlinks-header">
    <ul id="header_links">  
        <li><a href="http://www.gorillazen.com/index.php" class="header_links_home">home</a></li>
        <li id="header_link_contact"><a href="http://www.gorillazen.com/index.php?controller=contact" title="contact">contact</a></li>
        <li id="header_link_sitemap"><a href="http://www.gorillazen.com/index.php?controller=sitemap" title="sitemap">sitemap</a></li>
        		<li class="sitemap"><a href="http://www.gorillazen.com/index.php?controller=my-account">MyAccount</a></li>
				<li id="header_link_bookmark">
            <script type="text/javascript">writeBookmarkLink('http://www.gorillazen.com/index.php', 'Gorilla Zen', 'bookmark');</script>
        </li>

        
    </ul>

    <div class="mobile-link-top header-button">
        <h4>
             <span class="title-hed"></span><span class="arrow_header_top_menu arrow_header_top"></span>
        </h4>
        <ul id="mobilelink" class="list_header">
            <li><a href="http://www.gorillazen.com/index.php" class="header_links_home">home</a></li>
            <li id="header_link_contact"><a href="http://www.gorillazen.com/index.php?controller=contact" title="contact">contact</a></li>
            <li id="header_link_sitemap"><a href="http://www.gorillazen.com/index.php?controller=sitemap" title="sitemap">sitemap</a></li>
            <li id="header_link_bookmark">
                <script type="text/javascript">writeBookmarkLink('http://www.gorillazen.com/index.php', 'Gorilla Zen', 'bookmark');</script>
            </li>
		</ul>
    </div>
</section>
<!-- /Block permanent links module HEADER -->


<?php }} ?>