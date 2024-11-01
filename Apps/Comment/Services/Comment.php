<?php

namespace CADev\Apps\Comment\Services;

use CADev\Apps\User\Services\UserResource;

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

    function user() {
        return (new UserResource)->get($this->userId);
    }
}
