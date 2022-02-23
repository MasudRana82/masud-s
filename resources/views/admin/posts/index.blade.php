@extends('admin.admin_master')
@section('admin_content')
  
<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>

                     <p class="alert-success">	
                <?php
                            $msg=Session::get('messege');
                            if($msg){
                                echo "$msg";
                                 Session::put('messege',null);
                            }
                ?>

                    </p>

						<h2><i class="halflings-icon user"></i><span class="break"></span>Post List</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  {{-- <th style="width: 5%" >id</th> --}}
								  
								  <th style="width: 10%" >Title</th>
								  <th style="width: 25%" >Description</th>
								  
								
								  <th style="width: 5%" >Category</th>
								  <th style="width: 20%" >Tag</th> 
								   <th style="width: 15%" >Image</th>
								 
								  <th style="width: 5%">Status</th>								  
								  <th style="width: 20%">action</th>
							  </tr>
						  </thead> 
                            @foreach ($posts as $post)
								 @php
									$post['image'] = explode("|",$post->image); 
								 @endphp
						  <tbody>
                         
                                  
                              
							 <tr>
							
								{{-- <td class="center">{{$post->id}}</td> --}}
								
								<td>{{$post->title}}</td>
								
								<td >{!!$post->description!!}</td>
								<td >{{$post->category->name}}</td>
								<td>
								@foreach ($post->tag as $tags)
									<span> {{$tags->name}}</span>
								@endforeach
									</td>
								
								
								<td>
									@foreach ($post->image as $images)
									<img src="{{asset('/image/'.$images)}}" style="height:50px; width:50px;">	
									@endforeach
								</td>
								
								
							
                             
                                <td class="center">
									@if ($post->status==1)
										<span class="label label-success">active</span>
									@else
										<span class="label label-danger">deactive</span>
									@endif
									
								</td>
								<td class="row">
								<div class="span3"></div>
								<div class="span2">
									
									@if($post->status==1)
										<a class="btn btn-success" href="{{url('/post-status'.$post->id)}}">
										<i class="halflings-icon white thumbs-down"></i>  
									</a>
									
									@else
									 <a class="btn btn-danger" href="{{url('/post-status'.$post->id)}}">
										<i class="halflings-icon white thumbs-up"></i>  
									</a>
									@endif

								</div>
								<div class="span2">
									<a class="btn btn-info" href="{{url('/post/edit'.$post->id)}}">
										<i class="halflings-icon white edit"></i>  
									</a>
								</div>
								<div class="span2">
									<form method="post" action="{{url('/post/delete'.$post->id)}}">
									@csrf
									@method('PUT') 
								<button class="btn btn-danger" type="submit"><i class="halflings-icon white trash"></i></button>
									</form>
								</div>
									<div class="span3"></div>
								</td>
							</tr>
				
							
						  </tbody>
                          	@endforeach
					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->
    
@endsection