<?php
namespace App\Models;

class DashBoardModel extends Model
{

    function showUser()
    {
        return $this->selectRecordsUser();
    }
    function showCat()
    {
        return $this->selectRecords("category");
    }

}