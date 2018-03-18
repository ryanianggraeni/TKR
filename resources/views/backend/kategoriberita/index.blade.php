@extends('layouts.admin')

@section('content')
<br><br>
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard
                    <a href="{{route('kategoriberita.create')}}" class="btn btn-primary pull-right btn-sm">Tambah Kategori Berita</a>
                </div>

                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>No</th>
                                <th>Nama Kategori</th>
                                <th colspan="2">Opsi</th>
                            </tr>
                            @php
                            $kategoriberita = App\Kategoriberita::all();
                            $no = 1;
                            @endphp
                            @foreach($kategoriberita as $data)
                            <tr>
                                <td>{{$no}}</td>
                                <td>{{$data->nama}}</td>
                               
                               
                                <td><a href="{{route('kategoriberita.edit',$data->id)}}" class="btn btn-warning btn-sm">Ubah</a></td>
                                {!! Form::model($data, ['url'=>route('kategoriberita.destroy',$data->id), 'method'=>'delete']) !!}
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
