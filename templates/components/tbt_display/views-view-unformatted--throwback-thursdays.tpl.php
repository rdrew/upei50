<!-- The Gallery as lightbox dialog, should be a document body child element -->
<div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls">
  <div class="slides"></div>
  <h3 class="title"></h3>
  <a class="prev">‹</a>
  <a class="next">›</a>
  <a class="close">×</a>
  <a class="play-pause"></a>
  <ol class="indicator"></ol>
</div>

<?php if (!empty($title)): ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>

<div id="tbt_grid<?php print $id; ?>" class="tbt_grid_<?php print $id; ?> tbt_grid">
	<?php foreach ($rows as $id => $row): ?>
			<?php print $row; ?>
	<?php endforeach; ?>
</div>
<hr>

