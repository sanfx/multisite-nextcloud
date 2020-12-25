<?php
$CONFIG = array (
  'instanceid' => 'ocr2fw9pzn5a',
  'passwordsalt' => '24QdCbKXo/MTqBnT2WZwK/G620EIM/',
  'secret' => 'HnyaVGitcBtN9i8dBneWxRaXTZo//Wjw3CNSLLG0dU8iRIqG',
  'memcache.disributed' => '\\OC\\Memcache\\Redis',
  'memcache.local' => '\\OC\\Memcache\\Redis',
  'memcache.locking' => '\\OC\\Memcache\\Redis',
  'filelocking.enabled' => 'true',
  'redis' => [
	'host' => '192.168.0.3',
	'port' => 3679,
	'timeout' => 0.0,
        'password' => 'redis123',
	'dbindex' => 0, // Optional, if undefined SELECT will not run and will use Redis Server's default DB Index.
   ],
  'trusted_domains' =>
  array (
    0 => '192.168.0.2', // Update this to match each node running nextcloud IP
    1 => '10.8.0.2', // Update this to match each node tun0 interface id
    2 => '10.8.0.3', // Updte tun0 virtual inteface id of HAProxy node.
    3 => '192.168.1.3', // Site B HaProxy IP
    4 => 'my.cloud.com', // domain name
    5 => 'nc1.cloud.home', // any other domain you create in CoreDNS.
    6 => '192.168.0.3' // Site A Haproxy IP
  ),
  'datadirectory' => '/media/storage/data',
  'dbtype' => 'mysql',
  'version' => '20.0.1.1',
  'overwriteprotocol' => 'https',
  'overwrite.cli.url' => 'https://192.168.0.3/nextcloud',
  'dbname' => 'nextcloud',
  'dbhost' => '192.168.0.3',// ProxySQL node ip
  'dbport' => '3679',// ProxySQL port
  'dbtableprefix' => 'oc_',
  'dbuser' => 'nextcloud_user',
  'dbpassword' => 'dbpassword',
  'installed' => true,
  'session_lifetime' => 60 * 60 * 24,
  'session_keepalive' => true,
  'has_rebuilt_cache' => true,
  'maintenance' => false,
);
