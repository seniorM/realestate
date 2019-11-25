<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomePageController extends Controller {

    public function homepage() {
        return view('home.index');
    }

}
