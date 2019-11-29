<?php
$main_menu_tree = menu_tree(variable_get('menu_main_links_source', 'main-menu'));
$main_menu_tree1 = menu_tree(variable_get('menu_main_links_source', 'user-menu'));
$image_a =  '/sites/upei50.dev.islandarchives.ca/themes/upei50/build/gfx/dalton_hall.jpg';
$image_b =  '/sites/upei50.dev.islandarchives.ca/themes/upei50/build/gfx/marian-college-harris-2.jpg';
$bg_image_a =  $page['content']['system_main']['nodes'][1]['field_background_image_a']['#items'][0]['uri'];
$bg_image_a_path =  file_create_url($bg_image_a);
$bg_image_b =  $page['content']['system_main']['nodes'][1]['field_background_image_b']['#items'][0]['uri'];
$bg_image_b_path =  file_create_url($bg_image_b);
//kpr($page);
?>

<!--_____ Navbar region layout _____-->

<!--_____ Navbar _____-->
<nav class="navbar" role="navigation" aria-label="main navigation">

  <div class="navbar-brand">
      <?php if ($logo): ?>
        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" class="navbar-item site-logo"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" /></a>
      <?php endif; ?>
    <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>


  <div id="navbarBasicExample" class="navbar-menu">
    <div class="navbar-start main-menu">
<?php print drupal_render($main_menu_tree); ?>
    </div>

    <div class="navbar-end user-menu">
    <?php print_r(drupal_render($main_menu_tree1)); ?>
    </div>
  </div>
</nav>
<!--_____ /Navbar _____-->

<!-- hero text block -->
<div class="hero-text-block section-1" style="background-image: url('<?php print $bg_image_a_path; ?>');">
<div class="content-1">
<div class="font-1 site-title">
<?php print render($site_name); ?>
</div>

<div class="content-2 font-2">
<?php print render($content['field_subtitle_text']); ?>
</div>
</div>
<!-- /hero text block -->
<div class="content-3 font-2" ><a href="#grid">
See Exhibits
<div class="content-4">&#8623;</div>
</a></div></div>
<!--_____ grid 01 _____-->
<div id="grid" class="site-description">
	<div class="full_width item-1">
		<div class="content-5">
			<?php print render($page['lp_site_description']); ?>
		</div>
	</div>
</div>
<!--_____ /grid 01 _____-->



<?php print render($page["content"]); ?>
<div class="section-2" style="background-image: url('<?php print $bg_image_b_path; ?>');">
		<div class="content-7">
	<div class="lp_bottom_branding">
			<div class="font-3">Celebrating 50 Years of UPEI</div>
			<div class="font-2 content-6">

        <div class="upei-logo">
<a href="https://upei.ca">

<img src="/sites/50.library.upei.ca/themes/upei50/dist/gfx/RLibrary_V_W.png" alt="">
	</div>
	550 University Avenue, Charlottetown
	Prince Edward Island, Canada C1A 4P3
	</div>
</a>
        </div>
      </div>
    </div>
    <footer class="l-footer" role="contentinfo">
      <?php print render($page[ 'footer']); ?>
    </footer>
