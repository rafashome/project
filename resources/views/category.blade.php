

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


<div style=" margin-top:2em;" class="col-md-6">
  <form action="{{url('insert_category')}}" method="POST" enctype = "multipart/form-data" >
    {{csrf_field()}}
          @if(session('response'))
          <div class="text-center" style="margin-bottom:10px; background:#222; color:#f7f7f7; padding: 10px 20px; display: inline-block; margin-left: 35%;"> {{session('response')}} 
            <a href="{{URL::to('/view_category')}}">View Category</a>
        </div>

        @endif
  <div class="form-group">
    <label for="exampleInputEmail1">Category Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="title" placeholder="Enter Category Name">
 
  </div>

<div class="form-check form-switch" style=" margin-top:2em;">
  <input class="form-check-input" value="1" type="checkbox" id="flexSwitchCheckChecked" name="status">
  <label class="form-check-label" for="flexSwitchCheckChecked">Check If Active</label>
</div>
  <button type="submit" name="submit" class="btn btn-primary" style=" margin-top:2em;">Submit</button>
</form>
</div>











        </div>
        <!-- /#page-wrapper -->

        <div>
         
        </div>

    </div>
    <!-- /#wrapper -->

@include('footer');