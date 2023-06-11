<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Playlist_Song;

class PlaylistSongController extends Controller
{
    
    public function addSongToPlaylist(Request $request, $songId)
    {
        
        $newPlaylistSong = new Playlist_Song;
        $newPlaylistSong->song_id = $songId;
        $newPlaylistSong->playlist_id = $request->playlist;
        $newPlaylistSong->save();

        return redirect('/songs');
    }

}
