<?php

namespace App\Http\Controllers;

use App\industri;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\File;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class IndustriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         return view('backend.alumni.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         return view('backend.industri.create');
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
         $industri= new industri;
        $industri->nama = $request->nama;
        $industri->perusahaan = $request->perusahaan;
         $industri->testimonni = $request->testimonni;

        if ($request->hasFile('foto')) {
        $file = $request->file('foto');
        $destinationPath = public_path().'/image/';
        $filename = str_random(6).'_'.$file->getClientOriginalName();
        $uploadSuccess = $file->move($destinationPath, $filename);
        $industri->foto = $filename;
        }
 
        $industri->save();
        
        return redirect()->route('industri.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\industri  $industri
     * @return \Illuminate\Http\Response
     */
    public function show(industri $industri)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\industri  $industri
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
         $industri = industri::find($id);
        return view('backend.industri.edit', compact('industri'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\industri  $industri
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
          $industri = industri::find($id);
        $industri->update($request->all());
       
        if($request->hasFile('foto'))
        {
            $filename=null;
            $uploaded_logo=$request->file('foto');
            $extension=$uploaded_logo->getClientOriginalExtension();
            $filename=md5(time()).'.'.$extension;
            $destinationPath=public_path().DIRECTORY_SEPARATOR.'image';
            $uploaded_logo->move($destinationPath, $filename);
            if($industri->foto)
            {
                $old_logo=$industri->foto;
                $filepath=public_path().DIRECTORY_SEPARATOR.'image'.DIRECTORY_SEPARATOR.$industri->foto;
                try {
                    File::delete($filepath);
                } catch(FileNotFoundException $e) {

                }
            }
            $industri->foto=$filename;
            $industri->save();
        }
        return redirect()->route('industri.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\industri  $industri
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
         $industri = industri::find($id);
        $industri->delete();
        return redirect()->route('industri.index');
    }
}
