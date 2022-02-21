@extends('master')
@section('content')


   <section id="content">
      <div class="container">
        <div class="row">
          <div class="span8">
               <article>
              <div class="row">
                <div class="span8">
                  <div class="post-image">
                    <div class="post-heading">
                      <h3><a href="#">{{$posts->title}}</a></h3>
                    </div>
                    <img src="img/dummies/blog/img1.jpg" alt="" />
                  </div>
                  <p>
                    {!!$posts->description!!}
                  </p>
               
                  <div class="bottom-article">
                    <ul class="meta-post">
                      <li><i class="icon-calendar"></i><a href="#"> {{Carbon\Carbon::parse($posts->created_at)->format('M d, Y')}}</a></li>
                      <li><i class="icon-user"></i><a href="#"> Admin</a></li>
                      <li><i class="icon-folder-open"></i><a href="#"> Blog</a></li>
                      <li><i class="icon-tags"></i><a href="#">{{$posts->category->name}}</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </article>
              <!-- author info -->
            <div class="about-author">
              <a href="#" class="thumbnail align-left"><img src="{{asset('img/avatar.png')}} " alt="" /></a>
              <h5><strong><a href="#">মাসুদ রানা</a></strong></h5>
              <p>
               একজন ওয়েব ডেভেলপার ,যে জানতে ও শিখতে ভালোবাসে। নতুন কিছূ করতে ভালোবাসে। 
              </p>
            </div>
            <div class="comment-area">
              <h4>4 Comments</h4>
              <div class="media">
                <a href="#" class="thumbnail pull-left"><img src="img/avatar.png" alt="" /></a>
                <div class="media-body">
                  <div class="media-content">
                    <h6><span>March 12, 2013</span> Karen medisson</h6>
                    <p>
                      Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                    </p>
                    <a href="#" class="align-right">Reply comment</a>
                  </div>
                </div>
              </div>
              <div class="media">
                <a href="#" class="thumbnail pull-left"><img src="img/avatar.png" alt="" /></a>
                <div class="media-body">
                  <div class="media-content">
                    <h6><span>March 12, 2013</span> Smith sanderson</h6>
                    <p>
                      Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                    </p>
                    <a href="#" class="align-right">Reply comment</a>
                  </div>
                  <div class="media">
                    <a href="#" class="thumbnail pull-left"><img src="img/avatar.png" alt="" /></a>
                    <div class="media-body">
                      <div class="media-content">
                        <h6><span>March 12, 2013</span> Thomas guttenberg</h6>
                        <p>
                          Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                        </p>
                        <a href="#" class="align-right">Reply comment</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="media">
                <a href="#" class="thumbnail pull-left"><img src="img/avatar.png" alt="" /></a>
                <div class="media-body">
                  <div class="media-content">
                    <h6><span>March 12, 2013</span> Vicky lumora</h6>
                    <p>
                      Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                    </p>
                    <a href="#" class="align-right">Reply comment</a>
                  </div>
                </div>
              </div>
              <h4>Leave your comment</h4>
              <form id="commentform" action="#" method="post" name="comment-form">
                <div class="row">
                  <div class="span4">
                    <input type="text" placeholder="* Enter your full name" />
                  </div>
                  <div class="span4">
                    <input type="text" placeholder="* Enter your email address" />
                  </div>
                  <div class="span4 margintop10">
                    <input type="text" placeholder="Enter your website" />
                  </div>
                  <div class="span8 margintop10">
                    <p>
                      <textarea rows="12" class="input-block-level" placeholder="*Your comment here"></textarea>
                    </p>
                    <p>
                      <button class="btn btn-theme margintop10" type="submit">Submit comment</button>
                    </p>
                  </div>
                </div>
              </form>
            </div>    
           
            
            
            
          </div>

          
          @include('sidebar')
   
        </div>
      </div>
    </section> 
@endsection