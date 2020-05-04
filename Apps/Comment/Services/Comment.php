<?php

namespace CADev\Apps\Comment\Services;

class Comment {
    public $commentId;
    public $userId;
    public $text;
    public $time;

    function __construct($commentId, $userId, $text, $time){
        $this->commentId = (int)$commentId;
        $this->userId = (int)$userId;
        $this->text = $text;
        $this->time = $time;
    }
}
?>