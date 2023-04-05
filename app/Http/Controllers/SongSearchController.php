<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Song;

class SongSearchController extends Controller {
	/**
     * Get the index name for the model.
     *
     * @return string
    */

    public function index(Request $request) {
		$songs = $request->has('titlesearch')
			? Song::search($request->titlesearch)->paginate(6)
			: Song::paginate(6);

        return view(
			'song-search',
			compact('songs')
		);
    }
}
