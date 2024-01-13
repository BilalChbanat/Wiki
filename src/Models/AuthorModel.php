<?php
namespace App\Models;

use Carbon\Carbon;

class AuthorModel extends Model
{

    function show()
    {
        return $this->selectWithCat("wikis", "*", null, "category", "wikis.category_id = category.id");
    }

    function selectsinglewiki($table, $columns = "*", $where = null)
    {
        return $this->selectSingleRecords($table, $columns = "*", $where = null);
    }

}