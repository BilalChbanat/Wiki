<?php
namespace App\Models;

use PDO;
use PDOException;

class SearchModel extends Model
{
    function show()
    {
        return $this->selectRecords("wikis","*","statut = 1");
    }
    function searchajax($name)
    {
        return $this->slectLike($name);
    }


}