<?php
namespace App\Model;

class UserModel extends Model
{

    function showUser()
    {
        return $this->selectRecords("user");
    }
}