<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Log; 

use Illuminate\Http\Request;
use App\Models\Playlist;
use App\Models\Playlist_Song;
use App\Models\Song;

class PlaylistController extends Controller
{
    public function index(){
        return view("playlists", ["playlists"=>Playlist::all()]);
    }

    public function showDedicatedPlaylist($playlistId){
        $playlistInfo = Playlist::find(1);

        $music = $playlistInfo->songs()->song();
 
        
        

        return view("dedicatedPlaylist", ["playlistInfo"=>$playlistInfo, "test"=>$music]);
    }

    public function createPlaylist(Request $request)
    {

        $newPlayList = new Playlist;
        $newPlayList->name = $request->name;
        $newPlayList->save();


        return redirect('/playlists');
    }

}
