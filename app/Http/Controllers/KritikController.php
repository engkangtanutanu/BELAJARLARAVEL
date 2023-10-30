<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Film;
use App\Models\User;
use App\Models\Kritik;

class KritikController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $kritiks = Kritik::all();
        return view('kritik.index', compact('kritiks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Film $film, User $user)
    {
        //
        $films = $film::select('id', 'name')->get();
        return view('kritik.create', compact('film', 'user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Kritik $kritik)
    {
        //
        $request->validate([
            'nama' => 'required',
            'film' => 'required',
            'content' => 'required',
            'point' => 'required'
        ]);

        Kritik::create([
            'user_id'  => $request['user_id'],
            'film_id'  => $request['film_id'],
            'content'  => $request['content'],
            'point' => $request['point'],
        ]);

        return redirect()->route('film.show');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kritik $kritik)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kritik $kritik)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kritik $kritik)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kritik $kritik)
    {
        //
        $kritiks = Kritik::where('id', $kritik->id)->delete();
        return redirect()->route('kritik.index');
    }
}