<?php
namespace App\Controllers;

use App\Models\UserModel;

class DashboardController extends Controller
{
    public function index()
    {
        $new = new UserModel();
        $user = $new->showUser();
        $newcat = new UserModel();
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
        $new = new UserModel();

        $categoryfields = array(
            'name' => $name,
        );

        $insertedId = $new->insertRecord("category", $categoryfields);
    }

    protected function deleteAction()
    {
        extract($_POST);

        $viewmodel = new UserModel();

        $id = $_POST['id'];

        $result = $viewmodel->deleteRecord("category", "id", $id);

    }

}
