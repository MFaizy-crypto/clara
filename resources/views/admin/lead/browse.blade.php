@extends('admin.layouts.master')
@section('section')
    <style>

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
                                        <div class="m-3"> <span style="font-size:18px;"> Lead Liste </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                <form action="{!! route('admin.lead.list') !!}" class="prfrm">
                                    <div class="row pb-3">
                                        <div class="col-sm-4">
                                            <label>Nach Name, Email oder Adresse suchen</label>
                                            <input type="text" name="search_text" id="search_text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row pb-3">
                                        <div class="col-sm-4">

                                            <input type="submit" name="search" value="Submit"
                                                class="btn badge-primary pt-2">
                                            <button class="btn badge-danger pt-2 btn-clear">Reset</button>
                                        </div>

                                    </div>
                                    <div class="usr-data" data-class="usr-data" data-id=""
                                        data-url="{!! route('admin.lead.list') !!}"></div>
                                </form>
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
        $(document).ready(function() {
            get_list('.usr-data', 1);
        });

        function get_list(type, page) {
            $.ajax({
                type: 'GET',
                url: $(type).data('url'),
                data: {
                    search_text: $('#search_text').length > 0 ? $('#search_text').val() : '',
                    page: page,
                    id: $(type).data('id'),
                },
                cache: false,
                beforeSend: function() {},
                success: function(data) {
                    $(type).html(data)
                },
                error: function(data) {},
                complete: function() {},
            })
        }

        $(document).ready(function() {
            $(document).on('click', '.pagination a', function(event) {
                event.preventDefault()
                var type = $(this).closest('div').attr('pagination-container')
                var url = $(this).attr('href')
                getPaginate('.' + type, url)
            })
        })

        function getPaginate(type, url) {
            $.ajax({
                url: url,
                type: 'get',
                datatype: 'json',
                success: function(data) {
                    if (type == '.order-list') {
                        $(type).html(data.data.dataHtml)
                    } else {
                        $(type).html(data)
                    }
                },
                fail: function(jqXHR, ajaxOptions, thrownError) {
                    console.log('No response from server')
                },
            })
        }

        function delete_lead(t) {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if(result.isConfirmed){
                    var page = $('.pagination .page-item.active .page-link').html();
                    $.ajax({
                        type: 'POST',
                        url: $(t).data('url'),
                        data: {
                            '_id': $(t).data('id'),
                            'type': $(t).data('type'),
                            '_token': "{{ csrf_token() }}"
                        },
                        cache: false,
                        beforeSend: function() {},
                        success: function(data) {
                            get_list('.usr-data', page);
                            Swal.fire({
                                icon: 'success',
                                title: data.message,
                                showConfirmButton: false,
                                timer: 1500
                            });
                        },
                        error: function(data) {
                            Swal.fire({
                                icon: 'error',
                                title: data.message,
                                showConfirmButton: false,
                                timer: 1500
                            });
                        },
                        complete: function() {}
                    });
                }
            });
        }
        $('.prfrm').submit(function(e) {
            e.preventDefault();
            let page = 1;
            var formData = new FormData(this);
            $.ajax({
                type: 'GET',
                url: $(this).attr('action'),
                data: $('.prfrm').serialize(),
                cache: false,
                contentType: false,
                processData: false,
                dataType: 'html',
                success: function(data) {
                    $('.usr-data').html(data);
                },
            });
        });
        $(".btn-clear").on("click", function() {
            $(".prfrm").trigger("reset");
            get_list('.usr-data', 1);
        });
    </script>
@endsection
