<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
@php
$komponen=App\Komponen::find(1);
@endphp
<!DOCTYPE HTML>
<html>
<head>
<title>Teknik Kendaraan Ringan</title>
<script type="text/javascript" src="{{asset('ckeditor/ckeditor.js')}}"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="{{asset('admin/css/bootstrap.min.css')}}" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="{{asset('admin/css/style.css')}}" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="{{asset('admin/css/lines.css')}}" rel='stylesheet' type='text/css' />
<link href="{{asset('admin/css/font-awesome.css')}}" rel="stylesheet"> 
<!-- jQuery -->
<script src="{{asset('admin/js/jquery.min.js')}}"></script>
<!----webfonts--->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<!---//webfonts--->  
<!-- Nav CSS -->
<link href="{{asset('admin/css/custom.css')}}" rel="stylesheet">
<!-- Metis Menu Plugin JavaScript -->
<script src="{{asset('admin/js/metisMenu.min.js')}}"></script>
<script src="{{asset('admin/js/custom.js')}}"></script>
<!-- Graph JavaScript -->
<script src="{{asset('admin/js/d3.v3.js')}}"></script>
<script src="{{asset('admin/js/rickshaw.js')}}"></script>
</head>
<body>
<div id="wrapper">
     <!-- Navigation -->
        <nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand" href="index.html">TKR</a>
                <img src="{{asset('img/'.$komponen->logo)}}" style="height: 50px">
            </div>
            <!-- /.navbar-header -->
          
            
		
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="index.html"><i class="fa fa-dashboard fa-fw nav_icon"></i>Dashboard</a>
                        </li>


                         @role('author')
                        <li>
                            <a href="{{route('kurikulum.index')}}"><i class="fa fa-indent nav_icon"></i>Kurikulum</a>
                           
                            <!-- /.nav-second-level -->
                        </li>
                         <li>
                            <a href="{{route('perusahaan.index')}}"><i class="fa fa-circle nav_icon"></i>kerjasama</a>
                           
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="{{route('fasilitas.index')}}"><i class="fa fa-circle nav_icon"></i>Fasilitas</a>
                           
                            <!-- /.nav-second-level -->
                        </li>
                         <li>
                            <a href="{{route('prestasi.index')}}"><i class="fa fa-circle nav_icon"></i>Prestasi</a>
                           
                            <!-- /.nav-second-level -->
                        </li>

                        <li>
                            <a href="{{route('alumni.index')}}"><i class="fa fa-check-square-o nav_icon"></i>Testimoni</a>
                           
                            <!-- /.nav-second-level -->
                        </li>
                        

                          <li>
                            <a href="{{route('komponen.edit',1)}}"><i class="fa fa-table nav_icon"></i>Komponen</a>
                          
                            <!-- /.nav-second-level -->
                        </li>
                        <li><a class="fa fa-check-square-o nav_icon" href="#">Berita</a>
                          <ul>
                            <li><a href="{{route('berita.index',1)}}">Berita</a></li>

                            <li><a href="{{route('kategoriberita.index')}}">Kategori Berita</a></li>
                          </ul>
                        </li>

                      
                        <li>
                            <a href="{{url('akun/profile')}}"><i class="fa fa-user nav_icon"></i>Profil</a>
                          
                            <!-- /.nav-second-level -->
                        </li>
                        @endrole
                        

                        

                        @role('admin')
                        <li>
                            <a href="{{route('kurikulum.index')}}"><i class="fa fa-indent nav_icon"></i>Kurikulum</a>
                           
                            <!-- /.nav-second-level -->
                        </li>
                         <li>
                            <a href="{{route('perusahaan.index')}}"><i class="fa fa-circle nav_icon"></i>kerjasama</a>
                           
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="{{route('fasilitas.index')}}"><i class="fa fa-circle nav_icon"></i>Fasilitas</a>
                           
                            <!-- /.nav-second-level -->
                        </li>
                         <li>
                            <a href="{{route('prestasi.index')}}"><i class="fa fa-circle nav_icon"></i>Prestasi</a>
                           
                            <!-- /.nav-second-level -->
                        </li>

                        <li>
                            <a href="{{route('alumni.index')}}"><i class="fa fa-check-square-o nav_icon"></i>Testimoni</a>
                           
                            <!-- /.nav-second-level -->
                        </li>
                        

                          <li>
                            <a href="{{route('komponen.edit',1)}}"><i class="fa fa-table nav_icon"></i>Komponen</a>
                          
                            <!-- /.nav-second-level -->
                        </li>
                        <li><a class="fa fa-check-square-o nav_icon" href="#">Berita</a>
                          <ul>
                            <li><a href="{{route('berita.index',1)}}">Berita</a></li>

                            <li><a href="{{route('kategoriberita.index')}}">Kategori Berita</a></li>
                          </ul>
                        </li>

                        <li>
                            <a href="{{route('user.index')}}"><i class="fa fa-indent nav_icon"></i>User</a>
                           
                            <!-- /.nav-second-level -->
                        </li>


                      
                        <li>
                            <a href="{{url('akun/profile')}}"><i class="fa fa-user nav_icon"></i>Profil</a>
                          
                            <!-- /.nav-second-level -->
                        </li>
                        @endrole
                        

                         <li>
                            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="fa fa-lock"></i> Logout</a></li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                            <!-- /.nav-second-level -->
                        </li>


                        


                
              
            
                      
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
    </div>
        <div id="page-wrapper">
        	@yield('content')
        </div>
        
    <script src="{{asset('admin/js/bootstrap.min.js')}}"></script>
</body>
</html>
