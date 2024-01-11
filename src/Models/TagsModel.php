<?php
namespace App\Models;

class TagsModel extends Model
{

    function show()
    {
        return $this->selectRecords("tag");
    }

}