<?php
//kpr(get_defined_vars());
$site_name =  variable_get('site_name', 'Drupal');
$grid = module_invoke('views', 'block_view', 'landing_page_grid-block')
?>


<?php
print render($grid['content']);
?>



<!--
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
-->
<div class="section-4 font-4">Get Volpi <a href="http://www.tipue.com/grids/">here</a></div>
