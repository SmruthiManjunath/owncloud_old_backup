<?php
$CONFIG = array (
  'instanceid' => '51805d9e41a90',
  'passwordsalt' => '5737e489cde5878380129a68d2b01b',
  'datadirectory' => '/var/www/owncloud/data',
  'dbtype' => 'mysql',
  'version' => '5.0.6',
  'dbname' => 'owncloud',
  'dbhost' => 'localhost',
  'dbtableprefix' => 'oc_',
  'dbuser' => 'moment',
  'dbpassword' => 'moment2152',
  'installed' => true,
  'friends_fb_app_id' => '272045479603564',
  'friends_fb_app_secret' => 'da1370a96fc4c1b5df6eead761f93ecf',
  'friends_fb_app_url' => 'http://128.111.52.151/owncloud/index.php/apps/friends/facebook/',

'apps_paths' =>
      array (
              0 =>
              array (
                      'path' => OC::$SERVERROOT.'/apps',
                      'url' => '/apps',
                      'writable' => true,
              ),
              1 =>
              array (
                      'path' => OC::$SERVERROOT.'/apps2',
                      'url' => '/apps2',
                      'writable' => true,
              ),
      ),

);
define( "DEBUG", 1);
