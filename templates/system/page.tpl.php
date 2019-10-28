<?php
    $main_menu_tree = menu_tree(variable_get('menu_main_links_source', 'main-menu'));
    $main_menu_tree1 = menu_tree(variable_get('menu_main_links_source', 'user-menu'));
 ?>


<div class="l-page">
  <header class="l-header" role="banner">
    <div class="l-navbar">
      <nav class="navbar" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
          <?php if ($logo): ?> <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"
          rel="home" class="navbar-item site-logo"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" /></a>

          <?php
          endif; ?> <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false"
            data-target="navbarBasicExample">
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
      <?php print render($page[ 'navbar']); ?>
    </div>
    <?php print render($page[ 'header']); ?>
    <?php print render($page[ 'navigation']); ?>
  </header>
  <section class="hero is-light">
    <div class="internal-page-hero hero-body">
      <div class="container">
        <?php if ($site_name || $site_slogan): ?>
        <?php if ($site_name): ?>
         <h1 class="title site-name">
            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
          </h1>

        <?php endif; ?>
        <?php if ($site_slogan): ?>
         <h2 class="subtitle site-slogan"><?php print $site_slogan; ?></h2>

        <?php endif; ?>
        <?php endif; ?>
      </div>
    </div>
  </section>
  <div class="l-main">
    <div class="content l-content" role="main">
      <?php print render($page[ 'highlighted']); ?>
      <!-- <?php print $breadcrumb; ?>
--> <a id="main-content"></a>

      <?php print render($title_prefix); ?>
      <?php if ($title): ?>
       <h1><?php print $title; ?></h1>

      <?php endif; ?>
      <?php print render($title_suffix); ?>
      <?php print $messages; ?>
      <?php print render($tabs); ?>
      <?php print render($page[ 'help']); ?>
      <?php if ($action_links): ?>
      <ul class="action-links">
        <?php print render($action_links); ?>
      </ul>
      <?php endif; ?>
      <?php print render($page[ 'content']); ?>
      <?php print $feed_icons; ?>
    </div>
    <?php print render($page[ 'sidebar_first']); ?>
    <?php print render($page[ 'sidebar_second']); ?>
  </div>
  <footer class="l-footer" role="contentinfo">
    <?php print render($page[ 'footer']); ?>
  </footer>
</div>
