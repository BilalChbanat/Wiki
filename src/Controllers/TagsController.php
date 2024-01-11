<?php
namespace App\Controllers;

use App\Models\TagsModel;

class TagsController extends Controller
{
    public function index()
    {
        $new = new TagsModel();
        $tags = $new->show();
        $this->render('tag', ["tags" => $tags]);

    }

    public function add()
    {
        $this->render('addTag');
    }

    public function addActionTag()
    {
        extract($_POST);
        $new = new TagsModel();

        $tagfields = array(
            'name' => $name,
        );

        $insertedId = $new->insertRecord("tag", $tagfields);
    }
    public function updateTag()
    {
        $id = $_GET['id'];

        if ($id !== "") {
            $viewmodel = new TagsModel();
            $tag = $viewmodel->selectSingleRecords("tag", "*", "id = $id");

            if ($tag) {
                $this->render('updateTag', ['tag' => $tag]);
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
        $viewmodel = new TagsModel();

        $id = $_GET['id'];

        $tagsfields = array(
            'name' => $name,
        );

        $insertedId = $viewmodel->updateRecord("tag", $tagsfields, "$id");
    }

    public function deleteActionTag()
    {
        $id = $_GET['id'];
        $viewmodel = new TagsModel();
        $result = $viewmodel->deleteRecord("tag", "id", $id);
        echo '<script type="text/javascript">';
        echo 'window.location.href = "/tag";';
        echo '</script>';
        exit();

    }

}
