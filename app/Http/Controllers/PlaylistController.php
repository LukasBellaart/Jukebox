<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Log; 

use Illuminate\Http\Request;
use App\Models\Playlist;
use App\Models\PlaylistSong;
use App\Models\Song;

class PlaylistController extends Controller {
    public function index(){
        return view("playlists", ["playlists"=>Playlist::all()]);
    }

    public function showDedicatedList($playlistId){
        $playlistInfo = Playlist::find($playlistId);       
        
        $durationSeconds = 0;

        foreach ($playlistInfo->songs as $song) {
            $durationSeconds += $song->duration;
        }   

        $duration = gmdate("H:i:s",$durationSeconds);

    
        return view("dedicatedPlaylist", ["playlist"=>$playlistInfo, "duration"=>$duration]);
    }

    public function createPlaylist(Request $request) {

        $newPlayList = new Playlist;
        $newPlayList->name = $request->name;
        $newPlayList->save();


        return redirect('/playlists');
    }
}
