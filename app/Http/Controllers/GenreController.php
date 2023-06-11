<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Genre;

class GenreController extends Controller
{
    //
    public function index(){
        return view("genres", ['genres'=>Genre::all()]);
    }

}
