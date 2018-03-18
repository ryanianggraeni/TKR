
                            

                            <div class="form-group{{ $errors->has('gambar') ? 'has-error' : '' }}">
                            	{!! Form::label('gambar','Foto Kegiatan *',['class'=>'col-md-4 col-md-offset-2']) !!}
                                <div class="col-md-4">
                                @if(isset($berita) && $berita->gambar)
                                <p>
                                    {!! Html::image(asset('image/'.$berita->gambar),null,['class'=>'img-rounded img-responsive']) !!}
                                </p>
                                @endif
                                    <input type="file" name="gambar" class="btn btn-default btn-block" required=""></input>
                                    {!! $errors->first('gambar','<p class="help-block">:message</p>') !!}
                                </div>
                            </div>


                             <div class="form-group{{ $errors->has('judul') ? 'has-error' : '' }}">
                            <div>
                                {!! Form::label('judul','Judul *',['class'=>'col-md-4 col-md-offset-2']) !!}
                                
                            </div>
                                <div class="col-md-4">
                                    {!! Form::text('judul',null,['class'=>'img img-responsive']) !!}
                                    {!! $errors->first('judul','<p class="help-block">:message</p>') !!}
                                </div>
                            </div>

                             <div class="form-group{{ $errors->has('tanggal') ? 'has-error' : '' }}">
                            <div>
                                {!! Form::label('tanggal','Tanggal Kegiatan *',['class'=>'col-md-4 col-md-offset-2']) !!}
                                
                            </div>
                                <div class="col-md-4">
                                    {!! Form::date('tanggal',null,['class'=>'img img-responsive']) !!}
                                    {!! $errors->first('tanggal','<p class="help-block">:message</p>') !!}
                                </div>
                            </div>

                            @php
                            $kategori =App\KategoriBerita::all();
                            @endphp
                            <div class="form-group">
                            <div>

                                 {!! Form::label('kategori','kategori *',['class'=>'col-md-2 col-md-offset-2' ]) !!}
                                
                            </div>
                            <div class="col-md-4">
                            <select name="kategori" class="form-control">
                                @foreach($kategori as $data)
                                <option value="{{$data->nama}}">{{$data->nama}}</option>
                                @endforeach
                            </select>
                            </div>
                            </div>
                             <div class="form-group{{ $errors->has('isi') ? 'has-error' : '' }}">
                            <div>
                                {!! Form::label('isi','Keterangan *',['class'=>'col-md-2 col-md-offset-2']) !!}
                                
                            </div>
                                <div class="col-md-9 col-md-offset-2">
                                    {!! Form::textarea('isi',null,['class'=>'ckeditor']) !!}
                                    {!! $errors->first('isi','<p class="help-block">:message</p>') !!}
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