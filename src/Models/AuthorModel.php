<?php
namespace App\Models;

use PDO;
use PDOException;
use Carbon\Carbon;

class AuthorModel extends Model
{

    function show()
    {
        if (!isset($_SESSION['email'])) {
            echo '<script type="text/javascript">';
            echo 'window.location.href = "/";';
            echo '</script>';
        }
        $userId = $_SESSION['id'];

        $condition = "user_id = $userId";

        return $this->selectWithCat(
            "wikis",
            "*",
            $condition,
            "category",
            "wikis.category_id = category.id"
        );
    }

    function selectsinglewiki($table, $columns = "*", $where = null)
    {
        return $this->selectSingleRecords($table, $columns = "*", $where = null);
    }

    function selectOneWiki($table, $columns = "*", $where = null)
    {
        $sql = "SELECT $columns FROM $table ";

        $sql .= "LEFT JOIN category ON wikis.category_id = category.id ";

        $sql .= "LEFT JOIN wikitag ON wikis.id = wikitag.wiki_id ";

        if ($where !== null) {
            $sql .= " WHERE $where ;";
        }

        $stmt = $this->pdo->prepare($sql);

        $stmt->execute();

        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        $this->pdo = null;

        return $result;
    }

    function showCat()
    {
        return $this->selectRecords('category');
    }
    function showTag()
    {
        return $this->selectRecords('tag');
    }

    public function updateWiki($table, $data, $id)
    {
        return $this->updateRecord($table, $data, $id);
    }
}