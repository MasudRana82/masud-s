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
                            <label class="control-label" for="date01">title</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" name="name" value="{{$posts->title}}" required>
                            </div>
                        </div>
   <div class="control-group hidden-phone">
                            <label class="control-label" for="textarea2">Description</label>
                             <div class="controls">
                             <textarea class="cleditor" name="description" rows="3" value="{{$posts->description}} " required></textarea>
                              </div>
                             </div>

                         <div class="control-group">
                            <label class="control-label" for="date01">Select Category</label>
                            <div class="controls">
                                 <select name="category">
                                <option>select category</option>
                                @foreach ($categories as $category)
                                    <option value="{{$category->id}}" >{{$category->name}}</option> 
                                @endforeach
                               
                               </select>
                            </div>
                        </div>
                        

                        

                               

                        <div class="control-group">
                            <label class="control-label" for="date01">Select tag</label>
                            <div class="controls">
                                 <select name="color">
                                <option>select tag</option>
                                @foreach ($tags as $tag)
                                    <option value="{{$tag->id}}" >{{$tag->name}}</option> 
                                @endforeach
                               </select>
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