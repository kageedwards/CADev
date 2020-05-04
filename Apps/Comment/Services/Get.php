<?php

namespace CADev\Apps\Comment\Services;

class Get {
    private $_testComments = [];

    public function __construct()
    {
        $this->_testComments[1] = new Comment(1, 1, "lol", "2/3/19");
        $this->_testComments[2] = new Comment(2, 1, ":3 <script>alert('lol')</script>", "2/3/19");
        $this->_testComments[3] = new Comment(3, 2, "You suck", "2/4/19");
        $this->_testComments[4] = new Comment(4, 2, "Comp ftw", "2/5/19");
    }

    public function Get($commentId = null){
        if (is_null($commentId)){
            return $this->_testComments;
        }

        $iCommentId = (int)$commentId;
        if (array_key_exists($iCommentId, $this->_testComments))
        {
            return $this->_testComments[$iCommentId];
        }
        else
        {
            return null;
        }
    }

    public function GetAllIds(){
        return [1,2,3,4];
    }
}
?>