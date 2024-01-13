<?php

namespace App\Models;

class HomeModel extends Model
{

    function show()
    {
        return $this->selectRecordslimitInner("wikis", "*", "statut = 1", "user", "wikis.user_id = user.id", 5);
    }


}