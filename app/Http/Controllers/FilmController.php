<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\film;
use DB;
use Redirect;
use Illuminate\Support\Facades\Input;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // get all the films
        $films = Film::all();

        // load the view and pass the films
        return view('films.films')
            ->with('films', $films);
    }

    public function getFilms()
    {
        return view('films/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $film = Film::where("id",$id)->get()->first();
        // load the view and pass the films
        return view('films.show')
            ->with('film', $film);
    }
}
