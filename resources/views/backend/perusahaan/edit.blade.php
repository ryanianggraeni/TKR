@extends('layouts.admin')

@section('content')
<br><br>
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard
                </div>

                <div class="panel-body">
                    {!! Form::model($perusahaan,['url'=>route('perusahaan.update',$perusahaan->id), 'method'=>'put', 'files'=>'true', 'enctype'=>'multipart/form-data', 'class'=>'form-horizontal']) !!}
		              @include('backend.perusahaan._form')
		              {!! Form::close() !!} 
                </div>
            </div>
        </div>
    
@endsection
