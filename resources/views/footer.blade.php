<div class="container">
        <div class="row">
          <div class="span3">
            <div class="widget">
              <h5 class="widgetheading">Browse pages</h5>
              <ul class="link-list">
                
               
                @foreach ($categories as $category)
               <li><a href="{{url('/category/'.$category->id)}}">{{$category->name}}</a></li>
                @endforeach
                
              </ul>
            </div>
          </div>
        
          <div class="span3">
            
          </div>
          <div class="span3">
            <div class="widget">
              <h5 class="widgetheading">Get in touch with me</h5>
              <address>
								<strong>Dhaka,Bangladesh
					 		</address>
              <p>
                <i class="icon-phone"></i> +8801798249882<br>
                <i class="icon-envelope-alt"></i>masud.rana3836@gmail.com
              </p>
            </div>
          </div>
        </div>
      </div>
      <div id="sub-footer">
        <div class="container">
          <div class="row">
            <div class="span6">
              <div class="copyright">
                <p>
                  <span>&copy; Masud's blog - All right reserved.</span>
                </p>
              
              </div>
            </div>
            <div class="span6">
              <ul class="social-network">
                <li><a href="#" data-placement="bottom" title="Facebook"><i class="icon-facebook icon-square"></i></a></li>
                <li><a href="#" data-placement="bottom" title="Twitter"><i class="icon-twitter icon-square"></i></a></li>
                <li><a href="#" data-placement="bottom" title="Linkedin"><i class="icon-linkedin icon-square"></i></a></li>
               
              </ul>
            </div>
          </div>
        </div>
      </div>