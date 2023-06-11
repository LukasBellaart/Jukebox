<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Playlist_Song;

class Playlist extends Model
{
    use HasFactory;


    public function songs()
    {
        return $this->hasMany(Playlist_Song::Class);
    }

}
