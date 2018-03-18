@extends('layouts.admin')

@section('content')
<br><br>
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard
                </div>

                <div class="panel-body">
                    {!! Form::open(['url'=>route('kategoriberita.store'), 'method'=>'post', 'files'=>'true', 'enctype'=>'multipart/form-data', 'class'=>'form-horizontal']) !!}
		              @include('backend.kategoriberita._form')
		              {!! Form::close() !!} 
                </div>
            </div>
        </div>
   
@endsection
