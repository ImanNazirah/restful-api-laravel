<?php

namespace App\Http\Controllers;

use App\Models\SpotifySong;
use Illuminate\Http\Request;

use Illuminate\Http\Response;

use App\Http\Resources\SpotifySongCollection;
use App\Http\Resources\SpotifySongResource;

class SpotifySongController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(new SpotifySongCollection(SpotifySong::all()), Response::HTTP_OK);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $spotifySong = SpotifySong::create($request->only( 
            
            [
                'id',
                'track_name',
                'artist_name',
                'genre',
                'popularity'  
            ]

        ));

        return new SpotifySongResource($spotifySong);
   
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SpotifySong  $spotifySong
     * @return \Illuminate\Http\Response
     */
    public function show(SpotifySong $spotifySong)
    {
        return new SpotifySongResource($spotifySong);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SpotifySong  $spotifySong
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SpotifySong $spotifySong)
    {
        $spotifySong->update($request->only( 
            
            [
                'track_name',
                'artist_name',
                'genre',
                'popularity'  
            ]

        ));

        return new SpotifySongResource($spotifySong);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SpotifySong  $spotifySong
     * @return \Illuminate\Http\Response
     */
    public function destroy(SpotifySong $spotifySong)
    {
        $spotifySong->delete();

        return response()->json(null, Response::HTTP_NO_CONTENT);
    }

    public function getByQuery()
    {
        return response()->json(new SpotifySongCollection(SpotifySong::filter()->get()), Response::HTTP_OK);
    }

}
