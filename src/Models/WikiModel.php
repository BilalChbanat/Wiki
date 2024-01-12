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
    public function getAllWikis()
    {
        return $this->selectRecords("wikis");
    }

    public function insertWiki($table, $data = [])
    {
        return $this->insertRecord($table, $data);
    }

    public function selectSingleWiki($table, $columns = "*", $where = null)
    {
        return $this->selectSingleRecords($table, $columns = "*", $where = null);
    }

    public function updateWiki($table, $data, $id)
    {
        return $this->updateRecord($table, $data, $id);
    }

    public function deleteWiki($table, $column, $id)
    {
        return $this->deleteRecord($table, $column, $id);
    }



}