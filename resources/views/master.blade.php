<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Masud's Blog</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="" />
  <meta name="author" content="Blog" />

  <!-- css -->
  <link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,400italic,700|Open+Sans:300,400,600,700" rel="stylesheet">
  <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" />
  <link href="{{asset('css/bootstrap-responsive.css')}}" rel="stylesheet" />
  <link href="{{asset('css/fancybox/jquery.fancybox.css')}}" rel="stylesheet">
  <link href="{{asset('css/jcarousel.css')}}" rel="stylesheet" />
  <link href="{{asset('css/flexslider.css')}}" rel="stylesheet" />
  <link href="{{asset('css/style.css')}}" rel="stylesheet" />
  <!-- Theme skin -->
  <link href="{{asset('skins/default.css')}}" rel="stylesheet" />
  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png" />
  <link rel="shortcut icon" href="{{asset('ico/favicon.png')}}" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
      
 
  

</head>

<body>
  <div id="wrapper">
   
    <header>
        @include('header')
    </header>
    <!-- end header -->

   <!-- SECTION -->
		@yield('content')
        
	<!-- /SECTION -->

    <footer>
      @include('footer')
    </footer>
    
  </div>
  <a href="#" class="scrollup"><i class="icon-chevron-up icon-square icon-32 active"></i></a>
  <!-- javascript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="{{asset('js/jquery.js')}}"></script>
  <script src="{{asset('js/jquery.easing.1.3.js')}}"></script>
  <script src="{{asset('js/bootstrap.js')}}"></script>
  <script src="{{asset('js/jcarousel/jquery.jcarousel.min.js')}}"></script>
  <script src="{{asset('js/jquery.fancybox.pack.js')}}"></script>
  <script src="{{asset('js/jquery.fancybox-media.js')}}"></script>
  <script src="{{asset('js/google-code-prettify/prettify.js')}}"></script>
  <script src="{{asset('js/portfolio/jquery.quicksand.js')}}"></script>
  <script src="{{asset('js/portfolio/setting.js')}}"></script>
  <script src="{{asset('js/tweet/jquery.tweet.js')}}"></script>
  <script src="{{asset('js/jquery.flexslider.js')}}"></script>
  <script src="{{asset('js/jquery.nivo.slider.js')}}"></script>
  <script src="{{asset('js/modernizr.custom.js')}}"></script>
  <script src="{{asset('js/jquery.ba-cond.min.js')}}"></script>
  <script src="{{asset('js/jquery.slitslider.js')}}"></script>
  <script src="{{asset('js/animate.js')}}"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
  <script src="{{ asset('js/share.js') }}"></script>

  <!-- Template Custom JavaScript File -->
  <script src="js/custom.js"></script>
  <script id="dsq-count-scr" src="//masudblog.disqus.com/count.js" async></script>

</body>

</html>
