<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Komponen;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class KomponenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        //
        $komponen= Komponen::find($id);
        return view('backend.komponen.edit', compact('komponen')) ;

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
        //
          $komponen = Komponen::find($id);
        $komponen->update($request->all());
       
        if($request->hasFile('logo'))
        {
            $filename=null;
            $uploaded_logo=$request->file('logo');
            $extension=$uploaded_logo->getClientOriginalExtension();
            $filename=md5(time()).'.'.$extension;
            $destinationPath=public_path().DIRECTORY_SEPARATOR.'img';
            $uploaded_logo->move($destinationPath, $filename);
            if($komponen->logo)
            {
                $old_logo=$komponen->logo;
                $filepath=public_path().DIRECTORY_SEPARATOR.'img'.DIRECTORY_SEPARATOR.$komponen->logo;
                try {
                    File::delete($filepath);
                } catch(FileNotFoundException $e) {

                }
            }
            $komponen->logo=$filename;
            $komponen->save();
        }

       

           if($request->hasFile('gambar'))
        {
            $filename=null;
            $uploaded_logo=$request->file('gambar');
            $extension=$uploaded_logo->getClientOriginalExtension();
            $filename=md5(time()).'.'.$extension;
            $destinationPath=public_path().DIRECTORY_SEPARATOR.'img';
            $uploaded_logo->move($destinationPath, $filename);
            if($komponen->gambar)
            {
                $old_logo=$komponen->gambar;
                $filepath=public_path().DIRECTORY_SEPARATOR.'img'.DIRECTORY_SEPARATOR.$komponen->gambar;
                try {
                    File::delete($filepath);
                } catch(FileNotFoundException $e) {

                }
            }
            $komponen->gambar=$filename;
            $komponen->save();
        }
        return redirect()->route('komponen.edit',1);
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
