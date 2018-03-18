@php
$komponen=App\Komponen::find(1);
$fasilitas=App\Fasilitas::all();
$kerjasama=App\Perusahaan::all();
$berita=App\Berita::all();
$prestasi=App\Prestasi::all();
@endphp


<!DOCTYPE html>

<html lang="en">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="Bootstrap, Parallax, Template, Registration, Landing">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="Grayrids">
    <title>Teknik Kendaraan Ringan</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('mate/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('mate/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('mate/css/line-icons.css')}}">
    <link rel="stylesheet" href="{{asset('mate/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('mate/css/owl.theme.css')}}">
    <link rel="stylesheet" href="{{asset('mate/css/nivo-lightbox.css')}}">
    <link rel="stylesheet" href="{{asset('mate/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('mate/css/slicknav.css')}}">
    <link rel="stylesheet" href="{{asset('mate/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('mate/css/main.css')}}">    
    <link rel="stylesheet" href="{{asset('mate/css/responsive.css')}}">
    

  </head>
  <body>

    <!-- Header Section Start -->
    <header id="hero-area" data-stellar-background-ratio="0.5">    
      <!-- Navbar Start -->
      <nav class="navbar navbar-expand-lg fixed-top scrolling-navbar indigo">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            @php
$komponen=App\Komponen::find(1);
@endphp
            <a href="index.html" class="navbar-brand"><img class="img-fulid" src="{{asset('img/'.$komponen->logo)}}" alt="" style="height: 100px;"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
              <i class="lnr lnr-menu"></i>
            </button>
          </div>
          <div class="collapse navbar-collapse" id="main-navbar">
            <ul class="navbar-nav mr-auto w-100 justify-content-end">
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#hero-area">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#services">Profil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#features">Kurikulum</a>
              </li>
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#portfolios">Fasilitas</a>
              </li>
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#team">Kerja Sama</a>
              </li>
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#testimonial">Testimoni</a>
              </li>
               
               <li class="nav-item">
                <a class="nav-link page-scroll" href="#prestasi">Prestasi</a>
              </li>
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#contact">Kontak</a>
              </li>
            </ul>
          </div>
        </div>

        <!-- Mobile Menu Start -->
        <ul class="mobile-menu">
           <li>
              <a class="page-scroll" href="#hero-area">Home</a>
            </li>
            <li>
              <a class="page-scroll" href="#services">Services</a>
            </li>
            <li>
              <a class="page-scroll" href="#features">Features</a>
            </li>
            <li>
              <a class="page-scroll" href="#portfolios">Works</a>
            </li>
            <li>
              <a class="page-scroll" href="#pricing">Pricing</a>
            </li>
            <li>
              <a class="page-scroll" href="#team">Team</a>
            </li>
            <li >
              <a class="page-scroll" href="#blog">Blog</a>
            </li>
            <li>
              <a class="page-scroll" href="#contact">Contact</a>
            </li>
        </ul>
        <!-- Mobile Menu End -->

      </nav>
      <!-- Navbar End -->   
    
      <div class="container">      
        <div class="row justify-content-md-center">
          <div class="col-md-10">
            <div class="contents text-center">
              <h1 class="wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="0.3s">Teknik Kendaraan Ringan</h1>
              <p class="lead  wow fadeIn" data-wow-duration="1000ms" data-wow-delay="400ms">SMK ASSALAAM BANDUNG</p>
            </div>
          </div>
        </div> 
      </div>           
    </header>
    <!-- Header Section End --> 

    <!-- Services Section Start -->
      

    <section id="services" class="section" data-stellar-background-ratio="-0.2">
      <div class="container">
        <div class="section-header">          
          <h2 class="section-title" data-wow-duration="10ms" data-wow-delay="0.3s">Profil TKR</h2>
          <hr class="lines wow zoomIn" data-wow-delay="0.3s"><br>
          
          <img src="{{asset('img/'.$komponen->gambar)}}" style="height: 300px">  
           <h6 class="my-2"><font color="black">{!!$komponen->profil!!}</font></h6>
        </div>
        <p></p>
        
      </div>
    </section>
    <!-- Services Section End -->

    <!-- Features Section Start -->
    @php
    $kurikulums = App\kurikulum::all();
    @endphp
    <section id="features"  class="section-header">          
          <h2 class="section-title">Kurikulum</h2>
          <hr class="lines">
          <p class="section-subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, dignissimos! <br> Lorem ipsum dolor sit amet, consectetur.</p>
          <div class="testimonial-item">
            @foreach($kurikulums as $kurikulum)
                <img src="{{asset('image/'.$kurikulum->foto)}}" alt="Client Testimonoal" class="img img-responsive img-circle" style="  padding-left: 70px;"  />
                <div class="testimonial-text">
              
                <div class="social-icons" >
                  <h3>{{$kurikulum->nama}}</h3>
                  <h3>{{$kurikulum->jabatan}}</h3><br><br>
                    <div class="social-icons">
                      
                  <ul>
                
                    <li class="facebook"><a href="https://www.facebook.com/smkassalaam/"><i class="fa fa-facebook"></i></a></li>
                    <li class="twitter"><a href="https://twitter.com/smkassalaam/"><i class="fa fa-twitter"></i></a></li>
                    <li class="instagram"><a href="#"><i class="fa fa-instagram"></i></a></li>
                   
                  </ul>
                  </div>
                  <h3>{!!$kurikulum->target!!}</h4>
                </div>
                  @endforeach
              </div>
        </div>
     
      </div>
    </section>
    <!-- Features Section End -->    

    <!-- Portfolio Section -->
    <section id="portfolios" class="section">
      <!-- Container Starts -->
      <div class="container">
        <div class="section-header">          
          <h2 class="section-title">Fasilitas</h2>
          <hr class="lines">
          <p class="section-subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, dignissimos! <br> Lorem ipsum dolor sit amet, consectetur.</p>
        </div>
        <div class="row">          
          <div class="col-md-12">
          </div>
          <!-- Portfolio Recent Projects -->
            <div id="portfolio" class="row">
              @foreach($fasilitas as $data)
              <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix development print">
                <div class="portfolio-item">
                <div class="shot-item">
                 <img src="{{asset('image/'.$data->gambar)}}"  alt="" style=" s padding-left: 70px;"/>
                    <a class="overlay lightbox" href="{{asset('image/'.$data->gambar)}}">
                      <i class="lnr lnr-eye item-icon"></i>
                    </a>
                  </div>               
                </div>
              </div>
             @endforeach
            </div>
           
          </div>
        </div>
      </div>
      <!-- Container Ends -->
    </section>
    <!-- Portfolio Section Ends --> 

    <!-- Team section Start -->


    <section id="team" class="section">
      <div class="container">
        <div class="section-header">          
          <h2 class="section-title">Kerja Sama</h2>
          <hr class="lines">
          <p class="section-subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, dignissimos! <br> Lorem ipsum dolor sit amet, consectetur.</p>
        </div>
        <div class="row">
          @foreach($kerjasama as $data)
        <img src="{{asset('image/'.$data->logo)}}" alt="" style=" padding-left: 70px;" />
         @endforeach
            </div>
          </div>
          
        </div>
      </div>
    </section> 

      <section id="prestasi" class="section">
      <div class="container">
        <div class="section-header">          
          <h2 class="section-title">Prestasi</h2>
          <hr class="lines">
          <p class="section-subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, dignissimos! <br> Lorem ipsum dolor sit amet, consectetur.</p>
        </div>
        <div class="row">
          @foreach($prestasi as $data)
        <img src="{{asset('image/'.$data->gambar)}}" alt="" style="  padding-left: 70px;" /><br> 
           <h6 class="my-2"><span>{!!$data->judul!!}</span></h6>


         @endforeach
            </div>
          </div>
          
        </div>
      </div>
    </section>
    <!-- Team section End -->
    @php
    $alumnis = App\alumni::all();
    $industris = App\industri::all();
    @endphp

    <!-- testimonial Section Start -->
    <div id="testimonial" class="section" data-stellar-background-ratio="0.1">
      <div class="container">
     <center> <h4>Testimoni Alumni</h4></center><br>
      <hr class="lines">
        <div class="row justify-content-md-center">
          <div class="col-md-12">
            <div class="touch-slider owl-carousel owl-theme">
              @foreach($alumnis as $alumni)
              <div class="testimonial-item">
                <img src="{{asset('image/'.$alumni->foto)}}" alt="Client Testimonoal" style="height: 250px; width: 250px;"  />
                <div -text">
                  <span>{!!$alumni->testimonni!!}</span>
                  <h1>{{$alumni->nama}}</h1>
                  <span>{{$alumni->perusahaan}}</span>
                </div>
              </div>
             @endforeach
            
            </div>

            </div>
             
           

          </div>
        </div> 
        <br><br>
