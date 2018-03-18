                        
                     <div class="form-group{{ $errors->has('gambar') ? 'has-error' : '' }}">
                                {!! Form::label('gambar','Gambar Profil *',['class'=>'col-md-4 col-md-offset-2']) !!}
                                <div class="col-md-4">
                                @if(isset($komponen) && $komponen->gambar)
                                <p>
                                    {!! Html::image(asset('img/'.$komponen->gambar),null,['class'=>'img-rounded img-responsive']) !!}
                                </p>
                                @endif
                                    <input type="file" name="gambar" class="btn btn-default btn-block" ></input>
                                    {!! $errors->first('gambar','<p class="help-block">:message</p>') !!}
                                </div>
                            </div>

                               <div class="form-group{{ $errors->has('profil') ? 'has-error' : '' }}">
                            <div>
                                {!! Form::label('profil','profil *',['class'=>'col-md-10 col-md-offset-2']) !!}
                                
                            </div>
                                <div class="col-md-9 col-md-offset-2">
                                    {!! Form::textarea('profil',null,['class'=>'ckeditor']) !!}
                                    {!! $errors->first('profil','<p class="help-block">:message</p>') !!}
                                </div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

                         <div class="form-group{{ $errors->has('no') ? 'has-error' : '' }}">
                            <div>
                                {!! Form::label('no','No telpon*',['class'=>'col-md-4 col-md-offset-2']) !!}
                                
                            </div>
                                <div class="col-md-6">
                                    {!! Form::text('no',null,['class'=>'img-rounded img-responsive']) !!}
                                    {!! $errors->first('no','<p class="help-block">:message</p>') !!}
                                </div><br>

                                <div class="form-group{{ $errors->has('email') ? 'has-error' : '' }}">
                            <div>
                                {!! Form::label('email','Email*',['class'=>'col-md-4 col-md-offset-2']) !!}
                                
                            </div>
                                <div class="col-md-4">
                                    {!! Form::text('email',null,['class'=>'img-rounded img-responsive']) !!}
                                    {!! $errors->first('email','<p class="help-block">:message</p>') !!}
                                </div>

                                  <div class="form-group{{ $errors->has('logo') ? 'has-error' : '' }}">
                                {!! Form::label('logo','Logo *',['class'=>'col-md-4 col-md-offset-2']) !!}
                                <div class="col-md-4">
                                @if(isset($komponen) && $komponen->logo)
                                <p>
                                    {!! Html::image(asset('img/'.$komponen->logo),null,['class'=>'img-rounded img-responsive']) !!}
                                </p>
                                @endif
                                    <input type="file" name="logo" class="btn btn-default btn-block" ></input>
                                    {!! $errors->first('logo','<p class="help-block">:message</p>') !!}
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