@extends('layouts.admin')

@section('content')
<br><br>
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard
                </div>

                <div class="panel-body">
                    {!! Form::model($kurikulum,['url'=>route('kurikulum.update',$kurikulum->id), 'method'=>'put', 'files'=>'true', 'enctype'=>'multipart/form-data', 'class'=>'form-horizontal']) !!}
		              @include('backend.kurikulum._form')
		              {!! Form::close() !!} 
                </div>
            </div>
        </div>

@endsection
