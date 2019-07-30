<?php
$main_menu_tree = menu_tree(variable_get('menu_main_links_source', 'main-menu'));
$main_menu_tree1 = menu_tree(variable_get('menu_main_links_source', 'user-menu'));
$image_a =  '/sites/upei50.dev.islandarchives.ca/themes/upei50/build/gfx/dalton_hall.jpg';
$image_b =  '/sites/upei50.dev.islandarchives.ca/themes/upei50/build/gfx/marian-college-harris-2.jpg';
$bg_image_a =  $page['content']['system_main']['nodes'][1]['field_background_image_a']['#items'][0]['uri'];
$bg_image_a_path =  file_create_url($bg_image_a);
$bg_image_b =  $page['content']['system_main']['nodes'][1]['field_background_image_b']['#items'][0]['uri'];
$bg_image_b_path =  file_create_url($bg_image_b);
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
<div class="content-3 font-2">
Learn More
<div class="content-4">&#8623;</div>
</div></div>
<!--_____ grid 01 _____-->
<div class="grid">
	<div class="full_width item-1">
		<div class="content-5">
			<?php print render($page['lp_site_description']); ?>
		</div>
	</div>
	<div class="block01 item-2">
		<div class="block-top-left content-7">
			<?php print render($page['lp_grid01']); ?>
		</div>
	</div>

	<div class="block02 item-3">
		<div class="block-top-left content-7">
			<?php print render($page['lp_grid02']); ?>
		</div>
	</div>
	<div class="block03 item-4">
		<div class="block-bottom-right content-7">
			<?php print render($page['lp_grid03']); ?>
		</div>
	</div>
	<div class="block04 item-5">
		<div class="block-bottom-left content-7">
			<?php print render($page['lp_grid04']); ?>
		</div>
	</div>
	<div class="block03 item-4">
		<div class="block-bottom-right content-7">
			<?php print render($page['lp_grid03']); ?>
		</div>
	</div>
	<div class="block04 item-5">
		<div class="block-bottom-left content-7">
			<?php print render($page['lp_grid04']); ?>
		</div>
	</div>
</div>
<!--_____ /grid 01 _____-->

<div class="section-2" style="background-image: url('<?php print $bg_image_b_path; ?>');">
	<div class="content-7">
		<div class="font-3">Nulla Rex</div>
		<div class="font-2 content-6">Vulputate dolor vel rex laoreet dolore.<p>Luptatum nisl esse aliquip, eu veniam quis ex accumsan illum nulla eros dolore vulputate.
		<div class="content-4">&#9813;</div>
		</div>
	</div>
</div>


<?php print render($page["content"]); ?>
  <footer class="l-footer" role="contentinfo">
    <?php print render($page['footer']); ?>
  </footer>
