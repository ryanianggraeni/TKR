<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pesan;
use DB;
use App\Komponen;
use Mail;
use App\Balas;

class PesanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $belum = DB::table('pesans')->select('pesans.*')->where('status',0);
        $dibaca = DB::table('pesans')->select('pesans.*')->where('status',1);
        $pesan = Pesan::all();
        return view('backend.pesan.index', compact('pesan','dulu'));
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
        $pesan = Pesan::create($request->all());
        $komponen = Komponen::find(1);
        return redirect('/kontak');
      
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

        $pesan = Pesan::find($id);
        $balas = new Balas;
        $balas->pesan_id = $id;
        $balas->balas = $request->balas;
        $balas->save();

        Mail::raw($request->balasan, function($message)
        {
            $message->subject('Terimakasih Anda Telah Menghubungi Kami');
            $message->from('smkassalaambandung@gmail.com', 'SMK Assalaam Bandung');
            $message->to('151610247@smkassalaambandung.sch.id');
        });

        alert()->success('Balas Terkirim')->autoclose(3500);
        return redirect()->route('pesan.index');
         
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
          $user = Pesan::findOrFail($id);
        $user->delete();

        return redirect()->route('pesan.index');
    }

    public function kirim(Request $request, $id)
    {
        $pesan = Pesan::find($id);
        $balas = new Balas;
        $balas->pesan_id = $id;
        $balas->balasan = $request->balasan;
        $balas->save();

        Mail::raw($request->balasan, function($message)
        {
            $message->subject('Terimakasih Anda Telah Menghubungi Kami');
            $message->from('smkassalaambandung@gmail.com', 'SMK Assalaam Bandung');
            $message->to($pesan->email);
        });
    }
    
    
}
