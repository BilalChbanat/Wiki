<?php
namespace App\Models;

use PDO;
use PDOException;

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

    function showWikis()
    {
        return $this->selectRecords("wikis");
    }
    function updateWikiStatut($wikiId, $newStatut)
    {
        try {
            $sql = "UPDATE wikis SET statut = :statut WHERE id = :id";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindParam(':statut', $newStatut, PDO::PARAM_INT);
            $stmt->bindParam(':id', $wikiId, PDO::PARAM_INT);
            $stmt->execute();

            return true;
        } catch (PDOException $e) {
            error_log("Database error: " . $e->getMessage() . "\n", 3, "errors.log");
            echo "Database error: " . $e->getMessage();
            return false;
        }
    }

    function getSingleWiki($wikiId)
    {
        try {
            $sql = "SELECT * FROM wikis WHERE id = :id";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindParam(':id', $wikiId, PDO::PARAM_INT);
            $stmt->execute();

            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            $this->pdo = null;

            return $result;
        } catch (PDOException $e) {
            error_log("Database error: " . $e->getMessage() . "\n", 3, "errors.log");
            echo "Database error: " . $e->getMessage();
            return null;
        }
    }

}