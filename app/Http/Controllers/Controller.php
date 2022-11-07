<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
    public function __construct()
    {
        // Ce controlleur n'est accessible qu'avec un JWT valide
        $this->middleware('auth');
    }

}
