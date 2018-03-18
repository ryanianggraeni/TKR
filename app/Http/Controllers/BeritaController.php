<?php

namespace App\Http\Controllers;

use App\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view ('backend.berita.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view(' backend.berita.create');
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
          $berita= new Berita;
        $berita->judul = $request->judul;
        $berita->tanggal = $request->tanggal;
         $berita->kategori = $request->kategori;
         $berita->isi = $request->isi;

        if ($request->hasFile('gambar')) {
        $file = $request->file('gambar');
        $destinationPath = public_path().'/image/';
        $filename = str_random(6).'_'.$file->getClientOriginalName();
        $uploadSuccess = $file->move($destinationPath, $filename);
        $berita->gambar = $filename;
        }
 
        $berita->save();
        
        return redirect()->route('berita.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function show(Berita $id)
    {
        //
         $berita = Berita::find($id);
        return view('backend.berita.show', compact('berita'));
    }

    public function selengkapnya($id)
    {
        //
         $berita = Berita::find($id);
        return view('show', compact('berita'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
          $berita = Berita::find($id);
        return view('backend.berita.edit', compact('berita'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $berita = Berita::find($id);        
        $berita->judul = $request->judul;
        $berita->tanggal = $request->tanggal;
         $berita->kategori = $request->kategori;
         $berita->isi = $request->isi;
       
        if($request->hasFile('gambar'))
        {
            $filename=null;
            $uploaded_logo=$request->file('gambar');
            $extension=$uploaded_logo->getClientOriginalExtension();
            $filename=md5(time()).'.'.$extension;
            $destinationPath=public_path().DIRECTORY_SEPARATOR.'image';
            $uploaded_logo->move($destinationPath, $filename);
            if($berita->gambar)
            {
                $old_logo=$berita->gambar;
                $filepath=public_path().DIRECTORY_SEPARATOR.'image'.DIRECTORY_SEPARATOR.$berita->gambar;
                try {
                    File::delete($filepath);
                } catch(FileNotFoundException $e) {

                }
            }
            $berita->gambar=$filename;
            $berita->save();
        }
        return redirect()->route('berita.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
         $berita = Berita::find($id);
        $berita->delete();
        return redirect()->route('berita.index');
    }
}
