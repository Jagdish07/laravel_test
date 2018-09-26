<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\film;
use DB;
use Redirect;
use Illuminate\Support\Facades\Input;

class ManageFilmController extends Controller
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
        return view('films.listing')
            ->with('films', $films);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'rating' => 'required|string|max:255',
            'release_date' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'ticket_price' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'genre' => 'required|string|max:255',
        ]);
    }

    public function create()
    {
        return view('films.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post_data = $request->all();//dd($post_data);
        $validator = $this->validator($post_data);
        if ($validator->fails()) {//dd($validator->errors());
            return redirect('/film/create')
                        ->withErrors($validator)
                        ->withInput();
        }
        
        $film = new Film;
        $film->name = $post_data['name'];
        $film->rating = $post_data['rating'];
        $film->description = $post_data['description'];
        $film->release_date = date('Y-m-d', strtotime($post_data['release_date']));
        $film->ticket_price = $post_data['ticket_price'];
        $film->country = $post_data['country'];
        $film->genre = $post_data['genre'];
        $film->photo = '';
        $film->save();
       
        return redirect('/films')->with('message', 'Created Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // get the nerd
        $film = Film::find($id);

        // show the edit form and pass the nerd
        return view('films.edit')
            ->with('film', $film);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $post_data = $request->all();
        $id =  $post_data['id'];
        $validator = $this->validator($post_data);
        if ($validator->fails()) {//dd($validator->errors());
            return redirect('/film/' . $id . '/edit')
                        ->withErrors($validator)
                        ->withInput();
        } else {
            // store
            $film = Film::find($id);
            $film->name = $post_data['name'];
            $film->rating = $post_data['rating'];
            $film->description = $post_data['description'];
            $film->release_date = date('Y-m-d', strtotime($post_data['release_date']));
            $film->ticket_price = $post_data['ticket_price'];
            $film->country = $post_data['country'];
            $film->genre = $post_data['genre'];
            $film->photo = '';
            $film->save();

            // redirect
           return redirect('/films')->with('message', 'Successfully updated film!');
        } 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
