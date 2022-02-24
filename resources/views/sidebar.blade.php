<div class="span4">
  <div class="about-author" >
             
            <aside class="right-sidebar">
              <div class="widget">
                <form class="form-search">
                  <input placeholder="Type something" type="text" class="input-medium search-query">
                  <button type="submit" class="btn btn-square btn-theme">Search</button>
                </form>
              </div>
              
              <div class="widget">
                <h5 class="widgetheading">Categories</h5>
                <ul class="cat">
                 @foreach ($categories as $category)
                     
                @php
                    $count= App\Models\Post::where('cat_id',$category->id)->where('status',1)->count();
                @endphp
                  <li><i class="icon-angle-right"></i><a href="{{url('/category/'.$category->id)}}">{{$category->name}} </a><span>({{$count}}) </span></li>
                   @endforeach
                </ul>
              </div>
              <div class="widget">
                <h5 class="widgetheading">Latest posts</h5>
                <ul class="recent">
                  @foreach ($latest as $data)
                      
              
                  <li>
                    @php
                        $data['image'] = explode('|',$data->image);
                        $images = $data->image[0];
                    @endphp
                    <a href="{{url('post-view/'.$data->id)}}">
                    {{-- <img src="{{asset('/image/' .$images)}}" alt="" class="pull-left" style="height: 60px; width:60px" /> --}}
                    
                     @php
                    // limit the text
                         $title = Illuminate\Support\Str::of($data->title)->limit(50);
                    @endphp
                  
                    <p>{{$title}}</p>
                    </a>
                    {{-- <p>
                      @php
                    // limit the text
                        $description = Illuminate\Support\Str::of($data->description)->limit(200);
                    @endphp
                      {!!$description!!} <a href="{{url('post-view/'.$data->id)}}">more </a>
                      
                    </p> --}}
                  </li>
                     @endforeach
                 
                </ul>
              </div>
              <div class="widget">
                <h5 class="widgetheading">Popular tags</h5>
                <ul class="tags">
                  @foreach ($tags as $tag)
                      
                 
                  <li><a href="{{url('/tag/'.$tag->id)}}">{{$tag->name}}</a></li>
                  @endforeach
                </ul>
              </div>
            </div>
              <div class="about-author" >
              <a href="#" class="thumbnail align-left"><img src="{{asset('img/avatar.png')}} " alt="" /></a>
              <h5><strong><a href="#">মাসুদ রানা</a></strong></h5>
              <p>
               একজন লারাভেল ওয়েব ডেভেলপার, যে জানতে ভালোবাসে ও নতুন কিছূ করতে ভালোবাসে। ✌️✌️✌️
              </p>
            </div>
            </aside>
          </div>
