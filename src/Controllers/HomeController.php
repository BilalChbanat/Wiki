<?php
namespace App\Controllers;

use App\Models\HomeModel;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function created_at($time)
    {
        $carbon = new Carbon($time);
        return $carbon->diffForHumans();
    }

    public function index()
    {
        $new = new HomeModel();
        $wikis = $new->show();

        foreach ($wikis as &$wiki) {
            $wiki['formatted_created_at'] = $this->created_at($wiki['created_at']);
        }

        $this->render('index', ["wikis" => $wikis]);
    }

}
