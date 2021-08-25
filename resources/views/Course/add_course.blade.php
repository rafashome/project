

@include('header');

@include('sidebar');

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Add Course</h1>
                </div>
                <!-- /.col-lg-12 -->
                                <!-- /.col-lg-12 -->
            </div>





<form action="{{url('insert_course')}}" method="POST" enctype = "multipart/form-data">

    {{csrf_field()}}
          @if(session('response'))
          <div class="text-center" style="margin-bottom:10px; background:#222; color:#f7f7f7; padding: 10px 20px; display: inline-block; margin-left: 35%;"> {{session('response')}} 
            <a href="{{URL::to('/view_course')}}">View Course</a>
        </div>
@endif

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">course_name</label>
     <input type="text" class="form-control" placeholder="First name" name="course_name">
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">course_code</label>
     <input type="text" class="form-control" placeholder="First name" name="course_code">
    </div>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">course_description</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="course_description"></textarea>
  </div>

  <div class="form-row">

    <div class="form-group col-md-4">
      <label for="inputState">Course_Status</label>
      <select id="inputState" class="form-control" name="course_status">
        <option selected>Choose...</option>
        <option value="Active">Active</option>
        <option value="Inctive">Inactive</option>
      </select>
    </div>



  <div class="form-group col-md-4">
     <label class="custom-file-label" for="validatedCustomFile">Choose file One</label>
    <div class="custom-file">
    <input type="file" class="custom-file-input" id="validatedCustomFile" name="file_one"> 
    </div>
    </div>

      <div class="form-group col-md-4">
     <label class="custom-file-label" for="validatedCustomFile">Choose file Two</label>
    <div class="custom-file">
    <input type="file" class="custom-file-input" id="validatedCustomFile" name="file_two"> 
    </div>
    </div>


  </div>


 
<div class="form-row" >
  <div class="form-group ">
    <label>Select Category (Active Category Only)</label>
          <select id="inputState" class="form-control" name="cat_id">
        <option selected>Choose...</option>
        @foreach($categories as $row)
        @if($row->Status==1)
        <option value="{{$row->id}}">

            
                {{$row->Title}}
                @endif
          </option>
        @endforeach
      </select>
  </div>

</div>
  

      
      

   
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
   
  
</form>











        </div>
        <!-- /#page-wrapper -->

        <div>
         
        </div>

    </div>
    <!-- /#wrapper -->

@include('footer');