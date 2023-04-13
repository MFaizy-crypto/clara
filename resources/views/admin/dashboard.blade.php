@extends('admin.layouts.master')
@section('section')
<div id="content" class="main-content">

<div class="layout-px-spacing">

                <div class="middle-content container-xxl p-0">

                    <div class="row layout-top-spacing">
 							<div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                            <div class="widget widget-six">
                                <div class="widget-heading">
                                    <h6 class="">News Articles</h6>
                                    <div class="task-action">
                                       
                                    </div>
                                </div>
                                <div class="w-chart">
                                   Total News Articles : {{$newsCount}}
                                </div>
                            </div>
                            
                        </div>
                        <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                            <div class="widget widget-six">
                                <div class="widget-heading">
                                    <h6 class="">Investor Relations</h6>
                                    <div class="task-action">
                                       
                                    </div>
                                </div>
                                <div class="w-chart">
                                   Total Investor Relations : {{$investorCounts}}
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection