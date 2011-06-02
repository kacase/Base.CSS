<?php
    //  Start output buffering
    if(extension_loaded('zlib')) ob_start('ob_gzhandler');
    
    //  Set headers
    $expire = gmdate('D, d M Y H:i:s', time() + 3600) . ' GMT';
    header('content-type: text/css; charset: utf-8; cache-control: must-revalidate; expires: ' . $expire);
    
    //  And open up the CSS
    echo file_get_contents('base.css');
?>