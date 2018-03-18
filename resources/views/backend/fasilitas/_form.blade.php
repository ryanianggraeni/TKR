
                            
                          
                             <div class="form-group{{ $errors->has('gambar') ? 'has-error' : '' }}">
                                {!! Form::label('gambar','Foto Fasilitas *',['class'=>'col-md-4 col-md-offset-2']) !!}
                                <div class="col-md-4">
                                @if(isset($fasilitas) && $fasilitas->gambar)
                                <p>
                                    {!! Html::image(asset('image/'.$fasilitas->gambar),null,['class'=>'img-rounded img-responsive']) !!}
                                </p>
                                @endif
                                    <input type="file" name="gambar" class="btn btn-default btn-block" required=""></input>
                                    {!! $errors->first('gambar','<p class="help-block">:message</p>') !!}
                                </div>
                            </div>
                               
                            
                            <div class="form-group" align="center">
                                <div class="col-md-5 col-md-offset-4">
                                <br>
                                <center>
                                {!! Form::submit('Simpan Fasilitas', ['class'=>'btn btn-primary']) !!}
                                </center>
                                </div>
                            </div>