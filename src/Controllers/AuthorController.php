<?php
namespace App\Controllers;

use App\Models\AuthorModel;

class AuthorController extends Controller
{
    public function DashboardAuthor()
    {
        $new = new AuthorModel();
        $wikis = $new->show();


        $this->render('DashboardAuthor', ["wikis" => $wikis]);


    }

    public function add()
    {
        if (!isset($_SESSION['email'])) {
            echo '<script type="text/javascript">';
            echo 'window.location.href = "/";';
            echo '</script>';
        }
        $this->render('addCat');
    }

    public function addAction()
    {
        extract($_POST);
        $new = new AuthorModel();

        $categoryfields = array(
            'name' => $name,
        );

        $insertedId = $new->insertRecord("category", $categoryfields);
    }
    public function updateWiki()
    {
        $id = $_GET['id'];

        if ($id !== "") {
            $viewmodel = new AuthorModel();
            $wikis = $viewmodel->selectsinglewiki("wikis", "*", "id = $id");

            $viewCat = new AuthorModel();
            $cat = $viewCat->showCat();

            if ($wikis) {
                $this->render('updateWiki', ['wikis' => $wikis, "cat" => $cat]);
            } else {
                echo "<h1>ERROR 404: Bad Request</h1>";
            }
        } else {
            echo '<h1>ERROR 404: Page Not Found</h1>';
        }
    }


    public function updateWikiAction()
    {
        extract($_POST);
        $viewmodel = new AuthorModel();

        $id = $_GET['id'];

        $categoryfields = array(
            'title' => $title,
            'category_id' => $category_id,
            'description' => $description
        );

        $insertedId = $viewmodel->updateWiki("wikis", $categoryfields, $id);

    }

    public function deleteAction()
    {
        $id = $_GET['id'];
        $viewmodel = new AuthorModel();
        $result = $viewmodel->deleteRecord("category", "id", $id);
        echo '<script type="text/javascript">';
        echo 'window.location.href = "/dashboard";';
        echo '</script>';
        exit();

    }

}
