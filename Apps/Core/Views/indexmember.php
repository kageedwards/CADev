<?php
namespace CADev\Apps\Core\Views;

class indexmember implements \CADev\Base\CAView{
/**
 * @param array Expecting 'commentIds' => type int[]
 */ 
public function GetView($args){
    $commentIds = $args['commentIds'];
$html = <<<HTML
    <h1>Welcome to Canterlot Avenue</h1>
HTML;

foreach($commentIds as $id){
    $html .= \CADev\Base\GetBlock('comment.block', [
        'commentId'=>$id
    ]);
}
$html .= <<<HTML
    <hr/>
    <div>Copyright &copy; Poniverse</div>
HTML;
return $html;
}
}

?>