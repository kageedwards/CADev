<?php
namespace CADev\Apps\Comment\Views;

use CADev\Base\CAView;

class Comment implements CAView {
/**
 * @param array Expecting 'comment' => type \CADev\Apps\Comment\Services\Comment
 */
public function getView($args){
    $comment = $args['comment'];
    $commentText = htmlspecialchars(($comment->text));
    $commentUser = $comment->user();
return <<<HTML
    <div id="comment_$comment->commentId" class="comment">
        <div class="user">$commentUser->fullname <em>$commentUser->username</em></div>
        <div class="aside"><a href="#" class="report" data-id="$comment->commentId">Report</a> <span class="time">$comment->time</span></div>
        <div class="text">$commentText</div>
    </div>
HTML;
}
}

?>