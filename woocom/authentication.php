<?php
require __DIR__ . '/vendor/autoload.php';

use Automattic\WooCommerce\Client;
use Automattic\WooCommerce\HttpClient\HttpClientException;
$url ='http://localhost/wordpress/'; //$_POST['url'];
$ck ='ck_94ec28fd304485300c77345d50104dffe6802ed7'; //$_POST['ck'];
$cs ='cs_7e7c99a5bcd829e15c3f575b65ea13ae61556947'; //$_POST['cs'];

,
$woocommerce = new Client($url,$ck,$cs,
    [
        'wp_api' => true,
        'version' => 'wc/v3',
        'query_string_auth' => true
    ]
);