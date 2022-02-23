<!-- start header -->
      <div class="container">
       
       
       
        <div class="row">
          <div class="span4">
            <div class="logo">
              <br>
              <a href="{{url('/')}}"><img src="{{asset('img/logo.png')}}" alt="" class="logo"  /></a>
              <!-- <h1>Masud's Blog</h1> -->
            </div>
          </div>
          <div class="span8">
            <div class="navbar navbar-static-top">
              <div class="navigation">
                <nav>
                  <ul class="nav topnav">
                    <li class="dropdown">
                      <a href="{{url('/')}} ">Home</i></a>
                      
                  
                    {{-- <li class="dropdown">
                      <a href="#">Pages <i class="icon-angle-down"></i></a>
                      <ul class="dropdown-menu">
                        <li><a href="about.html">About us</a></li>
                        <li><a href="pricingbox.html">Pricing boxes</a></li>
                        <li><a href="testimonials.html">Testimonials</a></li>
                        <li><a href="404.html">404</a></li>
                      </ul>
                    </li> --}}
                   
                    @foreach ($categories as $category)
                  
                <li>
                      <a href="{{url('/category/'.$category->id)}}">{{$category->name}} </a>
                    
                    </li>
           
                   @endforeach
                    
                  </ul>
                </nav>
              </div>
              <!-- end navigation -->
            </div>
          </div>
        </div>
      </div>
