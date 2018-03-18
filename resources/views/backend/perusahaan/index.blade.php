@extends('layouts.admin')

@section('content')
<br><br>
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard
                    <a href="{{route('perusahaan.create')}}" class="btn btn-primary pull-right btn-sm">Tambah Perusahaan</a>
                </div>

                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>No</th>
                                <th>Logo</th>
                                <th colspan="2">Opsi</th>
                            </tr>
                            @php
                            $perusahaan = App\Perusahaan::all();
                            $no = 1;
                            @endphp
                            @foreach($perusahaan as $data)
                            <tr>
                                <td>{{$no}}</td>
                                <td><img src="{{asset('image/'.$data->logo)}}" style="height: 50px"></td>
                               
                                <td><a href="{{route('perusahaan.edit',$data->id)}}" class="btn btn-warning btn-sm">Ubah</a></td>
                                {!! Form::model($data, ['url'=>route('perusahaan.destroy',$data->id), 'method'=>'delete']) !!}
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
