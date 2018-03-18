<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Berita;



class ApiController extends Controller
{
    //

  
    public function Berita ()
    {
    	$berita = Berita::all();
    	return $berita;
    }


    public function listdata()
    {
    	return berita::all();
    }



}
