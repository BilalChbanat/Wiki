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

    public function add()
    {
        $new = new WikiModel();
        $categories = $new->selectRecords('category');
        $newT = new WikiModel();
        $tags = $newT->selectRecords('tag');

        $this->render('add', ['category' => $categories, "tags" => $tags]);

    }

    protected function addWikiAction()
    {
        extract($_POST);

        $new_logo;

        if (isset($_FILES["image"])) {
            $file = $_FILES["image"];
            // File properties
            $fileName = $file["name"];
            $fileTmpName = $file["tmp_name"];
            // $fileSize = $file["size"];
            $fileError = $file["error"];

            $fileExt = pathinfo($fileName, PATHINFO_EXTENSION);

            // Generate a unique filename to avoid overwriting
            $newFileName = $Name . "_" . uniqid('', true) . "." . $fileExt;


            $new_logo = $newFileName;

            $uploadDir = "assets/images/uploads/";

            if ($fileError === 0) {
                move_uploaded_file($fileTmpName, $uploadDir . $newFileName);
            } else {
                echo "Error uploading file.";
            }
        }

        $viewmodel = new WikiModel();
        $lastInsertedImageId = $viewmodel->insertRecord("images", ['link' => $new_logo]);

        $teamfields = array(

            'title' => $title,
            'description' => $description,
            'category' => $category,
            'city' => $city,
            'tags[]' => $tags,
            'image' => $lastInsertedImageId

        );

        $insertedId = $viewmodel->insertRecord("wikis", $teamfields);


        if ($insertedId) {
            $message = "Stadium inserted successfully!";
            http_response_code(200);
            echo json_encode([
                "message" => $message,
                "Id" => $insertedId
            ]);
        }
    }
    public function updateTag()
    {
        $id = $_GET['id'];

        if ($id !== "") {
            $viewmodel = new WikiModel();
            $tag = $viewmodel->selectSingleRecords("wikis", "*", "id = $id");

            if ($tag) {
                $this->render('updateTag', ['wikis' => $tag]);
            } else {
                echo "<h1>ERROR 404: Bad Request</h1>";
            }
        } else {
            echo '<h1>ERROR 404: Page Not Found</h1>';
        }
    }


    public function updateActionTag()
    {
        extract($_POST);
        $viewmodel = new WikiModel();

        $id = $_GET['id'];

        $tagsfields = array(
            'name' => $name,
        );

        $insertedId = $viewmodel->updateRecord("wikis", $tagsfields, "$id");
    }

    public function deleteActionTag()
    {
        $id = $_GET['id'];
        $viewmodel = new WikiModel();
        $result = $viewmodel->deleteRecord("wikis", "id", $id);
        echo '<script type="text/javascript">';
        echo 'window.location.href = "/";';
        echo '</script>';
        exit();

    }
}