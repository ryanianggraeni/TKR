<?php

namespace App\Http\Controllers;

use App\Kategoriberita;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\File;
use Illuminate\Database\Eloquent\ModelNotFoundException;


class KategoriberitaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('backend.kategoriberita.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backend.kategoriberita.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
         //

          $kategoriberita= new Kategoriberita;
          $kategoriberita->nama = $request->nama;
          $kategoriberita->save();
        
        return redirect()->route('kategoriberita.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Kategoriberita  $kategoriberita
     * @return \Illuminate\Http\Response
     */
    public function show(Kategoriberita $kategoriberita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kategoriberita  $kategoriberita
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
          $kategoriberita = Kategoriberita::find($id);
        return view('backend.kategoriberita.edit', compact('kategoriberita'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Kategoriberita  $kategoriberita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kategoriberita $id)
    {
        //
        $kategoriberita = Kategoriberita::find($id);
        $kategoriberita->update($request->all());
        return redirect()->route('kategoriberita.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kategoriberita  $kategoriberita
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $kategoriberita = Kategoriberita::find($id);
        $kategoriberita->delete();
        return redirect()->route('kategoriberita.index');


        }
}
