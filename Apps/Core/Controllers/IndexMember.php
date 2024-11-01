<?php

namespace CADev\Apps\Core\Controllers;

use CADev\Base\CAController;
use CADev\Apps\Comment\Services\CommentResource;

class IndexMember implements CAController {
    public function process($args){
        $commentIds = (new CommentResource())->getAllIds();

        return compact('commentIds');
    }
}