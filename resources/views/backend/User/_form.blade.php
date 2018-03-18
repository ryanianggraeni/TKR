
                            
                            <div class="form-group{{ $errors->has('name') ? 'has-error' : '' }}">
                            <div>
                                {!! Form::label('name','Nama *',['class'=>'col-md-4 col-md-offset-2']) !!}
                                
                            </div>
                                <div class="col-md-4">
                                    {!! Form::text('name',null,['class'=>'img-rounded']) !!}
                                    {!! $errors->first('name','<p class="help-block">:message</p>') !!}
                                </div>
                           <br><br>
                           </div>


                            <div class="form-group{{ $errors->has('email') ? 'has-error' : '' }}">
                            <div>
                                {!! Form::label('email','Email*',['class'=>'col-md-4 col-md-offset-2']) !!}
                                
                            </div>
                                <div class="col-md-4">
                                    {!! Form::text('email',null,['class'=>'img-rounded img-responsive']) !!}
                                    {!! $errors->first('email','<p class="help-block">:message</p>') !!}
                                </div>
                           <br><br>
                           </div>


                            <div class="form-group{{ $errors->has('password') ? 'has-error' : '' }}">
                            <div>
                                {!! Form::label('password','Password*',['class'=>'col-md-4 col-md-offset-2']) !!}
                                
                            </div>
                                <div class="col-md-4">
                                    {!! Form::text('password',null,['class'=>'img-rounded img-responsive']) !!}
                                    {!! $errors->first('password','<p class="help-block">:message</p>') !!}
                                </div>
                           <br><br>
                           </div>

                             <div class="form-group{{ $errors->has('role') ? 'has-error' : '' }}">
                                  {!! Form::label('role','Hak Akses *',['class'=>'col-md-4  col-md-offset-2']) !!}
                                  <div class="col-md-4">
                                    <select name="role"  required="">
                                      @php
                                        $hak = App\Role::where('id','!=','1')->get();
                                      @endphp
                                      @foreach($hak as $kk)
                                      <option value="{{$kk->id}}">{{$kk->display_name}}</option>
                                      @endforeach
                                    </select>
                                    {!! $errors->first('role', '<p class="help-block">:message</p>') !!}
                                  </div>
                                </div>

                          

                            
                            <div class="form-group" align="center">
                                <div class="col-md-8 col-md-offset-2">
                                <br>
                                <center>
                                {!! Form::submit('Simpan kurikulum', ['class'=>'btn btn-primary pull-right']) !!}
                                </center>
                                </div>
                            </div>