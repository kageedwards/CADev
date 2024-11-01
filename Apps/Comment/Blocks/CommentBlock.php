<?php

namespace CADev\Apps\Comment\Blocks;

use CADev\Base\CABlock;
use CADev\Apps\Comment\Services\Comment;
use CADev\Apps\Comment\Services\CommentResource;

class CommentBlock implements CABlock {
    public function process($args){

        if(array_key_exists('comment', $args) && $args['comment'] instanceof Comment) {
            $comment = $args['comment'];
        } else {
            $commentId = $args['commentId'];
            $comment = (new CommentResource())->get($commentId);
        }

        return compact('comment');
    }
}
