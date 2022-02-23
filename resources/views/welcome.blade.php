@extends('master')
@section('content')


   <section id="content">
      <div class="container">
        <div class="row">
          <div class="span8">
            @foreach ($posts as $post)
                
           
            <article>
              <div class="row">
                <div class="span8">
                  <div class="post-image">
                    <div class="post-heading">
                      <h3><a href="{{url('post-view/'.$post->id)}}">{{$post->title}} </a></h3>
                    </div>
                    @php
                        $post['image'] = explode('|',$post->image);
                        $images = $post->image[0];
                    @endphp
                    <img src="{{asset('/image/' .$images)}}" alt="" />
                  </div>
                  <p>
              
                    @php
                    // limit the text
                        $description = Illuminate\Support\Str::of($post->description)->limit(400);
                    @endphp
                    {!!$description!!}
                  </p>
                  <div class="bottom-article">
                    <ul class="meta-post">
                      <li><i class="icon-calendar"></i><a href="#">{{Carbon\Carbon::parse($post->created_at)->format('M d, Y')}} </a></li>
                      <li><i class="icon-user"></i><a href="#"> Masud</a></li>
                      <li><i class="icon-folder-open"></i><a href="{{url('/category/'.$post->category->id)}}">{{$post->category->name}} </a></li>
                      <li><i class="icon-comments"></i><a href="{{url('post-view/'.$post->id)}}#disqus_thread">Comments</a></li>
                    </ul>
                    <a href="{{url('post-view/'.$post->id)}} " class="pull-right">Continue reading <i class="icon-angle-right"></i></a>
                  </div>
                </div>
              </div>
            </article>
             @endforeach
            
            <div id="pagination">
              <span class="all">Page 1 of 3</span>
              <span class="current">1</span>
              <a href="#" class="inactive">2</a>
              <a href="#" class="inactive">3</a>
            </div>
          </div>

          
          @include('sidebar')
   
        </div>
      </div>
    </section> 
@endsection