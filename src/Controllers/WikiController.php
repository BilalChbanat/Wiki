<?php
namespace App\Controllers;

use App\Models\WikiModel;
use App\Models\AuthorModel;

class WikiController extends Controller
{

    public function index()
    {
        $wikis = new WikiModel();
        $res = $wikis->getAllWikis();
        return $this->render('index', $res);

    }

    public function add()
    {
        if (!isset($_SESSION['email'])) {
            echo '<script type="text/javascript">';
            echo 'window.location.href = "/";';
            echo '</script>';
        }
        $new = new WikiModel();
        $categories = $new->selectRecords('category');
        $newT = new WikiModel();
        $tags = $newT->selectRecords('tag');

        $this->render('add', ['category' => $categories, "tags" => $tags]);

    }

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

            }
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

        $insertedId = $viewmodel->updateWiki("wikis", $categoryfields, "$id");

        if ($insertedId) {
            echo '<script type="text/javascript">';
            echo 'window.location.href = "/DashboardAuthor";';
            echo '</script>';
            exit();
        }
    }

}