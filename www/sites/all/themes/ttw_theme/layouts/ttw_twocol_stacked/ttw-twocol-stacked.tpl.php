<?php

/**
 * @file ttw-twocol-stacked.tpl.php
 * Default theme implementation for the ttwo_twocol_stacked panels layout.
 *
 * Available variables:
 * - $content['top']: Top region.
 * - $content['main']: Main region.
 * - $content['aside']: Sidebar region.
 *
 * @ingroup themeable
 */
?>

<div class="ttw-twocol">
  <div class="region-top">
    TOP
    <?php if ($content['top']): ?>
      <?php print $content['top']; ?>
    <?php endif; ?>
  </div>

  <div class="region-main">
    MAIN
    <?php if ($content['main']): ?>
      <?php print $content['main']; ?>
    <?php endif; ?>
  </div>

  <div class="region-aside">
    ASIDE
    <?php if ($content['aside']): ?>
      <?php print $content['aside']; ?>
    <?php endif; ?>
  </div>
</div>