@extends('layouts.admin')

@section('content')
<br><br>
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Pesan
                   
                </div>

                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Subjek</th>
                                <th>Pesan</th>


                                <th colspan="2">Opsi</th>
                            </tr>
                           @php
                           $no = 1;
                           @endphp
                            @foreach($pesan as $data)
                            <tr>
                                <td>{{$no}}</td>
                                <td>{{$data->nama}}</td>
                                <td>{{$data->email}}</td>
                                <td>{{$data->subjek}}</td>
                                <td>{{$data->pesan}}</td>

                                <td><button type="button" class="btn btn-primary btn-sm pull-right" data-toggle="modal" data-target="#modal{{$data->id}}">
                                <span class="fa fa-plus"></span>
                                 Balas 
                                 </button> </td>
                                {!! Form::model($data, ['url'=>route('pesan.destroy',$data->id), 'method'=>'delete']) !!}
                                <td><button type="submit" class="btn btn-danger btn-sm">Hapus</button></td>

 <div class="modal modal-default fade" id="modal{{$data->id}}">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Balas Pesan</h4>
              </div>
              <div class="modal-body">
                {!! Form::model($data, ['url'=>route('pesan.update',$data->id), 'method'=>'put', 'files'=>'true','class'=>'form-horizontal']) !!}
                    <div class="form-group">
                      {!! Form::label('email','Penerima *',['class'=>'col-md-4']) !!}
                      <div class="col-md-8">
                        {!! Form::text('email',$data->email,['class'=>'form-control']) !!}
                      </div>
                    </div>
                    <div class="form-group{{ $errors->has('balas') ? 'has-error' : '' }}">
                      {!! Form::label('balas','Isi Pesan *',['class'=>'col-md-12']) !!}
                      <div class="col-md-12">
                        {!! Form::textarea('balas',null,['class'=>'form-control','required']) !!}
                        {!! $errors->first('balas', '<p class="help-block">:message</p>') !!}
                      </div>
                    </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Batal</button>
                {!! Form::submit('Kirim Balasan', ['class'=>'btn btn-primary']) !!}
              </div>
              {!! Form::close() !!}
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
    </div>

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
