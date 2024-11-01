<?php

require dirname(__FILE__, 2).'/Base/CABlock.php';
require dirname(__FILE__, 2).'/Base/CAController.php';
require dirname(__FILE__, 2).'/Base/function.php';

spl_autoload_register( function ($className) {
    $className = ltrim($className, '\\');
    $fileName  = '';
    $namespace = '';
    if ($lastNsPos = strrpos($className, '\\')) {
        $namespace = substr($className, 0, $lastNsPos);
        $className = substr($className, $lastNsPos + 1);
        $fileName  = str_replace('\\', DIRECTORY_SEPARATOR, $namespace) . DIRECTORY_SEPARATOR;
    }
    $fileName .= str_replace('_', DIRECTORY_SEPARATOR, $className) . '.php';
    $fileName = str_replace("CADev", dirname(__FILE__, 2), $fileName);
    require $fileName;
});

$uri = $_GET['LOCATION'];
if (!isset($uri) || empty($uri) || $uri == ''){
    $uri = '/';
}

$uri_map = [
    '/' => 'core.indexmember',
    'report' => 'core.reportcomment'
];

$valid_query_parameters = [
    'LOCATION',
    'comment_id'
];

if (array_key_exists($uri, $uri_map)){
    echo \CADev\Base\GetController($uri_map[$uri], array_intersect_key($_GET, array_flip($valid_query_parameters)));
}
else {
    http_response_code(404);
    echo "Error 404: Page not found";
}

