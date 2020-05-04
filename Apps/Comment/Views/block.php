<?php
namespace CADev\Apps\Comment\Views;

class block implements \CADev\Base\CAView{
/**
 * @param array Expecting 'comment' => type \CADev\Apps\Comment\Services\Comment
 */
public function GetView($args){
    $comment = $args['comment'];
    $commentText = htmlspecialchars(($comment->text));
return <<<HTML
    <div id="comment_$comment->commentId" class="comment">
        <div class="comment_user">User ID: $comment->userId</div>
        <div class="comment_time" style="font-size:small;">$comment->time</div>
        <div class="comment_text">$commentText</div>
    </div>
HTML;
}
}

?>