<!-- <center> <h4>Testimoni Industri</h4></center><br>
 <hr class="lines">
        <div class="row justify-content-md-center">
          <div class="col-md-12">
            <div class="touch-slider owl-carousel owl-theme">
              @foreach($industris as $industri)
              <div class="testimonial-item">
                <img src="{{asset('img/'.$industri->foto)}}" alt="Client Testimonoal" style="height: 250px; width: 250px; "/>
                <div class="testimonial-text">
                  <p>{!!$industri->testimonni!!}</p>
                  <h3>{{$industri->nama}}</h3>
                  <span>{{$industri->perusahaan}}</span>
                </div>
              </div>
             @endforeach
             
             
              
            </div>
          </div>
        </div>  -->       

      </div>
    </div>


  <!--  @php
    $industris = App\industri::all();
    @endphp
      <div id="testimonial" class="section" data-stellar-background-ratio="0.1">
      <div class="container">
     <center> <h4>Testimoni Industri</h4></center><br>
        <div class="row justify-content-md-center">
          <div class="col-md-12">
            <div class="touch-slider owl-carousel owl-theme">
              @foreach($industris as $industri)
              <div class="testimonial-item">
                <img src="{{asset('img/'.$industri->foto)}}" alt="Client Testimonoal" style="height: 250px; width: 250px; "/>
                <div class="testimonial-text">
                  <p>{{$industri->tetimoni}}</p>
                  <h3>{{$industri->nama}}</h3>
                  <span>{{$industri->perusahaan}}</span>
                </div>
              </div>
             @endforeach
             
             
              
            </div>
          </div>
        </div>        
      </div>
    </div>  -->
    <!-- testimonial Section Start -->

    <!-- Contact Section Start -->
    <section id="contact" class="section" data-stellar-background-ratio="-0.2">      
      <div class="contact-form">
        <div class="container">
          <div class="row">     
            <div class="col-md-6">
              <div class="contact-us">
                <h3>Contact With us</h3>
                <div class="contact-address">
                  <p class="phone">Phone: <span>{{$komponen->no}}</span></p>
                  <p class="email">E-mail: <span>{{$komponen->email}}</span></p>
                </div>
                <div class="social-icons">
                  <ul>
                    <li class="facebook"><a href="https://www.facebook.com/smkassalaam/"><i class="fa fa-facebook"></i></a></li>
                    <li class="twitter"><a href="https://twitter.com/smkassalaam/"><i class="fa fa-twitter"></i></a></li>
                   
                  </ul>
                </div>
              </div>
              
            </div>    
           
