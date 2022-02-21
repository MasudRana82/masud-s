<div class="span4">
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
                     
                
                  <li><i class="icon-angle-right"></i><a href="#">{{$category->name}} </a><span> (20)</span></li>
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
                    <img src="{{asset('/image/' .$images)}}" alt="" class="pull-left" style="height: 60px; width:60px" />
                    
                     @php
                    // limit the text
                        $title = Illuminate\Support\Str::of($data->title)->limit(25);
                    @endphp
                  
                    <h6><a href="{{url('post-view/'.$data->id)}}">{{$title}}</a></h6>
                    <p>
                      @php
                    // limit the text
                        $description = Illuminate\Support\Str::of($data->description)->limit(200);
                    @endphp
                      {!!$description!!}
                    </p>
                  </li>
                     @endforeach
                 
                </ul>
              </div>
              <div class="widget">
                <h5 class="widgetheading">Popular tags</h5>
                <ul class="tags">
                  <li><a href="#">Web design</a></li>
                  <li><a href="#">Trends</a></li>
                  <li><a href="#">Technology</a></li>
                  <li><a href="#">Internet</a></li>
                  <li><a href="#">Tutorial</a></li>
                  <li><a href="#">Development</a></li>
                </ul>
              </div>
            </aside>
          </div>
