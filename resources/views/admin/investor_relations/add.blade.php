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
            <div class="m-3"> <span style="font-size:18px;">Add Investor Relations</span>
           </div>
        </div>
    </div>
</div>
<div class="widget-content widget-content-area">
   <div class="table-responsive">
    <form method="POST" action="{{ route('investor-relations-store') }}" enctype="multipart/form-data" id="news_articles">
        @csrf

    <div class="row mb-4">
        <div class="col-sm-12">
            <select class="form-control" name="category" id="category">
                <option value="">-- Please Select Category --</option>
                    <?php foreach ($category as $key => $value) { ?>
                        <option value="{{$value->id}}">{{$value->name}}</option>
                    <?php }?>
            </select>
        </div>
    </div>
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
    
    <button type="submit" class="btn btn-primary">Submit</button>
    <a href="{{url('/admin/investor-relations')}}" class="btn badge-danger pt-2">Cancel</a>
</form>
   
   {!! $validator->selector('#news_articles') !!}
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
        placeholder: 'Description *',
        theme: 'snow'
      });
    var form = document.getElementById("news_articles"); // get form by ID
    // form.onsubmit = function() { // onsubmit do this first
    //     var name = document.querySelector('input[name=description_hidden]'); // set name input var
    //     name.value = quill.root.innerHTML.trim(); // populate name input with quill data
    //     return true; // submit form
    // }





    });
</script>
@endsection