<?php

namespace CADev\Apps\Comment\Blocks;

class CommentBlock implements \CADev\Base\CABlock {
    public function Process($args){
        $commentId = $args['commentId'];
        $comment = (new \CADev\Apps\Comment\Services\Get())->Get($commentId);
        
        $pageArgs = [
            'comment' => $comment
        ];

        return $pageArgs;
    }
}
?>