<?php
namespace App\Models;

use PDO;
use PDOException;

class WikiModel extends Model
{
    function show()
    {
        return $this->selectRecords("wikis");
    }
}