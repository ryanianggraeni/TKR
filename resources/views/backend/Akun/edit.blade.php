@extends('layouts.admin')

@section('content')
<br><br><br><br><br><br><br>
                
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                             <h3 class="thin text-center"><b>PENGATURAN AKUN</b></h3>
                            <hr>
                            
                            {!! Form::model(auth()->user(),['url'=>url('/akun/profile'),'method'=>'post','class'=>'form-horizontal']) !!}

                    <div class="form-group{{ $errors->has('name') ? 'has-error' : '' }}">
                        {!! Form::label('name','Nama Pengguna *',['class'=>'col-md-12']) !!}
                        <div class="col-md-12">
                            {!! Form::text('name',null,['class'=>'form-control']) !!}
                            {!! $errors->first('name','<p class="help-block">message</p>') !!}
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('email') ? 'has-error' : '' }}">
                        {!! Form::label('email','Alamat Email *',['class'=>'col-md-12']) !!}
                        <div class="col-md-12">
                            {!! Form::email('email',null,['class'=>'form-control']) !!}
                            {!! $errors->first('email','<p class="help-block">message</p>') !!}
                        </div>
                    </div>
                    <hr>
                    <div class="form-group">
                        <div>
                        <center>
                            {!! Form::submit('Simpan', ['class'=>'btn btn-primary']) !!}
                            </center>
                        </div>
                    </div>

                    {!! Form::close() !!}      
                        </div>
                    </div>

                </div>
                
@endsection