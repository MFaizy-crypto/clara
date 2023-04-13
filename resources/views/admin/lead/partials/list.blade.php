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
                <th scope="col" style="width:20%;">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Telefon</th>
                <th scope="col">Addresse</th>
                <th scope="col">Action</th>
            </tr>
            <tr aria-hidden="true" class="mt-3 d-block table-row-hidden"></tr>
        </thead>
        <tbody>
            @if($result['result']->count()) 
                @foreach ($result['result'] as $key => $lead)
                <tr>
                    <td>
                        <p class="mb-0">
                            {{ \Illuminate\Support\Str::limit($lead->name, 50, $end = '...') }}
                        </p>
                    </td>
                    <td>
                        <p class="mb-0">
                            {{ \Illuminate\Support\Str::limit($lead->email, 50, $end = '...') }}
                        </p>
                    </td>
                    <td>
                        <p class="mb-0">
                            {{ \Illuminate\Support\Str::limit($lead->phone, 50, $end = '...') }}
                        </p>
                    </td>
                    <td>
                        <p class="mb-0">
                            {{ \Illuminate\Support\Str::limit($lead->address, 50, $end = '...') }}
                        </p>
                    </td>
                    
                    <td class="text-center">
                        <div class="action-btns">
                            <a href="{{ route('admin.lead.edit', $lead->id) }}"
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
                                class="action-btn btn-delete bs-tooltip delete" onclick="delete_lead(this);"
                                data-toggle="tooltip" data-placement="top" title="Delete"
                                meta-id="{{ $lead->id }}" data-url=" {{ 
                                        route('admin.lead.delete', $lead->id) }}">
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