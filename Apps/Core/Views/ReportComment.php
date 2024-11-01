<?php
namespace CADev\Apps\Core\Views;

use CADev\Base\CAView;
use CADev\Base as BaseFuncs;

class ReportComment implements CAView {
/**
 * @param array Expecting 'commentIds' => type int[]
 */ 
public function getView($args){
    $year = date('Y');
$html = <<<HTML
<html>
<head>
    <title>Canterlot Avenue</title>
    <link rel="stylesheet" href="/css/style.css" type="text/css">
</head>
<body>
    <h1>Welcome to Canterlot Avenue</h1>
    <h2>Reporting the following comment:</h2>
HTML;


$html .= BaseFuncs\GetBlock('comment.block', [
    'comment' => $args['comment']
]);

$html .= <<<HTML
    <div class="footer">Copyright &copy; $year Poniverse</div>
</body>
</html>
HTML;
return $html;
}
}

