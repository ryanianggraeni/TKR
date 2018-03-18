
                            

                            <div class="form-group{{ $errors->has('logo') ? 'has-error' : '' }}">
                            	{!! Form::label('logo','Logo Perusahaan *',['class'=>'col-md-4 col-md-offset-2']) !!}
                                <div class="col-md-4">
                                @if(isset($perusahaan) && $perusahaan->logo)
                                <p>
                                    {!! Html::image(asset('image/'.$perusahaan->logo),null,['class'=>'img-rounded img-responsive']) !!}
                                </p>
                                @endif
                                    <input type="file" name="logo" class="btn btn-default btn-block" required=""></input>
                                    {!! $errors->first('logo','<p class="help-block">:message</p>') !!}
                                </div>
                            </div>
                            
                            <div class="form-group" align="center">
                                <div class="col-md-8 col-md-offset-2">
                                <br>
                                <center>
                                {!! Form::submit('Simpan Perusahaan', ['class'=>'btn btn-primary pull-right']) !!}
                                </center>
                                </div>
                            </div>