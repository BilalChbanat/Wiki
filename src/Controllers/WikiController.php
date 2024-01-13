<?php
namespace App\Controllers;

use App\Models\WikiModel;

class WikiController extends Controller
{

    // public function index()
    // {
    //     $new = new WikiModel();
    //     $tags = $new->show();
    //     $this->render('wikis', ["wikis" => $tags]);

    // }

    public function index()
    {
        $wikis = new WikiModel();
        $res = $wikis->getAllWikis();
        return $this->render('index', $res);

    }

    public function add()
    {
        $new = new WikiModel();
        $categories = $new->selectRecords('category');
        $newT = new WikiModel();
        $tags = $newT->selectRecords('tag');

        $this->render('add', ['category' => $categories, "tags" => $tags]);

    }

    // public function addWikiAction()
    // {
    //     extract($_POST);

    //     $new_logo;

    //     if (isset($_FILES["image"])) {

    //         $file = $_FILES["image"];

    //         $fileName = $file["name"];
    //         $fileTmpName = $file["tmp_name"];
    //         $fileError = $file["error"];

    //         $fileExt = pathinfo($fileName, PATHINFO_EXTENSION);

    //         $newFileName = $fileName . "_" . uniqid('', true) . "." . $fileExt;

    //         $new_logo = $newFileName;

    //         $uploadDir = "assets/images/uploads/";

    //         if ($fileError === 0) {
    //             move_uploaded_file($fileTmpName, $uploadDir . $newFileName);
    //         } else {
    //             echo "Error uploading file.";
    //         }
    //     }

    //     $viewmodel = new WikiModel();
    //     $lastInsertedImageId = $viewmodel->insertWiki("images", ['link' => $new_logo]);

    //     $wikifield = array(
    //         'title' => $title,
    //         'description' => $description,
    //         'category_id' => $category,
    //         'user_id' => $_SESSION['id'],

    //         'img' => $lastInsertedImageId,
    //     );
    //     $values = $_POST['values'];

    //     $viewmodew = new WikiModel();
    //     $insertedId = $viewmodew->insertWiki("wikis", $wikifield);

    //     $lastI = new WikiModel();
    //     // var_dump($insertedId);
    //     // die();

    //     $inputString = implode(',', $values);
    //     $numbers = explode(',', $inputString);
    //     $numbers = array_map('intval', $numbers);

    //     foreach ($numbers as $v) {
    //         $array = array(

    //             $insertedId,
    //             $v
    //         );
    //         $viewM = new WikiModel();
    //         $insertedId = $viewM->insertWiki("wikitag", $array);
    //     }

    //     // var_dump($insertedId);
    //     // die();
    //     if ($insertedId) {
    //         echo '<script type="text/javascript">';
    //         echo 'window.location.href = "/";';
    //         echo '</script>';
    //         exit();
    //     }
    // }

    public function addWikiAction()
    {


        if (isset($_POST["addwiki"])) {
            $title = $_POST['title'];
            $desc = $_POST['description'];
            $category_id = $_POST['category'];
            $user_id = $_SESSION['id'];
            $tagId = $_POST['values'];
            $fileName = $_FILES['image']['name'];
            $fileTmpName = $_FILES['image']['tmp_name'];
            $uploadDir = "assets/images/uploads/" . $fileName;

            if (move_uploaded_file($fileTmpName, $uploadDir)) {
                $viewmodel = new WikiModel();
                $viewmodel->insertWikiTest($title, $desc, $uploadDir, $user_id, $category_id, $tagId);
                // var_dump($tagId);
                // die();
            }
        }



    }

}