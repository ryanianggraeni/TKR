
                            

                             <div class="form-group{{ $errors->has('nama') ? 'has-error' : '' }}">
                            <div>
                                {!! Form::label('nama','Nama *',['class'=>'col-md-4 col-md-offset-2']) !!}
                                
                            </div>
                                <div class="col-md-4">
                                    {!! Form::text('nama',null,['class'=>'img-rounded img-responsive']) !!}
                                    {!! $errors->first('nama','<p class="help-block">:message</p>') !!}
                                </div>
                            </div>

                           
                            
                            <div class="form-group" align="center">
                                <div class="col-md-8 col-md-offset-2">
                                <br>
                                <center>
                                {!! Form::submit('Simpan', ['class'=>'btn btn-primary pull-right']) !!}
                                </center>
                                </div>
                            </div>