<?php

namespace CADev\Apps\User\Services;

class Get {
    private $_testUsers = [];

    public function __construct()
    {
        $this->_testUsers[1] = new User(1, "Hazel", "hazelshork");
        $this->_testUsers[2] = new User(2, "Comp", "CompThePony");
        $this->_testUsers[3] = new User(3, "Corona", "corona-ca");
    }

    public function Get($userId = null){
        if (is_null($userId)){
            return $this->_testUsers;
        }

        $iUserId = (int)$userId;
        if (array_key_exists($iUserId, $this->_testUsers))
        {
            return $this->_testUsers[$iUserId];
        }
        else
        {
            return null;
        }
    }
}
?>