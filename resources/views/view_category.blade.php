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
           
           <h2>Category List </h2>
         </div>

          @if(session('response'))
          <div class="text-center alert alert-danger"> {{session('response')}} 
            
        </div>

        @endif



          @if(session('update_response'))
          <div class="text-center alert alert-success"> {{session('update_response')}} 
            
        </div>

        @endif
        

         <table class="table">
          <thead class="thead-light">
            <tr>
              
              <th scope="col">Title</th>
              <th scope="col">Status</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($categories as $row)
            <tr>
              
              <td>{{$row->Title}}</td>
              <td>

                 @if($row->Status==1)
                Active
                @endif

               @if($row->Status==NULL)
              	Inactive
              	@endif

              	</td>

             

				<td>

				<a href="{{url('/edit',$row->id)}}"> <button type="button" class="btn btn-success">Edit</button> </a>
						
 <a data-href="{{'/category_delete/'.$row->id}}" data-toggle="modal" data-target="#delete" > <button  type="button" class="btn btn-danger ">Delete</button> </a>


              </td>
            </tr>

            @endforeach
            
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>




<!-- Modal -->



        </div>
        <!-- /#page-wrapper -->

        <div>
         
        </div>

    </div>
    <!-- /#wrapper -->

<!-- Modal -->

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