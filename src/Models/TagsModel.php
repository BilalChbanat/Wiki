<?php
namespace App\Models;

class TagsModel extends Model
{

    function show()
    {
        return $this->selectRecords("tag");
    }

    public function insertTags($table, $data = [])
    {
        return $this->insertRecord($table, $data);
    }

    public function selectSingleTag($table, $columns = "*", $where = null)
    {
        return $this->selectSingleRecords($table, $columns = "*", $where = null);
    }

    public function updateTag($table, $data, $id)
    {
        return $this->updateRecord($table, $data, $id);
    }

    public function deleteTag($table, $column, $id)
    {
        return $this->deleteRecord($table, $column, $id);
    }



}