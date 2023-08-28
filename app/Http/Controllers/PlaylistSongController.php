<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\PlaylistSong;

class PlaylistSongController extends Controller {
    
    public function addSongToPlaylist(Request $request, $songId) {
        
        $newPlaylistSong = new PlaylistSong;
        $newPlaylistSong->song_id = $songId;
        $newPlaylistSong->playlist_id = $request->playlist;
        $newPlaylistSong->save();

        return redirect('/songs');
    }
}
