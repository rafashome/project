@include('header');

@include('sidebar');

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Category</h1>
                </div>
                <!-- /.col-lg-12 -->
                                <!-- /.col-lg-12 -->
            </div>

<form action="{{url('/update',$course->id)}}" method="POST" enctype = "multipart/form-data">

    {{csrf_field()}}
          @if(session('response'))
          <div class="text-center" style="margin-bottom:10px; background:#222; color:#f7f7f7; padding: 10px 20px; display: inline-block; margin-left: 35%;"> {{session('response')}} 
            <a href="{{URL::to('/view_course')}}">View Course</a>
        </div>
@endif

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">course_name</label>
     <input type="text" class="form-control" placeholder="First name" name="course_name" value="{{$course->course_name}}">
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">course_code</label>
     <input type="text" class="form-control" placeholder="First name" name="course_code" value="{{$course->course_code}}">
    </div>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">course_description</label>
    <input class="form-control" id="exampleFormControlTextarea1" rows="3" name="course_description" value="{{$course->course_description}}" >
  </div>

  <div class="form-row">

    <div class="form-group col-md-4">
      <label for="inputState">Course_Status</label>
      <select id="inputState" class="form-control" name="course_status">
        <option selected>{{$course->course_status}}</option>
        <option value="Active">Active</option>
        <option value="Inactive">Inactive</option>
      </select>
    </div>

  <div class="form-group col-md-4">
     <label class="custom-file-label" for="validatedCustomFile">Choose file One</label>
    <div class="custom-file">
  
   	
   	<input type="file" class="custom-file-input" id="validatedCustomFile" name="file_one"  > 
   	<input type="hidden" name="file_one" value="{{$course->file_one}}">
  
    </div>
    </div>

      <div class="form-group col-md-4">
     <label class="custom-file-label" for="validatedCustomFile">Choose file Two</label>
    <div class="custom-file">
    <input type="file" class="custom-file-input" id="validatedCustomFile" name="file_two"> 
    <input type="hidden" name="file_two" value="{{$course->file_two}}">
    </div>
    </div>

  </div>

<div class="col-md-12">
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</div>

  
</form>


        </div>
        <!-- /#page-wrapper -->

        <div>
         
        </div>

    </div>
    <!-- /#wrapper -->

@include('footer');