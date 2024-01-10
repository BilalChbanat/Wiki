<?php
namespace App\Controllers;

use App\Models\TagsModel;

class TagsController extends Controller
{
    public function show()
    {
        $new = new TagsModel();
        $user = $new->show();

        $this->render('dashboard', ["user" => $user]);


    }

    // function showCat()
    // {
    //     return $this->selectRecords("category");
    // }
}