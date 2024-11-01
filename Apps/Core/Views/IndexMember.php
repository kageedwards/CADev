<?php
namespace CADev\Apps\Core\Views;

use CADev\Base\CAView;
use CADev\Base as BaseFuncs;

class IndexMember implements CAView {
/**
 * @param array Expecting 'commentIds' => type int[]
 */ 
public function getView($args){
    $commentIds = $args['commentIds'];
    $year = date('Y');
$html = <<<HTML
<!DOCTYPE html>
<html>
<head>
    <title>Canterlot Avenue</title>
    <link rel="stylesheet" href="/css/style.css" type="text/css">
    <script src="/js/reports.js" type="text/javascript"></script>
</head>
<body>
    <h1>Welcome to Canterlot Avenue</h1>
HTML;

foreach($commentIds as $id){
    $html .= BaseFuncs\GetBlock('comment.block', [
        'commentId' => $id
    ]);
}

$html .= <<<HTML
    <div class="footer">Copyright &copy; $year Poniverse</div>
</body>
</html>
HTML;
return $html;
}
}

