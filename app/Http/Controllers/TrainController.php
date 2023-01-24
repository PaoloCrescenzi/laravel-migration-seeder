<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Train;
use App\http\Controllers\Controller;


class TrainController extends Controller
{
    function index () {
        $trains = Train::whereDate('orario_di_partenza', '2023-01-24')->get();

        return view('index', compact('trains'));
    }
}