<!--             <div class="col-lg-6 col-sm-6 col-xs-12">
             <center> <p>Anda bisa mengirimkan kritik dan saran</p></center>
              <div class="contact-block">
                {!! Form::open(['url'=>route('pesan.store'), 'method'=>'post', ]) !!}
                  <div class="row">

                    <div class="col-md-12">
                      <div class="form-group">
                        <input type="text" class="form-control" id="name" name="nama" placeholder="Nama" required data-error="Please enter your nama">
                        <div class="help-block with-errors"></div>
                      </div>                                 
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <input type="text" placeholder="Email" id="email" class="form-control" name="email" required data-error="Please enter your email">
                        <div class="help-block with-errors"></div>
                      </div> 
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <input type="text" placeholder="Subjek" id="subjek" class="form-control" name="subjek" required data-error="Please enter your subjek">
                        <div class="help-block with-errors"></div>
                      </div> 
                    </div>
                    <div class="col-md-12">
                      <div class="form-group"> 
                        <textarea class="form-control" id="message" placeholder="Pesan" name="pesan" rows="8" data-error="Write your message" required></textarea>
                        <div class="help-block with-errors"></div>
                      </div>
                      <div class="submit-button text-center">
                        <button class="btn btn-common" id="submit" type="submit">Kirim</button>
                        <div id="msgSubmit" class="h3 text-center hidden"></div> 
                        <div class="clearfix"></div> 
                      </div>
                    </div>
                  </div>            
                {!! Form::close() !!}
              </div>

 
            </div> -->

                
            <div class="col-md-6 ">       
           <div class="contact-us">
                <h3>BERITA</h3>
                <div class="contact-address">
            @foreach($berita as $data)
            <div class="row">
            <div class="col-md-3">
            <a href="{{url('show',$data->id)}}"> <img src="{{asset('image/'.$data->gambar)}}" style="height: 100px; width: 100px;"  /></a>
             </div>
            <div class="col-md-8">
           <h6 class="m"></span>{!!$data->judul!!}</span></h6>
           <h6 class="my-2"><span>{!!str_limit($data->isi,10)!!}</span></h6>
           <h6 class="my-2"><span>{!!$data->tanggal!!}</span></h6>
           </div>
           </div>
            @endforeach
      </div>
      
          </div>
        </div>
      </div>           
    </section>
     <style>
       #map {
        height: 400px;
        width: 100%;
       }
    </style>
  </head>
  <body>

 <!--  -->


    <!-- Contact Section End -->

    <!-- Footer Section Start -->
    <footer>          
      <div class="container">
        <div class="row">
          <!-- Footer Links -->
          <div class="col-lg-6 col-sm-6 col-xs-12">
            <ul class="footer-links">
             
            </ul>
          </div>
          <div class="col-lg-6 col-sm-6 col-xs-12">
            <div class="copyright">
            <img src="{{asset('img/logo-1.png')}}" style="height: 50px">
              <p>Teknik kendaraan Ringan <a rel="nofollow" href="https://uideck.com"></a></p>
            </div>
          </div>  
        </div>
      </div>
    </footer>
    <!-- Footer Section End --> 

    <!-- Go To Top Link -->
    <a href="#" class="back-to-top">
      <i class="lnr lnr-arrow-up"></i>
    </a>
    
    <div id="loader">
      <div class="spinner">
        <div class="double-bounce1"></div>
        <div class="double-bounce2"></div>
      </div>
    </div>     

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
  
    <script src="{{asset('mate/js/jquery-min.js')}}"></script>
    <script src="{{asset('mate/js/popper.min.js')}}"></script>
    <script src="{{asset('mate/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('mate/js/jquery.mixitup.js')}}"></script>
    <script src="{{asset('mate/js/nivo-lightbox.js')}}"></script>
    <script src="{{asset('mate/js/owl.carousel.js')}}"></script>    
    <script src="{{asset('mate/js/jquery.stellar.min.js')}}"></script>    
    <script src="{{asset('mate/js/jquery.nav.js')}}"></script>    
    <script src="{{asset('mate/js/scrolling-nav.js')}}"></script>    
    <script src="{{asset('mate/js/jquery.easing.min.js')}}"></script>    
    <script src="{{asset('mate/js/smoothscroll.js')}}"></script>    
    <script src="{{asset('mate/js/jquery.slicknav.js')}}"></script>     
    <script src="{{asset('mate/js/wow.js')}}"></script>   
    <script src="{{asset('mate/js/jquery.vide.js')}}"></script>
    <script src="{{asset('mate/js/jquery.counterup.min.js')}}"></script>    
    <script src="{{asset('mate/js/jquery.magnific-popup.min.js')}}"></script>    
    <script src="{{asset('mate/js/waypoints.min.js')}}"></script>    
    <script src="{{asset('mate/js/form-validator.min.js')}}"></script>
    <script src="{{asset('mate/js/contact-form-script.js')}}"></script>   
    <script src="{{asset('mate/js/main.js')}}"></script>



     <!--Start of Tawk.to Script-->
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5aaa22d74b401e45400dbfe3/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
<!--End of Tawk.to Script-->





   

  </body>
</html>