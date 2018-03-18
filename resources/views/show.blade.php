

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
         
        
        </div>

      </nav>
      <!-- Navbar End -->   
    
   
    </header>

    
     <section id="team" class="section">
      <div class="container">
        <div class="section-header">          
          <h2 class="section-title">Berita</h2>
          <hr class="lines">
        </div>
        <div class="row">
          <div class="col-md-12">
        <center> <img src="{{asset('image/'.$berita->gambar)}}" alt="" style="height: 300px; width: 400px" />
          <p>{{$berita->judul}}</p>
        <p>{{$berita->tanggal}}</p></center>
       </div>
       <div >
        
        
        <p>{!!$berita->isi!!}</p>
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








   

  </body>
</html>