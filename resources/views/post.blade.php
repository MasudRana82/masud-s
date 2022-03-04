@extends('master')
@section('content')
 <style>
            .social-btn-sp #social-links {
                margin: 0 auto;
                max-width: 500px;
            }
            .social-btn-sp #social-links ul li {
                display: inline-block;
            }          
            .social-btn-sp #social-links ul li a {
                    padding: 7px;
                    border: 1px solid #fff;
                    margin: 11px;
                    font-size: 20px;
            }
            table #social-links{
                display: inline-table;
            }
            table #social-links ul li{
                display: inline;
            }
            table #social-links ul li a{
                padding: 5px;
                border: 1px solid #ccc;
                margin: 1px;
                font-size: 15px;
                background: #f4f4f7;
            }
        </style>
<section id="content">
   
      <div class="container">
        <div class="row">
          <div class="span8">
               
              <div class="row">
                <div class="span8">
                  <div class="post-image">
                    <div class="post-heading">
                      <h3><a href="#">{{$posts->title}}</a></h3>
                    </div>
                    
                    
                <div class="bottom-article">
                    <ul class="meta-post">
                      <li><i class="icon-calendar"></i><a href="#"> {{Carbon\Carbon::parse($posts->created_at)->format('M d, Y')}}</a></li>
                      <li><i class="icon-user"></i><a href="#"> Masud </a></li>
                      <li><i class="icon-folder-open"></i><a href="{{url('/category/'.$posts->category->id)}}"> {{$posts->category->name}}</a></li>
                            <li> 
                      
             {!!    Share::currentPage()->facebook()->twitter()->linkedin()->reddit()->telegram() !!}
            </li> 
            <li>Page Views: {{$posts->reads}}</li>
                    </ul>
       
                  </div>
 
                  <br>
                  <br>
                  
                    @php
                        $posts['image']= explode('|',$posts->image);
                        $images1= $posts->image[0];
                        // $images2= $posts->image[1];
                    @endphp

        <img src="{{asset('/image/'.$images1)}}" alt="" />
                  </div>
                  <p>
                    {!!$posts->description!!}
                  </p>
                 {{-- <img src="{{asset('/image/'.$images2)}}" alt="" /> --}}
                  
                  <div class="bottom-article">
                    <ul class="meta-post">
                      <li><i ></i><a href="#">Related Tags:</a></li>
                      @foreach ($posts->tag as $data)
                     
                      <li><i class="icon-tags"></i><a href="#">#{{$data->name}} </a></li>
                     @endforeach
                      
                    </ul>
                  
                  </div>
               <div class="bottom-article">
                 
                     <div class="social-btn-sp">
                      
             {!!    Share::currentPage()->facebook()->twitter()->linkedin()->reddit()->telegram() !!}
            </div>
               </div>
                    
                      
                      
                   
                  <span> </span>
                  
                </div>
              </div>
            
              <!-- author info -->
            <div class="about-author" >
              <a href="#" class="thumbnail align-left"><img src="{{asset('img/avatar.png')}} " alt="" /></a>
              <h5><strong><a href="#">মাসুদ রানা</a></strong></h5>
              <p>
               একজন লারাভেল ওয়েব ডেভেলপার ,যে জানতে ও নতুন কিছূ করতে ভালোবাসে। 
              </p>
            </div>
            <div class="comment-area">
              <h4><a href="#disqus_thread"> Comments </a></h4>
              <div id="disqus_thread"></div>
<script>
 
    (function() { // DON'T EDIT BELOW THIS LINE
    var d = document, s = d.createElement('script');
    s.src = 'https://masudblog.disqus.com/embed.js';
    s.setAttribute('data-timestamp', +new Date());
    (d.head || d.body).appendChild(s);
    })();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>

            </div>    
           
            
            
            
          </div>

          
          @include('sidebar')
   
        </div>
      </div>
</section>
@endsection