<?php
if (isset($_GET['q'])) {
    $cachefile = 'pages/'.md5(basename($_GET['q'])).'.cache'; // e.g. cache/index.php.cache
    $cachetime = 7889232 ; // 3 month in sconces
    if(file_exists($cachefile) && time()-$cachetime <= filemtime($cachefile)){
        header('Content-Type: application/json');

        $data = @file_get_contents($cachefile);
        $json_string = json_encode(json_decode($data), JSON_PRETTY_PRINT);

        print_r($json_string);
        exit;
    }else{
        @unlink($cachefile);
    }


    if (true) {
        ob_start();

        include_once 'emoji/api.php';
        $c = ob_get_contents();
        file_put_contents($cachefile,$c);

        exit;

    }




}