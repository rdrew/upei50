<div class="object-metadata">
<h2>Metadata</h2>
    <dl xmlns:dcterms="http://purl.org/dc/terms/" class="islandora-inline-metadata islandora-metadata-fields islandora-object-fields">
      <?php $row_field = 0; ?>
      <?php foreach($dc_array as $key => $value): ?>
        <dt property="<?php print $value['dcterms']; ?>" content="<?php print filter_xss(htmlspecialchars($value['value'], ENT_QUOTES, 'UTF-8')); ?>" class="<?php print $value['class']; ?><?php print $row_field == 0 ? ' first' : ''; ?>">
          <?php print filter_xss($value['label']); ?>
        </dt>
        <dd class="<?php print $value['class']; ?><?php print $row_field == 0 ? ' first' : ''; ?>">
          <?php print filter_xss($value['value']); ?>
        </dd>
        <?php $row_field++; ?>
      <?php endforeach; ?>
    </dl>
</div>
