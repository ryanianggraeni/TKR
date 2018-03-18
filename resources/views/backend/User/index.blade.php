@extends('layouts.admin')

@section('content')
<br><br>
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard
                    <a href="{{route('user.create')}}" class="btn btn-primary pull-right btn-sm">Tambah Prestasi</a>
                </div>

                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Password</th>

                                <th colspan="2">Opsi</th>
                            </tr>
                            @php
                            $user = App\User::all();
                            $no = 1;
                            @endphp
                            @foreach($user as $data)
                            <tr>
                                <td>{{$no}}</td>
                                <td>{{$data->name}}</td>
                                <td>{{$data->email}}</td>
                                <td>{{$data->password}}</td>
                                <td><a href="{{route('user.edit',$data->id)}}" class="btn btn-warning btn-sm" >Ubah</a></td>
                                {!! Form::model($data, ['url'=>route('user.destroy',$data->id), 'method'=>'delete']) !!}
                                <td><button type="submit" class="btn btn-danger btn-sm">Hapus</button></td>
                                {!! Form::close() !!}
                                @php
                                $no++;
                                @endphp
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
   
@endsection
