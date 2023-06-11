<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Song;

class SongController extends Controller
{
    public function index(){
        return view("songs", ['songs'=>Song::all()]);
    }
    

}
