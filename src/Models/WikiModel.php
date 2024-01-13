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

    function insertWiki($table, $data)
    {
        try {
            // Use prepared statements with placeholders for secure insertion
            $columns = implode(',', array_keys($data));
            $values = ':' . implode(',:', array_keys($data));

            $sql = "INSERT INTO $table ($columns) VALUES ($values)";

            $stmt = $this->pdo->prepare($sql);

            // Bind parameters
            foreach ($data as $key => $value) {
                $stmt->bindValue(':' . $key, $value);
            }

            $stmt->execute();

            // Get the last inserted ID (if applicable)
            $lastId = $this->pdo->lastInsertId();


        } catch (PDOException $e) {
            // Handle the exception
            error_log("Database error: " . $e->getMessage() . "\n", 3, "errors.log");
            echo "Database error: " . $e->getMessage();
            return false;
        }
    }

    function insertWikiTest($title, $description, $image, $user_id, $category_id, $tagId)
    {
        try {
            $sql = "INSERT INTO `wikis`(`title`, `description`, `img`, `user_id`, `category_id`) VALUES (?, ?, ?, ?, ?)";

            $stmt = $this->pdo->prepare($sql);
            $result = $stmt->execute([$title, $description, $image, $user_id, $category_id]);

            $wikiId = $this->pdo->lastInsertId();
            $tagId = explode(',', $_POST['values']);

            if ($result) {
                // Use $tagId directly in the foreach loop
                $tagId = array_map('intval', $tagId);
                foreach ($tagId as $tag) {
                    $sql = "INSERT INTO `wikitag`(`wiki_id`, `tag_id`) VALUES (?, ?)";
                    $stmt = $this->pdo->prepare($sql);
                    $stmt->execute([$wikiId, $tag]);
                }
            }

            echo '<script type="text/javascript">';
            echo 'window.location.href = "/ ";';
            echo '</script>';
            exit();
        } catch (PDOException $e) {
            // Handle the exception
            error_log("Database error: " . $e->getMessage() . "\n", 3, "errors.log");
            echo "Database error: " . $e->getMessage();
            return false;
        }
    }






    public function getTagIds()
    {
        try {
            $sql = "SELECT id FROM `tag`";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();

            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

            // Extract tag IDs from the result set
            $tagIds = array_column($result, 'id');

            return $tagIds;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
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


    function lastinserted()
    {
        return $this->lastinsert();

    }


}