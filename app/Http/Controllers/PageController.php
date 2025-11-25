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
        $today = "2025-01-01 00:00:00";
        $Trains = Train::where('orario_partenza', '>=', $today)
                   ->orderBy('orario_partenza', 'asc')
                   ->get();

        return view('trainList', compact("Trains"));
    }

}
