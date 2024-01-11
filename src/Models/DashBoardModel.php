<?php
namespace App\Models;

class DashBoardModel extends Model
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