<?php

namespace CADev\Apps\User\Services;

class User {
    public $userId;
    public $fullname;
    public $username;

    public function __construct($userId, $fullname, $username)
    {
        $this->userId = (int)$userId;
        $this->fullname = $fullname;
        $this->username = $username;
    }
}
?>