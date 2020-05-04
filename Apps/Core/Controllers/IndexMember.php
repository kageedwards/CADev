<?php

namespace CADev\Apps\Core\Controllers;

class IndexMember implements \CADev\Base\CAController {
    public function Process($args){
        $commentIds = (new \CADev\Apps\Comment\Services\Get)->GetAllIds();
        $pageArgs = [
            'commentIds' => $commentIds
        ];

        return $pageArgs;
    }
}
?>