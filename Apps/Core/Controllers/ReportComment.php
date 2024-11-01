<?php

namespace CADev\Apps\Core\Controllers;

use CADev\Base\CAController;
use CADev\Apps\Comment\Services\CommentResource;

class ReportComment implements CAController {
    public function process($args){
        $commentId = $args['comment_id'];
        $comment = (new CommentResource())->get($commentId);

        return compact('comment');
    }
}