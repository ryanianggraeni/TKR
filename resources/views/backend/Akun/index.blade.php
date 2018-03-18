@extends('layouts.admin')

@section('content')

                <br><br><br><br><br><br><br>
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                             <h3 class="thin text-center"><b>PENGATURAN AKUN</b></h3>
                            <hr>
                            <center>
                            <h4><b>Nama Pengguna</b></h4>  
                            <h5>{{ auth()->user()->name }}</h5>
                            <br>
                            <h4><b>Alamat Email</b></h4> 
                            <h5>{{ auth()->user()->email }}</h5>
                            </center>  
                            <hr>
                            <div class="form-group">
                                <div class="col-sm-6 text-right">
                                    <a class="btn btn-primary" href="{{url('/akun/profile/edit')}}">Ubah Profil</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
@endsection