<?php
//kpr(get_defined_vars());
$site_name =  variable_get('site_name', 'Drupal');
$grid = module_invoke('views', 'block_view', 'landing_page_grid-block')
?>


<?php
print render($grid['content']);
?>



<div class="section-4 font-4">Get Volpi <a href="http://www.tipue.com/grids/">here</a></div>
