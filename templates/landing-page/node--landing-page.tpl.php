<?php
//kpr(get_defined_vars());
$site_name =  variable_get('site_name', 'Drupal');
$grid = module_invoke('views', 'block_view', 'landing_page_grid-block')
?>


<?php
print render($grid['content']);
?>



<div class="section-4 font-4">2019 <a href="library.upei.ca">Robertson Library</a>, University of Prince Edward Island</div>
