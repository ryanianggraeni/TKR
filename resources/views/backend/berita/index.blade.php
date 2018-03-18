@extends('layouts.admin')

@section('content')
<br><br>
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard
                    <a href="{{route('berita.create')}}" class="btn btn-primary pull-right btn-sm">Tambah Berita</a>
                </div>

                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>No</th>
                                <th>Gambar</th>
                                <th>Judul</th>
                                <th>Tanggal Kegiatan</th>
                                <th>Kategori</th>
                                <th>Keterangan</th>
                                <th colspan="2">Opsi</th>
                            </tr>
                            @php
                            $berita = App\Berita::all();
                            $no = 1;
                            @endphp
                            @foreach($berita as $data)
                            <tr>
                                <td>{{$no}}</td>
                                <td>{{$data->judul}}</td>
                                <td>{{$data->tanggal}}</td>
                                <td>{{$data->kategori}}</td>
                                <td>{!!$data->isi!!}</td>
                                <td><a href="show"><img src="{{asset('image/'.$data->gambar)}}" style="height: 50px"></a></td>
                               
                                  <td><a href="{{route('berita.edit',$data->id)}}" class="btn btn-warning btn-sm">Ubah</a></td>
                                {!! Form::model($data, ['url'=>route('berita.destroy',$data->id), 'method'=>'delete']) !!}
                                <td><button type="submit" class="btn btn-danger btn-sm">Hapus</button></td>
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
