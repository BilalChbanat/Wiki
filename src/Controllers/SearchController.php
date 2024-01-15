<?php
namespace App\Controllers;

use App\Models\SearchModel;


class SearchController extends Controller
{
    public function search()
    {  
          if($_SERVER["REQUEST_METHOD"] ==  "POST"){
            $new = new SearchModel();
            $wikis = $new->searchajax($_POST["input"]);
            $this->render('searchAjax', ["wikis" => $wikis]);
          }
      else{
        $new = new SearchModel();
        $wikis = $new->show();

        $this->render('search', ["wikis" => $wikis]);
}
    }
    public function searchajax($name)
    {

        $new = new SearchModel();
        $wikis = $new->searchajax($name);

        $this->render('search', ["wikis" => $wikis]);

    }
}