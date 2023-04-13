@extends('admin.layouts.master')
@section('section')
<style>
    .custom_pagination {
        text-align: center;
    }
    .custom_pagination svg {
        max-width: 20px;
    }
    .custom_pagination nav .flex.justify-between.flex-1.sm\:hidden {
        display: none;
    }
    .custom_pagination span.relative.z-0.inline-flex.shadow-sm.rounded-md {
        min-width: 210px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-wrap: wrap;
        box-shadow: none !important;
    }
    .custom_pagination span.relative.z-0.inline-flex.shadow-sm.rounded-md span, .custom_pagination span.relative.z-0.inline-flex.shadow-sm.rounded-md a {
        width: 50px;
        height: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 18px;
        border-color: #d5d6d6 !important;
    }
</style>
   <div id="content" class="main-content">
            <div class="container">
                <div class="container">
<div class="row layout-top-spacing">

<div id="tableSimple" class="col-lg-12 col-12 layout-spacing">
<div class="statbox widget box box-shadow">
<div class="widget-header">
    <div class="row">
        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
            <div class="m-3"> <span style="font-size:18px;"> Investor Relations List </span>
            <span style="float:right"><a href="{{url('/admin/investor-relations/add')}}" class="btn btn__primary">Add Investor Relations</a></span></div>
        </div>
    </div>
</div>
<div class="widget-content widget-content-area">
    <form action="">
     <div class="row pb-3">
            <div class="col-sm-4">
                    <label>Search By Title</label>
                    <input type="text" name="title_search" id="title_search" class="form-control" value="{{($request->title_search)? $request->title_search : ''}}">
            </div>
             <div class="col-sm-4">
                    <label>Search By Category</label>
                    <select name="cateory_search" class="form-control">
                    <option value=""> -- Please select -- </option>
                   <?php foreach ($category as $key => $value) { ?>
                        <option value="{{$value->id}}" {{($request->cateory_search == $value->id)?"selected":""}}>{{$value->name}}</option>
                   <?php } ?>
                   </select>
            </div>
             
     </div>
     <div class="row pb-3">
         <div class="col-sm-4">
               
                <input type="submit" name="search" value="Submit" class="btn badge-primary pt-2">
                <a href="{{url('/admin/investor-relations')}}" class="btn badge-danger pt-2">Reset</a>
             </div>

     </div>
 </form>
   <div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">@sortablelink('category.name','Category') </th>
                <th scope="col" style="width:20%;">@sortablelink('title','Title')</th>
                
                <th class="" scope="col">Image</th>
                <th class="text-center" scope="col"></th>
            </tr>
            <tr aria-hidden="true" class="mt-3 d-block table-row-hidden"></tr>
        </thead>
        <tbody>
        	<?php foreach ($list as $key => $value) { ?>
        		
        	
            <tr>
               <td>{{$value->category->name}}</td>
                <td>
                    <p class="mb-0">{{ \Illuminate\Support\Str::limit($value->title, 50, $end='...') }}</p>
                   <!--  <span class="text-success">Management</span> -->
                </td>
                
                 <td>
                    <div class="media">
                        <div class="avatar me-2">
                            <img alt="avatar" src="{{url('/img/investor-relations').'/'.$value->image}}" class="rounded-circle" />
                        </div>
                    </div>
                </td>
               <!--  <td class="text-center">
                    <span class="badge badge-light-success">Online</span>
                </td> -->
                <td class="text-center">
                    <div class="action-btns">
                      <!--   <a href="javascript:void(0);" class="action-btn btn-view bs-tooltip me-2" data-toggle="tooltip" data-placement="top" title="View">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                        </a> -->
                        <a href="{{url('/admin/investor-relations/edit').'/'.$value->id}}" class="action-btn btn-edit bs-tooltip me-2" data-toggle="tooltip" data-placement="top" title="Edit">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                        </a>
                        <a href="javascript:void(0);" class="action-btn btn-delete bs-tooltip delete" data-toggle="tooltip" data-placement="top" title="Delete" meta-id= "{{$value->id}}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                        </a>
                    </div>
                </td>
            </tr>

           <?php }?>
            
        </tbody>
    </table>
   <!--  <nav aria-label="Page navigation example">
      <ul class="pagination">
        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">Next</a></li>
      </ul>
    </nav> -->
    <div class="custom_pagination">
        {!! $list->appends(\Request::except('page'))->render() !!}
    </div>
</div>

</div>
</div>
</div>
</div>
</div>
</div>
</div>
@endsection
@section('javascript')
<script type="text/javascript">
    $( document ).ready(function() {
    
$(".delete").on('click', function(event){
	var id = $(this).attr('meta-id');
	
    Swal.fire({
      title: 'Are you sure?',
      text: "You won't be able to revert this!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
      if (result.isConfirmed) {
        $.ajax({
	        type: 'post',
	        url: getsiteurl()+"/admin/investor-relations/delete",
	        data: {id:id,
	            '_token': '{{ csrf_token() }}',
	        },
	        dataType: 'JSON',
	        success: function (response) {
	            if (response.status) {
	            swal({
	            icon : 'warning',
	            title: 'Deleted!',
	            text: 'This record Deleted successfully!!!',
	            type: 'warning',
	            }).then(function(){
	                window.location.reload();
	            });
	            }
	        } 
	    });
	   setTimeout(function(){ location.reload(); }, 1000);
      }
    })

});

    
    });
</script>
@endsection