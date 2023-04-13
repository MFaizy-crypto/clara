@extends('admin.layouts.master')
@section('section')
   <div id="content" class="main-content">
            <div class="container">
                <div class="container">
<div class="row layout-top-spacing">

<div id="tableSimple" class="col-lg-12 col-12 layout-spacing">
<div class="statbox widget box box-shadow">
<div class="widget-header">
    <div class="row">
        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
            <div class="m-3"> <span style="font-size:18px;">Add Project</span>
           </div>
        </div>
    </div>
</div>
<div class="widget-content widget-content-area">
    
   <div class="table-responsive">
    <form method="POST" action="{{ route('projects-store') }}" enctype="multipart/form-data" id="projects">
        @csrf
    <div class="row mb-4">
        <div class="col-sm-12">
            <input type="text" class="form-control" id="title" placeholder="Title *" name="title">
        </div>
    </div>
  
    <div class="row mb-4">
        <div class="col-sm-12">
                <div class="profile-image">

                    <!-- // The classic file input element we'll enhance
                    // to a file pond, we moved the configuration
                    // properties to JavaScript -->

                    <div class="img-uploader-content">
                        <input type="file" class="form-control"
                            name="image" accept="image/png, image/jpeg, image/gif"/>
                    </div>

                </div>
        </div>
        </div>
          <div class="row mb-4">
            <div class="col-sm-12">
                 <div id="tooltip" class="row layout-spacing">
                            <div class="col-lg-12">
                                <div class="statbox widget box box-shadow">
                                    
                                    <div class="widget-content widget-content-area">
                                        <div id="content-container">
                                            <div id="toolbar-container">
                                                <button class="ql-bold" data-toggle="tooltip" data-placement="bottom" title="Bold"></button>
                                                <button class="ql-underline" data-toggle="tooltip" data-placement="bottom" title="Underline"></button>
                                                <button class="ql-italic" data-toggle="tooltip" data-placement="bottom" title="Add italic text <cmd+i>"></button>
                                                <button class="ql-image" data-toggle="tooltip" data-placement="bottom" title="Upload image"></button>
                                                <button class="ql-code-block" data-toggle="tooltip" data-placement="bottom" title="Show code"></button>
                                            </div>
                                            <div id="quill-tooltip" name="description">
                                                
                                            </div>
                                        </div>
                            <input type="hidden" name="description_hidden" id="description_hidden">

                                    

                                    </div>
                                </div>
                            </div>
                        </div>
            </div>
        </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <a href="{{url('/admin/projects')}}" class="btn badge-danger pt-2">Cancel</a>
</form>
   
   {!! $validator->selector('#projects') !!}
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
    var quill = new Quill('#quill-tooltip', {
        modules: {
          toolbar: '#toolbar-container'
        },
        placeholder: 'Description',
        theme: 'snow'
      });
    var form = document.getElementById("projects"); // get form by ID
    form.onsubmit = function() { // onsubmit do this first
        var name = document.querySelector('input[name=description_hidden]'); // set name input var
        name.value = quill.root.innerHTML.trim(); // populate name input with quill data
        return true; // submit form
    }





    });
</script>
@endsection