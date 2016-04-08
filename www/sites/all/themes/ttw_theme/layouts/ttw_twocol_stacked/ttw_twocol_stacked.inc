<?php
/**
 * @file   ttw_twocol_stacked.inc
 * @brief  The Talk the Walk two column stacked layout.
 */

// Plugin definition.
$plugin = array(
  'title' => t('Talk the Walk twocol stacked'),
  'category' => t('Talk the Walk'),
  'icon' => 'ttw_twocol_stacked.png',
  'theme' => 'ttw_twocol_stacked',
  'css' => 'ttw_twocol_stacked.css',
  'regions' => array(
    'top' => t('Top'),
    'intro' => t('Intro'),
    'main' => t('Main'),
    'aside' => ('Sidebar'),
  ),
);
