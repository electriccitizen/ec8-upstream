<?php
$aliases['ec8-upstream.dev'] = array(
  'uri' => 'dev-ec8-upstream.pantheonsite.io',
  'db-url' => 'mysql://pantheon:a6872daf0abe4ecbabac7d185e6d8e82@dbserver.dev.8be50dbc-4463-43b5-bd18-d83046623820.drush.in:12588/pantheon',
  'db-allows-remote' => TRUE,
  'remote-host' => 'appserver.dev.8be50dbc-4463-43b5-bd18-d83046623820.drush.in',
  'remote-user' => 'dev.8be50dbc-4463-43b5-bd18-d83046623820',
  'ssh-options' => '-p 2222 -o "AddressFamily inet"',
  'path-aliases' => array(
    '%files' => 'code/sites/default/files',
    '%drush-script' => 'drush',
  ),
);

$aliases['ec8-upstream.local'] = array(
  'uri' => 'ec8-upstream.local',
  'root' => '/var/www/drupalvm/web',
  'remote-host' => 'ec8-upstream.local',
  'remote-user' => 'vagrant',
  'ssh-options' => '-o "SendEnv PHP_IDE_CONFIG PHP_OPTIONS XDEBUG_CONFIG" -o PasswordAuthentication=no -i "' . (getenv('VAGRANT_HOME') ?: drush_server_home() . '/.vagrant.d') . '/insecure_private_key"',
  'path-aliases' => array(
    '%drush-script' => '/var/www/drupalvm/vendor/drush/drush/drush',
  ),
);
