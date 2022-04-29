<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Mehradsadeghi\FilterQueryString\FilterQueryString;

class SpotifySong extends Model
{
    use HasFactory;
    use FilterQueryString;
    protected $table = 'spotify_song';
    public $timestamps = false;
    protected $filters = ['track_name', 'artist_name', 'genre','popularity'];
    
    //https://github.com/mehradsadeghi/laravel-filter-querystring
    // https://example.com?age=22&username=dariush123

    protected $fillable = [
        'track_name',
        'artist_name',
        'genre',
        'popularity'  
    ];
 
}
