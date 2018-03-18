@extends('layouts.admin')

@section('content')
<br><br>
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard
                    <a href="{{route('prestasi.create')}}" class="btn btn-primary pull-right btn-sm">Tambah Prestasi</a>
                </div>

                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>No</th>
                                <th>Foto</th>
                                <th>Judul</th>
                                <th colspan="2">Opsi</th>
                            </tr>
                            @php
                            $prestasi = App\Prestasi::all();
                            $no = 1;
                            @endphp
                            @foreach($prestasi as $data)
                            <tr>
                                <td>{{$no}}</td>
                                <td><img src="{{asset('image/'.$data->gambar)}}" style="height: 50px"></td>
                                <td>{{$data->judul}}</td>
                                <td><a href="{{route('prestasi.edit',$data->id)}}" class="btn btn-warning btn-sm">Ubah</a></td>
                                {!! Form::model($data, ['url'=>route('prestasi.destroy',$data->id), 'method'=>'delete']) !!}
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
