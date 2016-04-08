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

  <?php if ($content['top']): ?>
    <div class="region-top">
      <div class="container">
        <?php print $content['top']; ?>  
      </div>
    </div>
  <?php endif; ?>

  <?php if ($content['intro']): ?>
    <div class="region-intro">
      <div class="container">
        <?php print $content['intro']; ?>
      </div>
    </div>
  <?php endif; ?>

  <?php if ($content['aside'] || $content['main']) ?>
    <div class="container">
      <?php if ($content['aside']): ?>
        <div class="region-main has-aside">
      <?php else: ?>
        <div class="region-main">
      <?php endif; ?>    
        <?php if ($content['main']): ?>
          <?php print $content['main']; ?>
        <?php endif; ?>
      </div>

      <?php if ($content['aside']): ?>
        <div class="region-aside">
          <?php print $content['aside']; ?>
        </div>
      <?php endif; ?>
    </div>
</div>