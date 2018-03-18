@extends('layouts.admin')

@section('content')
<br><br>

<div class="container">
    <div class="row">
        <div class="col-md-10">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard
                </div>

                <div class="panel-body">
                    {!! Form::open(['url'=>route('alumni.store'), 'method'=>'post', 'files'=>'true', 'enctype'=>'multipart/form-data', 'class'=>'form-horizontal']) !!}
		              @include('backend.alumni._form')
		              {!! Form::close() !!} 
                </div>
            </div>
        </div>
    </div>
</div>
  
@endsection
