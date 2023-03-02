<?php

namespace App\Http\Controllers;

use App\Models\Cards;
use Illuminate\Http\Request;

class CardsController extends Controller
{
    public function index(){
        return Cards::all();
    }
}
