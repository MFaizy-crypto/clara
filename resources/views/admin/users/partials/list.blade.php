@php
  $page = Request::get('page');
  $currentPage = Request::get('page');
  $sn = 0;
  if($page > 1){
    $sn = $perPage * ($currentPage - 1);
  }
@endphp
<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th scope="col" style="width:20%;">User Name</th>
                <th scope="col">Passport</th>
                <th scope="col">Passport Status</th>
                <th scope="col">Vcertificate</th>
                <th scope="col">Vcertificate Status</th>
                <th scope="col">Action</th>
            </tr>
            <tr aria-hidden="true" class="mt-3 d-block table-row-hidden"></tr>
        </thead>
        <tbody>
            @if($result['result']->count()) 
                @foreach ($result['result'] as $key => $user)
                <tr>
                    <td>
                        <p class="mb-0">
                            {{ \Illuminate\Support\Str::limit($user->name, 50, $end = '...') }}
                        </p>
                    </td>
                    <td>
                        <div class="media">
                            <div class="avatar me-2">
                                <img alt="avatar" src="{{ asset('images/vcertificate') . '/' . $user->vcertificate }}"/>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="media">
                            <div class="avatar me-2">
                                <a href="{{ asset('images/vcertificate/'.$user->vcertificate) }}" download><span class="font-weight-bold float-right @if(isset($user->is_veried_vcertificate) && $user->is_veried_vcertificate == 1) text-success @elseif( isset($user->is_veried_vcertificate) && $user->is_veried_vcertificate == 2)) text-danger @else text-warning @endif">@if(isset($user->is_veried_vcertificate) && $user->is_veried_vcertificate == 1) Approved @elseif(isset($user->is_veried_vcertificate) && $user->is_veried_vcertificate == 2) Rejected @else Pending @endif</span></a>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="media">
                            <div class="avatar me-2">
                                <img alt="avatar"
                                    src="{{ asset('images/userpassport') . '/' . $user->passport }}"
                                    />
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="media">
                            <div class="avatar me-2">
                                <a href="{{ asset('images/userpassport/'.$user->passport) }}" download><span class="font-weight-bold float-right @if(isset($user->is_veried_passport) && $user->is_veried_passport == 1) text-success @elseif( isset($user->is_veried_passport) && $user->is_veried_passport == 2)) text-danger @else text-warning @endif">@if(isset($user->is_veried_passport) && $user->is_veried_passport == 1) Approved @elseif(isset($user->is_veried_passport) && $user->is_veried_passport == 2) Rejected @else Pending @endif</span></a>
                            </div>
                        </div>
                    </td>
                    
                    <td class="text-center">
                        <div class="action-btns">
                            <a href="{{ route('admin.user.edit', $user->id) }}"
                                class="action-btn btn-edit bs-tooltip me-2"
                                data-toggle="tooltip" data-placement="top" title="Edit">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-edit-2">
                                    <path
                                        d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z">
                                    </path>
                                </svg>
                            </a>
                            <a href="javascript:void(0);"
                                class="action-btn btn-delete bs-tooltip delete" onclick="delete_user(this);"
                                data-toggle="tooltip" data-placement="top" title="Delete"
                                meta-id="{{ $user->id }}" data-url=" {{ 
                                        route('admin.user.delete', $user->id) }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-trash-2">
                                    <polyline points="3 6 5 6 21 6"></polyline>
                                    <path
                                        d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                    </path>
                                    <line x1="10" y1="11" x2="10"
                                        y2="17"></line>
                                    <line x1="14" y1="11" x2="14"
                                        y2="17"></line>
                                </svg>
                            </a>
                        </div>
                    </td>
                </tr>
                @endforeach
            @endif
        </tbody>
    </table>
    <div class="custom_pagination links" pagination-container="usr-data">
        <div class="row mr-1 mt-3 float-right links" pagination-container="usr-data">{!! $result['paginate']->appends($requestData)->links() !!}
    </div>
</div>