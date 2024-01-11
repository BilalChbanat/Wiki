<?php
namespace App\Controllers;

use App\Models\DashBoardModel;

class DashboardController extends Controller
{
    public function index()
    {
        $new = new DashBoardModel();
        $user = $new->showUser();
        $newcat = new DashBoardModel();
        $category = $newcat->showCat();

        $this->render('dashboard', ["user" => $user, "category" => $category]);


    }
    public function add()
    {
        $this->render('addCat');
    }

    public function addAction()
    {
        extract($_POST);
        $new = new DashBoardModel();

        $categoryfields = array(
            'name' => $name,
        );

        $insertedId = $new->insertRecord("category", $categoryfields);
    }
    public function update()
    {
        $id = $_GET['id'];

        if ($id !== "") {
            $viewmodel = new DashBoardModel();
            $category = $viewmodel->selectSingleRecords("category", "*", "id = $id");

            if ($category) {
                $this->render('updateCat', ['category' => $category]);
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
        $viewmodel = new DashBoardModel();

        $id = $_GET['id'];
        
        $categoryfields = array(
            'name' => $name,
        );

        $insertedId = $viewmodel->updateRecord("category", $categoryfields, "$id");
    }

    public function deleteAction()
    {
        $id = $_GET['id'];
        $viewmodel = new DashBoardModel();
        $result = $viewmodel->deleteRecord("category", "id", $id);
        echo '<script type="text/javascript">';
        echo 'window.location.href = "/dashboard";';
        echo '</script>';
        exit();

    }

}
