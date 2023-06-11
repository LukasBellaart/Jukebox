<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Song;
use App\models\Playlist;

class SongController extends Controller
{
    public function index(){
        return view("songs", ['songs'=>Song::all(), "playlists"=>Playlist::all()]);
    }
    

}
