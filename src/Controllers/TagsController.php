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
    public function update()
    {
        $id = $_GET['id'];

        if ($id !== "") {
            $viewmodel = new TagsModel();
            $category = $viewmodel->selectSingleRecords("tag", "*", "id = $id");

            if ($category) {
                $this->render('updateCat', ['tag' => $category]);
            } else {
                echo "<h1>ERROR 404: Bad Request</h1>";
            }
        } else {
            echo '<h1>ERROR 404: Page Not Found</h1>';
        }
    }


    public function updateAction()
    {
        extract($_POST);
        $viewmodel = new TagsModel();

        $id = $_GET['id'];

        $tagsfields = array(
            'name' => $name,
        );

        $insertedId = $viewmodel->updateRecord("category", $tagsfields, "$id");
    }

    public function deleteAction()
    {
        $id = $_GET['id'];
        $viewmodel = new TagsModel();
        $result = $viewmodel->deleteRecord("category", "id", $id);
        echo '<script type="text/javascript">';
        echo 'window.location.href = "/dashboard";';
        echo '</script>';
        exit();

    }

}
