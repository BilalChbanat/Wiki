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

    public function addWikiAction()
    {
        extract($_POST);
        $new = new WikiModel();

        $tagfields = array(
            'name' => $name,
        );

        $insertedId = $new->insertRecord("wikis", $tagfields);
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