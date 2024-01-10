<?php
namespace App\Models;

class TagsModel extends Model
{
    public function show()
    {
        return $this->selectRecords("tag");
    }
}