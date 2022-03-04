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
               
                <h2><i class="halflings-icon edit"></i><span class="break"></span>Edit Product </h2>
                

            </div>

            <div class="box-content">
                <form class="form-horizontal" action="{{url('/post/update'.$posts->id)}}" method="post" enctype="multipart/form-data">
                     @csrf 
                   @method('PUT') 
                    {{-- always use 'PUT' in update operation --}}
                    <fieldset>


                       <div class="control-group">
                            <label class="control-label" for="date01"> title</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" name="title"  required value="{{$posts->title}}">
                            </div>
                        </div>
   <div class="control-group hidden-phone">
                            <label class="control-label" for="textarea2">Description</label>
                             <div class="controls">
                             <textarea class="ckeditor" name="description" rows="12" required value="{!! $posts->description !!}"></textarea>
                           
                              </div>
                             </div>

                         <div class="control-group">
                            <label class="control-label" for="date01">Select Category</label>
                            <div class="controls">
                                 <select name="category">
                                <option value="{{$posts->category->id}}">{{$posts->category->name}}</option>
                                @foreach ($categories as $category)
                                    <option value="{{$category->id}}" >{{$category->name}}</option> 
                                @endforeach
                               
                               </select>
                            </div>
                        </div>
                        

                        

                               

                         <div class="control-group">
               <label class="control-label" for="date01">Select tag</label>        
              <div class="controls">                   
                                       
            @foreach ($tags as $tag)
                <div class="custom-control custom-checkbox">
                    
                <input class="custom-control-input" name="tag[]" type="checkbox" id="{{$tag->id}}" value="{{$tag->id}}" 
                @foreach ($posts->tag as $tags)
                
                    @if ($tag->id == $tags->id) checked @endif  
                @endforeach
                >
                <label for="{{$tag->id}}" class="custom-control-label">{{$tag->name}} </label>


                </div>
             @endforeach
                                            
                   </div>

</div>


                      

                     

                        <div class="control-group">
                            <label class="control-label">Image</label>
                            <div class="controls">
                                <input type="file" name="file[]" multiple required>
                            </div>
                        </div>
                        
        
                       

                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary">Update post</button>
                        </div>
                    </fieldset>
                </form>

            </div>
        </div><!--/span-->
    </div><!--/row-->
    </div><!--/row-->
   
@endsection