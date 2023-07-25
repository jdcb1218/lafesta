<?php

/**
 * Load services definition file.
 */
$settings['container_yamls'][] = __DIR__ . '/services.yml';

/**
 * Include the Pantheon-specific settings file.
 *
 * n.b. The settings.pantheon.php file makes some changes
 *      that affect all environments that this site
 *      exists in.  Always include this file, even in
 *      a local development environment, to ensure that
 *      the site settings remain consistent.
 */
include __DIR__ . "/settings.pantheon.php";

/**
 * Skipping permissions hardening will make scaffolding
 * work better, but will also raise a warning when you
 * install Drupal.
 *
 * https://www.drupal.org/project/drupal/issues/3091285
 */
// $settings['skip_permissions_hardening'] = TRUE;

/**
 * If there is a local settings file, then include it
 */
$local_settings = __DIR__ . "/settings.local.php";
if (file_exists($local_settings)) {
  include $local_settings;
}
$databases['default']['default'] = array (
  'database' => 'pantheon',
  'username' => 'pantheon',
  'password' => 'ecb5edf891034c78a1b1c1ec89273f73',
  'prefix' => '',
  'host' => 'dbserver.dev.3aa1dd6c-3e72-4a2f-84b7-9e9dd6aee9a4.drush.in',
  'port' => '14371',
  'namespace' => 'Drupal\\Core\\Database\\Driver\\mysql',
  'driver' => 'mysql',
);
$settings['hash_salt'] = 'H6dCNNjvnLQLPy1xreMnOA3XvHScJ5_b8qvfDlOC7UyvoXavdpLFvlK0Tua9xcskpi7s77gMeQ';
$settings['config_sync_directory'] = 'sites/default/files/config_Q_54_1yc_pJw5p8wV6vozaQiZfYMdeJgSNhVHuuQDf4SmLKcEh8xaoHfm4jw1Dd8IbDYMkvaWQ/sync';
