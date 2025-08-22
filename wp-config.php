<?php
# Database Configuration
define( 'DB_NAME', 'wp_absideproject' );
define( 'DB_USER', 'absideproject' );
define( 'DB_PASSWORD', '5CCdxFxF9CvjvGMpuRdU' );
define( 'DB_HOST', '127.0.0.1:3306' );
define( 'DB_HOST_SLAVE', '127.0.0.1:3306' );
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', 'utf8_unicode_ci');
$table_prefix = 'wp_';

# Security Salts, Keys, Etc
define('AUTH_KEY',         '7=a~C~OYqaZ%h72?zY,(bI.Ze$~s@bj_Wjo,BC,U-1j^uEZk3J=nWP@9-q)axF9Q');
define('SECURE_AUTH_KEY',  '$&d7no(n,OO.!OMkwPa_?r84IekoZ!3h4gYbku)qz$oLC6Pu~4yX7RwOHoxEfEj?');
define('LOGGED_IN_KEY',    '%XjGnN$ZTD49wxI9hCpc=~M=-OgfDi&xL#(Ja.T4vLJ_VNE=urn~,L6^Daz(!R$b');
define('NONCE_KEY',        'Jrw739xuW_UIxZd3X%-Et8-F%8y,8maVJ-y#M@~-OP.H_4Rbf4f)rPm55aozu(xh');
define('AUTH_SALT',        'fm@y^=u@#xqNb!nv#cg%4A3eiPwHMD%zN+&D%1ewiPr4TV~MB%oD(yY&0#D?QX4G');
define('SECURE_AUTH_SALT', 'dISWNH1)zK.+JUMjZXSYI)nzff6#EmI6oh4xeFp0,_F3D+^q8~4C?g!=E,OZGczY');
define('LOGGED_IN_SALT',   'FsjcVU*oHROMpzeUzpSa+NGFzM2B^mV11=51O!r?yhr~MGx-Sj?6iyz6aMEM~jG_');
define('NONCE_SALT',       'IzDA.A4T+T(3o#.MTity&zMWqF-GLS=R^p^T#WN?ikzg1^emcKqw1?jOqkX7~7Cj');


# Localized Language Stuff

define( 'WP_CACHE', TRUE );

define( 'WP_AUTO_UPDATE_CORE', false );

define( 'PWP_NAME', 'absideproject' );

define( 'FS_METHOD', 'direct' );

define( 'FS_CHMOD_DIR', 0775 );

define( 'FS_CHMOD_FILE', 0664 );

define( 'WPE_APIKEY', 'd5d07242e97d1aa35e053ed02af13a97d4dfb495' );

define( 'WPE_CLUSTER_ID', '212208' );

define( 'WPE_CLUSTER_TYPE', 'pod' );

define( 'WPE_ISP', true );

define( 'WPE_BPOD', false );

define( 'WPE_RO_FILESYSTEM', false );

define( 'WPE_LARGEFS_BUCKET', 'largefs.wpengine' );

define( 'WPE_SFTP_PORT', 2222 );

define( 'WPE_SFTP_ENDPOINT', '34.138.141.189' );

define( 'WPE_LBMASTER_IP', '' );

define( 'WPE_CDN_DISABLE_ALLOWED', true );

define( 'DISALLOW_FILE_MODS', FALSE );

define( 'DISALLOW_FILE_EDIT', FALSE );

define( 'DISABLE_WP_CRON', false );

define( 'WPE_FORCE_SSL_LOGIN', false );

define( 'FORCE_SSL_LOGIN', false );

/*SSLSTART*/ if ( isset($_SERVER['HTTP_X_WPE_SSL']) && $_SERVER['HTTP_X_WPE_SSL'] ) $_SERVER['HTTPS'] = 'on'; /*SSLEND*/

define( 'WPE_EXTERNAL_URL', false );

define( 'WP_POST_REVISIONS', FALSE );

define( 'WPE_WHITELABEL', 'wpengine' );

define( 'WP_TURN_OFF_ADMIN_BAR', false );

define( 'WPE_BETA_TESTER', false );

umask(0002);

$wpe_cdn_uris=array ( );

$wpe_no_cdn_uris=array ( );

$wpe_content_regexs=array ( );

$wpe_all_domains=array ( 0 => 'absideproject.wpengine.com', 1 => 'absideproject.wpenginepowered.com', );

$wpe_varnish_servers=array ( 0 => '127.0.0.1', );

$wpe_special_ips=array ( 0 => '34.74.217.40', 1 => 'pod-212208-utility.pod-212208.svc.cluster.local', );

$wpe_netdna_domains=array ( );

$wpe_netdna_domains_secure=array ( );

$wpe_netdna_push_domains=array ( );

$wpe_domain_mappings=array ( );

$memcached_servers=array ( 'default' =>  array ( 0 => 'unix:///tmp/memcached.sock', ), );
define('WPLANG','');

# WP Engine ID


# WP Engine Settings






# That's It. Pencils down
if ( !defined('ABSPATH') )
	define('ABSPATH', __DIR__ . '/');
require_once(ABSPATH . 'wp-settings.php');
