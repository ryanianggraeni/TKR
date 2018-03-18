
                            
                            <div class="form-group{{ $errors->has('judul') ? 'has-error' : '' }}">
                            <div>
                                {!! Form::label('judul','Judul Prestasi *',['class'=>'col-md-4 col-md-offset-2']) !!}
                                
                            </div>
                                <div class="col-md-4">
                                    {!! Form::text('judul',null,['class'=>'img-rounded img-responsive']) !!}
                                    {!! $errors->first('judul','<p class="help-block">:message</p>') !!}
                                </div>
                            </div>

                            

                            <div class="form-group{{ $errors->has('gambar') ? 'has-error' : '' }}">
                                {!! Form::label('gambar','Foto Prestasi *',['class'=>'col-md-4 col-md-offset-2']) !!}
                                <div class="col-md-4">
                                @if(isset($prestasi) && $prestasi->gambar)
                                <p>
                                    {!! Html::image(asset('image/'.$prestasi->gambar),null,['class'=>'img-rounded img-responsive']) !!}
                                </p>
                                @endif
                                    <input type="file" name="gambar" class="btn btn-default btn-block" required=""></input>
                                    {!! $errors->first('gambar','<p class="help-block">:message</p>') !!}
                                </div>
                              </div> 
                            
                            <div class="form-group" align="center">
                                <div class="col-md-8 col-md-offset-2">
                                <br>
                                <center>
                                {!! Form::submit('Simpan Prestasi', ['class'=>'btn btn-primary pull-right']) !!}
                                </center>
                                </div>
                            </div>
