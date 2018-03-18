@extends('layouts.admin')

@section('content')
<br><br>
<div class="container">
    <div class="row">
        <div class="col-md-11">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard
                </div>

                <div class="panel-body">
                    {!! Form::model($kategoriberita,['url'=>route('kategoriberita.update',$kategoriberita->id), 'method'=>'put', 'files'=>'true', 'enctype'=>'multipart/form-data', 'class'=>'form-horizontal']) !!}
                      @include('backend.kategoriberita._form')
                      {!! Form::close() !!} 
                </div>
            </div>
        </div>
    </div>
</div>
  
@endsection
