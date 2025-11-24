<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function homepage(){
        return view('homepage');
    }

    public function trainList(){
        $Trains = Train::all();
        return view('trainList', compact("Trains"));
    }

}
