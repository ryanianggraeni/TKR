<?php

namespace App\Http\Controllers;


use App\kurikulum;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\File;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class KurikulumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('backend.kurikulum.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backend.kurikulum.create');

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
          $kurikulum= new kurikulum;
        $kurikulum->nama = $request->nama;
        $kurikulum->jabatan = $request->jabatan;
        $kurikulum->target = $request->target;

        if ($request->hasFile('foto')) {
        $file = $request->file('foto');
        $destinationPath = public_path().'/image/';
        $filename = str_random(6).'_'.$file->getClientOriginalName();
        $uploadSuccess = $file->move($destinationPath, $filename);
        $kurikulum->foto = $filename;
        }
 
        $kurikulum->save();
        
        return redirect()->route('kurikulum.index');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\kurikulum  $kurikulum
     * @return \Illuminate\Http\Response
     */
    public function show(kurikulum $kurikulum)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\kurikulum  $kurikulum
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
         $kurikulum = kurikulum::find($id);
        return view('backend.kurikulum.edit', compact('kurikulum'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\kurikulum  $kurikulum
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
          $kurikulum = kurikulum::find($id);
        $kurikulum->update($request->all());
       
        if($request->hasFile('foto'))
        {
            $filename=null;
            $uploaded_logo=$request->file('foto');
            $extension=$uploaded_logo->getClientOriginalExtension();
            $filename=md5(time()).'.'.$extension;
            $destinationPath=public_path().DIRECTORY_SEPARATOR.'image';
            $uploaded_logo->move($destinationPath, $filename);
            if($kurikulum->foto)
            {
                $old_logo=$kurikulum->foto;
                $filepath=public_path().DIRECTORY_SEPARATOR.'image'.DIRECTORY_SEPARATOR.$kurikulum->foto;
                try {
                    File::delete($filepath);
                } catch(FileNotFoundException $e) {

                }
            }
            $kurikulum->foto=$filename;
            $kurikulum->save();
        }
        return redirect()->route('kurikulum.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\kurikulum  $kurikulum
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
         $kurikulum = kurikulum::find($id);
        $kurikulum->delete();
        return redirect()->route('kurikulum.index');
    }
}
