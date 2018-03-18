<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\prestasi;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class PrestasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prestasi = prestasi::all();
        return view('backend.prestasi.index', compact('prestasi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.prestasi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $prestasi= new Prestasi;
        $prestasi->judul = $request->judul;

        if ($request->hasFile('gambar')) {
        $file = $request->file('gambar');
        $destinationPath = public_path().'/image/';
        $filename = str_random(6).'_'.$file->getClientOriginalName();
        $uploadSuccess = $file->move($destinationPath, $filename);
        $prestasi->gambar = $filename;
        }
 
        $prestasi->save();
        
        return redirect()->route('prestasi.index');
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $prestasi = prestasi::find($id);
        return view('backend.prestasi.edit', compact('prestasi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $prestasi = Prestasi::find($id);
        $prestasi->update($request->all());
       
        if($request->hasFile('gambar'))
        {
            $filename=null;
            $uploaded_logo=$request->file('gambar');
            $extension=$uploaded_logo->getClientOriginalExtension();
            $filename=md5(time()).'.'.$extension;
            $destinationPath=public_path().DIRECTORY_SEPARATOR.'image';
            $uploaded_logo->move($destinationPath, $filename);
            if($prestasi->gambar)
            {
                $old_logo=$prestasi->gambar;
                $filepath=public_path().DIRECTORY_SEPARATOR.'image'.DIRECTORY_SEPARATOR.$prestasi->gambar;
                try {
                    File::delete($filepath);
                } catch(FileNotFoundException $e) {

                }
            }
            $prestasi->gambar=$filename;
            $prestasi->save();
        }
        return redirect()->route('prestasi.index');
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
         $prestasi = prestasi::find($id);
        $prestasi->delete();
        return redirect()->route('prestasi.index');
    }
}
