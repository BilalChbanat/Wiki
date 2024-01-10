<?php
namespace App\Models;

class UserModel extends Model
{

    function showUser()
    {
        return $this->selectRecords("user");
    }
}