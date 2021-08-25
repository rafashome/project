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

<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">

         <div class="header text-center" style="padding:25px; margin-bottom: 20px;">

           <h2>Update Category</h2>
       </div>

       <form action="{{url('/update',$category->id)}}" method="POST" enctype = "multipart/form-data">
          {{-- {{method_field('PUT')}} --}}
          {{csrf_field()}}
{{-- 
          @if(session('response'))
          <div class=" alert alert-success" style="margin-bottom:10px;"> {{session('response')}} 
            <a href="{{URL::to('/student')}}"> You Can Login Now</a>
        </div>

        @endif --}}

        <div class="form-row">
         <div class="form-group col-md-4">
            <label >Title</label>
            <input type="text" name="title" value="{{$category->Title}}" class="form-control">
        </div>

        <div class="form-group col-md-4">
              <div class="form-check form-switch" style=" margin-top:2em;">
     <input class="form-check-input" value="1" type="checkbox" id="flexSwitchCheckChecked" name="status">
    <label class="form-check-label" for="flexSwitchCheckChecked">Check If Active</label>
    </div>
        </div>




      </div>




<div class="text-center">
  <button type="submit" name="update" class=" btn btn-primary " style="margin-top: 25px; padding: 7px 14px;">Update</button>
</div>

</form>
</div>
</div>
</div>
</div>


        </div>
        <!-- /#page-wrapper -->

        <div>
         
        </div>

    </div>
    <!-- /#wrapper -->

@include('footer');