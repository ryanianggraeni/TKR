
                            
                            <div class="form-group{{ $errors->has('nama') ? 'has-error' : '' }}">
                            <div>
                                {!! Form::label('nama','Nama *',['class'=>'col-md-4 col-md-offset-2']) !!}
                                
                            </div>
                                <div class="col-md-4">
                                    {!! Form::text('nama',null,['class'=>'img-rounded']) !!}
                                    {!! $errors->first('nama','<p class="help-block">:message</p>') !!}
                                </div>
                           <br><br>
                           </div>


                            <div class="form-group{{ $errors->has('jabatan') ? 'has-error' : '' }}">
                            <div>
                                {!! Form::label('jabatan','Jabatan*',['class'=>'col-md-4 col-md-offset-2']) !!}
                                
                            </div>
                                <div class="col-md-4">
                                    {!! Form::text('jabatan',null,['class'=>'img-rounded img-responsive']) !!}
                                    {!! $errors->first('jabatan','<p class="help-block">:message</p>') !!}
                                </div>
                           <br><br>
                           </div>

                            <div class="form-group{{ $errors->has('foto') ? 'has-error' : '' }}">
                            	{!! Form::label('foto','Foto*',['class'=>'col-md-4 col-md-offset-2']) !!}
                                <div class="col-md-4">
                                @if(isset($kurikulum) && $kurikulum->foto)
                                <p>
                                    {!! Html::image(asset('image/'.$kurikulum->foto),null,['class'=>'img-rounded img-responsive']) !!}
                                </p>
                                @endif
                                    <input type="file" name="foto" class="btn btn-default btn-block" required=""></input>
                                    {!! $errors->first('foto','<p class="help-block">:message</p>') !!}
                                </div>
                            </div>

                             <div class="form-group{{ $errors->has('target') ? 'has-error' : '' }}">
                            <div>
                                {!! Form::label('target','Target Capaian*',['class'=>'col-md-10 col-md-offset-2']) !!}
                                
                            </div>
                                <div class="col-md-10 col-md-offset-2">
                                    {!! Form::textarea('target',null,['class'=>'ckeditor']) !!}
                                    {!! $errors->first('target','<p class="help-block">:message</p>') !!}
                                </div>
                           <br><br>
                           </div>

                            
                            <div class="form-group" align="center">
                                <div class="col-md-8 col-md-offset-2">
                                <br>
                                <center>
                                {!! Form::submit('Simpan kurikulum', ['class'=>'btn btn-primary pull-right']) !!}
                                </center>
                                </div>
                            </div>