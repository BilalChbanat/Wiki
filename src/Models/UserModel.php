<?php
namespace App\Models;

class UserModel extends Model
{

    function showUser()
    {
        return $this->selectRecords("user");
    }
    function showCat()
    {
        return $this->selectRecords("category");
    }

}