@extends('layouts.admin')

@section('content')
<br><br>
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard
                    <a href="{{route('fasilitas.create')}}" class="btn btn-primary pull-right btn-sm">Tambah Fasilitas</a>
                </div>

                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>No</th>
                                <th>Foto Fasilitas</th>
                                <th colspan="2">Opsi</th>
                            </tr>
                            @php
                            $fasilitas = App\Fasilitas::all();
                            $no = 1;
                            @endphp
                            @foreach($fasilitas as $data)
                            <tr>
                                <td>{{$no}}</td>
                                <td><img src="{{asset('image/'.$data->gambar)}}" style="height: 50px"></td>
                                <td><a href="{{route('fasilitas.edit',$data->id)}}" class="btn btn-warning btn-sm">Ubah</a></td>
                                {!! Form::model($data, ['url'=>route('fasilitas.destroy',$data->id), 'method'=>'delete']) !!}
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
