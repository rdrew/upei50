<?php
/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $secondary_menu_heading: The title of the menu used by the secondary links.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['branding']: Items for the branding region.
 * - $page['header']: Items for the header region.
 * - $page['navigation']: Items for the navigation region.
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 * @see omega_preprocess_page()
 */
?>

<?php $main_menu_tree = menu_tree(variable_get('menu_main_links_source', 'main-menu')); ?>
<?php $main_menu_tree1 = menu_tree(variable_get('menu_main_links_source', 'user-menu')); ?>

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
    <div class="navbar-start main-menu_container">
<?php print drupal_render($main_menu_tree); ?>
    </div>

    <div class="navbar-end user-menu-container">
    <?php print_r(drupal_render($main_menu_tree1)); ?>
    </div>
  </div>
</nav>
<!--_____ /Navbar _____-->
<div class="section-1">
<div class="content-1">
<div class="font-1">Celebrating 50 Years of UPEI</div>
<div class="content-2 font-2">In 2019, the University of Prince Edward Island is marking a major milestone, celebrating 50 years serving as a leader in education and research.</div>
</div>
<div class="content-3 font-2">
Learn More
<div class="content-4">&#8623;</div>
</div></div>

<div class="grid">

<div class="item-1">
<div class="content-5">
<div class="font-2">Volpi is a responsive CSS Grid layout you can hack around with and use for anything you'd like.<p>Volpi is free and open source and released under the MIT licence.<p>Get the Volpi HTML & CSS <a href="http://www.tipue.com/grids/">here</a>.</div>
</div></div>

<div class="item-2"></div>

<div class="item-3"><a class="click-grid" href="http://www.tipue.com/grids/"><div class="content-7">
<div class="font-3">Dolore duis</div>
<div class="font-4 content-6">Nulla, blandit tation odio magna tation nonummy, dolore euismod qui ut eum iriure consectetuer commodo suscipit dolore, dolor vero nulla luptatum vero iusto, dignissim.<p>Get Volpi here.</div>
</div></a></div>

<div class="item-4"></div>

<div class="item-5"><div class="content-7">
<div class="font-3">Et ad augue</div>
<div class="font-4 content-6">Wisi augue suscipit dolore aliquam iusto odio, dolore dolor ut ad magna exerci.<p>Consequat facilisis at, delenit feugait aliquip nulla ut hendrerit praesent facilisi consectetuer commodo quis ut lobortis tation et duis.</div>
</div></div>

</div>

<div class="section-2">
<div class="content-7">
<div class="font-3">Nulla Rex</div>
<div class="font-2 content-6">Vulputate dolor vel rex laoreet dolore.<p>Luptatum nisl esse aliquip, eu veniam quis ex accumsan illum nulla eros dolore vulputate.
<div class="content-4">&#9813;</div>
</div></div></div>


<div class="section-3">
<div class="grid">

<div class="item-6"><div class="content-8">
<div class="font-3">Feugiat dolore</div>
<div class="font-4 content-6">Suscipit autem wisi iusto, at feugiat in illum dolore magna velit eum. Laoreet nisl ullamcorper at.<p>Tation blandit molestie eum exerci vero nostrud iriure tincidunt.</div>
</div></div>

<div class="item-7"><div class="content-8">
<div class="font-3">Consequat</div>
<div class="font-4 content-6">Vel duis in minim eum zzril, minim odio suscipit dignissim accumsan nonummy erat consequat vero nisl.<p>Enim dignissim minim ut hendrerit dolore eu aliquam esse, feugiat augue.</div>
</div></div>

<div class="item-8"><div class="content-8">
<div class="font-3">Exerci vero</div>
<div class="font-4 content-6">Aliquip nibh duis veniam enim at ea feugait nulla vero ut molestie exerci vero nostrud.<p>Iriure duis ipsum erat accumsan minim delenit dolore amet blandit enim.</div>
</div></div>

<div class="item-7"><div class="content-8">
<div class="font-3">Laoreet ex</div>
<div class="font-4 content-6">Blandit in te, tation praesent ex zzril qui laoreet ad iriure iusto commodo, euismod dolore dolor.<p>Delenit consequat consequat tation erat nostrud in blandit vel laoreet lorem consectetuer.</div>
</div></div>

</div></div>

<div class="section-4 font-4">Get Volpi <a href="http://www.tipue.com/grids/">here</a></div>
