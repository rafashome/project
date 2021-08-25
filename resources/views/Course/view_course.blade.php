


@include('header');


@include('sidebar');

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">View Course</h1>
                </div>
                <!-- /.col-lg-12 -->
                                <!-- /.col-lg-12 -->
            </div>

   <table id="myTable" class="table-responsive">
              @if(session('response'))
          <div class="text-center alert alert-danger"> {{session('response')}} 
            
        </div>

        @endif


                  @if(session('update_response'))
          <div class="text-center alert alert-success"> {{session('update_response')}} 
            
        </div>

        @endif
        
           <thead class="text-left">
           <tr class="text-left">
             <th>course_name</th>
           <th>course_code</th>
            
            <th>course_status</th>
            <th>cat_id</th>
            <th>course_desc</th>
            <th>file_one</th>
            <th>file_two</th>
            <th>Action</th>
           </tr>
           
           </thead>
           <tbody class="text-center">
             @foreach($courses as $row)
             <tr>
             <td>{{$row->course_name}}</td>
             <td>{{$row->course_code}}</td>
            
             <td>{{$row->course_status}}</td>
             <td>{{$row->cat_id}}</td>
              <td>{{$row->course_description}}</td>
             <td>{{$row->file_one}}</td>
             <td>{{$row->file_two}}</td>
             <td>

   <a href="{{url('/edit',$row->id)}}"> <button  type="button" class="btn btn-success ">Edit</button> </a>            
   <a data-href="{{url('/course_delete/'.$row->id)}}" data-toggle="modal" data-target="#delete"> <button  type="button" class="btn btn-danger ">Delete</button> </a>

             </td>
      
           
           </tr>
           @endforeach

           </tbody>
           </table>

        </div>
        <!-- /#page-wrapper -->

        <div>
         
        </div>

    </div>
    <!-- /#wrapper -->



    <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="myModalLabel" style="text-align: center;">Delete Confirmation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p class="text-center">Are You Sure You Want To Delete?</p>
        <input type="hidden" name="delete_id" id="del_id" value="" >
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <a class="btn btn-danger btn-ok">Delete</a>
      </div>
    </div>
  </div>
</div>

@include('footer');