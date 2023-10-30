<div class="col-lg-12">
    <div class="card card-block card-stretch">
        <div class="card-body custom-notes-space">
            <h3 class="">Your Notes</h3>
            <div class="iq-tab-content">
                <div class="d-flex flex-wrap align-items-top justify-content-between">
                    <ul class="d-flex nav nav-pills text-center note-tab mb-3" id="note-pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link home active show" data-toggle="pill" data-init="note" href="#note1" role="tab" aria-selected="false">All</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link home" data-toggle="pill" data-init="shared-note" href="#note2" role="tab" aria-selected="true">Shared Notes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link home" data-toggle="pill" data-init="pin-note" href="#note3" role="tab" aria-selected="false">Pin Notes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link home" data-toggle="pill" data-init="fav-note" href="#note4" role="tab" aria-selected="false">Favourite Notes</a>
                        </li>
                    </ul>
                    <div class="media align-items-top iq-grid">
                        <div class="view-btn rounded body-bg btn-dropdown filter-btn mr-3">
                            <div class="dropdown">
                                <span class="dropdown-toggle cursor-pointer" id="dropdownMenuButton003" data-toggle="dropdown">
                                    <i class="las la-filter font-size-20"></i>
                                </span>
                                <div class="dropdown-menu dropdown-menu-right border-none" aria-labelledby="dropdownMenuButton003">
                                    <div class="dropdown-item mb-3">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h6 class="mr-4"><i class="las la-book mr-3"></i>Located In</h6>
                                            <div class="form-group mb-0">
                                                <select name="type" class="basic-select form-control dropdown-toggle" data-style="py-0">
                                                    <option value="1">Project Plans</option>
                                                    <option value="2">Routine Notes</option>
                                                    <option value="3">Planning</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dropdown-item mb-3">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h6 class="mr-4"><i class="las la-paste mr-3"></i>Contains</h6>
                                            <div class="form-group mb-0">
                                                <select name="type" class="basic-select form-control dropdown-toggle" data-style="py-0">
                                                    <option value="1">Address</option>
                                                    <option value="2">Archive Files</option>
                                                    <option value="3">Code Blocks</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dropdown-item mb-2">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h6 class="mr-4"><i class="las la-calendar mr-3"></i>Created</h6>
                                            <div class="form-group mb-0">
                                                <select id="date-select" name="type" class="basic-select form-control dropdown-toggle" data-style="py-0">
                                                    <option value="today">Today</option>
                                                    <option value="yest">Yesterday</option>
                                                    <option value="last-week">Last Week</option>
                                                    <option value="last-month">Last Month</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="list-grid-toggle cursor-pointer">
                            <span class="icon active i-grid rounded"><i class="ri-layout-grid-line font-size-20"></i></span>
                            <span class="icon active i-list rounded"><i class="ri-list-check font-size-20"></i></span>
                            <span class="label label-list">List</span>
                        </div>
                    </div>
                </div>
                <div class="note-content tab-content">
                    <div id="note1" class="tab-pane fade active show">
                        <div class="icon active animate__animated animate__fadeIn i-grid">
                            <div class="row">
                                @foreach ($notes as $note)

                                <div class="col-lg-4 col-md-6">
                                    <div class="card card-block card-stretch card-height card-bottom-border-info note-detail">
                                        <div class="card-header d-flex justify-content-between pb-1">
                                            <div class="icon iq-icon-box-2 icon-border-info rounded">
                                                <svg width="23" height="23" class="svg-icon" id="iq-main-09" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd" d="M5 3a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2V5a2 2 0 00-2-2H5zm0 2h10v7h-2l-1 2H8l-1-2H5V5z" clip-rule="evenodd" />
                                                </svg>
                                            </div>

                                            <div class="card-header-toolbar d-flex align-items-center">
                                                <a href="#" data-toggle="tooltip" data-placement="top" title="" class="show-tab" data-show-tab="[href='#note4']" data-original-title="favorite"><i class="lar la-heart mr-2"></i></a>
                                                <div class="card-header-toolbar d-flex align-items-center">
                                                    <div class="dropdown">
                                                        <span class="dropdown-toggle dropdown-bg" id="dropdownMenuButton12"
                                                            data-toggle="dropdown" aria-expanded="false" role="button">
                                                            <i class="ri-more-fill"></i>
                                                        </span>
                                                        <div class="dropdown-menu dropdown-menu-right"
                                                            aria-labelledby="dropdownMenuButton12" style="">
                                                            <a href="#new-note{{$note->id}}" class="dropdown-item new-note9" data-toggle="modal"  data-target="#new-note{{$note->id}}"><i class="las la-eye mr-3"></i>View</a>
                                                            <a href="#edit-note{{$note->id}}" class="dropdown-item edit-note1" data-toggle="modal" data-target="#edit-note{{$note->id}}"><i class="las la-pen mr-3"></i>Edit</a>
                                                            <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".card" href="#"><i class="las la-trash-alt mr-3"></i>Delete</a>


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body rounded">
                                            <h4 class="card-title">{{$note->title}}</h4>
                                            <p class="mb-3 card-description short">{{$note->description}}</p>
                                        </div>
                                        <div class="card-footer">
                                            <div class="d-flex align-items-center justify-content-between note-text note-text-info">
                                                <a href="#" class=""><i class="las la-user mr-2 font-size-20"></i>{{$note->user->name}}</a>
                                                <a href="#" class=""><i class="las la-calendar mr-2 font-size-20"></i>{{$note->created_at->format('d M Y')}}</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- model show  --}}



                                @endforeach
                            </div>
                        </div>

                        <div class="icon active animate__animated animate__fadeIn i-list">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="table-responsive">
                                        <table class="table  tbl-server-info">
                                            <thead>
                                                <tr class="ligth">
                                                    <th class="w-50" scope="col">Title</th>
                                                    <th scope="col">Permission</th>
                                                    <th scope="col">Created At</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($notes as $note)
                                                <tr>
                                                    <td>
                                                        <h4 class="mb-2">{{$note->title}}</h4>
                                                        <span>{{$note->description}}</span>
                                                    </td>
                                                    <td>
                                                        <i class="las la-user-friends mr-2 font-size-20"></i>
                                                        {{$note->user->name}}
                                                    </td>
                                                    <td>{{$note->created_at->format('d M Y')}}</td>
                                                    <td>
                                                        <div>
                                                            <a href="#"  class="badge badge-success mr-3" data-toggle="modal" data-target="#edit-note1"><i class="las la-pen mr-0"></i></a>
                                                            <a href="#" class="badge badge-danger" data-extra-toggle="delete" data-closest-elem="tr"><i class="las la-trash-alt mr-0"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                @endforeach

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div id="note2" class="tab-pane fade">
                        <div class="icon active animate__animated animate__fadeIn i-grid">
                            <div class="row">
                                {{-- ssssssssssssssssssssssssssssssssss --}}
                                @foreach ($notes as $note)
                                @if ($note->user_id == $myUser[0]->id)

                                <div class="col-lg-4 col-md-6">
                                    <div class="card card-block card-stretch card-height card-bottom-border-success note-detail">
                                        <div class="card-header d-flex justify-content-between pb-1">
                                            <div class="icon iq-icon-box-2 icon-border-success rounded">
                                                <svg width="23" height="23" class="svg-icon" id="iq-main-11" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                                                </svg>
                                            </div>
                                            <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                    <span class="dropdown-toggle dropdown-bg" id="note-dropdownMenuButton14"
                                                        data-toggle="dropdown" aria-expanded="false" role="button">
                                                        <i class="ri-more-fill"></i>
                                                    </span>
                                                    <div class="dropdown-menu dropdown-menu-right"
                                                        aria-labelledby="note-dropdownMenuButton14" style="">
                                                        <a href="#new-note{{$note->id}}" class="dropdown-item new-note6" data-toggle="modal" data-target="#new-note{{$note->id}}"><i class="las la-eye mr-3"></i>View</a>
                                                        <a href="edit-note{{$note->id}}" class="dropdown-item edit-note1" data-toggle="modal" data-target="#edit-note{{$note->id}}"><i class="las la-pen mr-3"></i>Edit</a>
                                                        <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".card" href="#"><i class="las la-trash-alt mr-3"></i>Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body rounded">
                                            <h4 class="card-title">{{$note->title}}</h4>
                                            <p class="mb-3 card-description short">{{$note->description}}</p>
                                        </div>
                                        <div class="card-footer">
                                            <div class="d-flex align-items-center justify-content-between note-text note-text-success">
                                                <a href="#" class=""><i class="las la-user-friends mr-2 font-size-20"></i>{{$note->user->name}}</a>
                                                <a href="#" class=""><i class="las la-calendar mr-2 font-size-20"></i>{{$note->created_at->format('d M Y')}}</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                @endforeach

                            </div>
                        </div>
                        <div class="icon active animate__animated animate__fadeIn i-list">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="table-responsive">
                                        <table class="table  tbl-server-info">
                                            <thead>
                                                <tr class="ligth">
                                                    <th class="w-50" scope="col">Title</th>
                                                    <th scope="col">Permission</th>
                                                    <th scope="col">Created At</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($notes as $note)
                                                @if ($note->user_id == $myUser[0]->id)
                                                <tr>
                                                    <td>
                                                        <h4 class="mb-2">{{$note->title}}</h4>
                                                        <span>{{$note->description}}</span>
                                                    </td>
                                                    <td>
                                                        <i class="las la-user-friends mr-2 font-size-20"></i>
                                                        {{$note->user->name}}
                                                    </td>
                                                    <td>{{$note->created_at->format('d M Y')}}</td>
                                                    <td>
                                                        <div>
                                                            <a href="#" class="badge badge-success mr-3" data-toggle="modal" data-target="#edit-note1"><i class="las la-pen mr-0"></i></a>
                                                            <a href="#" class="badge badge-danger" data-extra-toggle="delete" data-closest-elem="tr"><i class="las la-trash-alt mr-0"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                @endif
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="note3" class="tab-pane fade">
                        <div class="icon active animate__animated animate__fadeIn i-grid">
                            <div class="row">
                                @foreach ($notes as $note)
                                @if ($note->user->id == $pins[0]->user_id && $note->id == $pins[0]->note_id)
                                <div class="col-lg-4 col-md-6">
                                    <div class="card card-block card-stretch card-height card-bottom-border-primary note-detail">
                                        <div class="card-header d-flex justify-content-between pb-1">
                                            <div class="icon iq-icon-box-2 icon-border-primary rounded">
                                                <svg width="23" height="23" class="svg-icon" id="iq-main-17" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                                </svg>
                                            </div>
                                            <div class="card-header-toolbar d-flex align-items-center">
                                                <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="pin content"><i class="las la-thumbtack mr-2"></i></a>
                                                <div class="card-header-toolbar d-flex align-items-center">
                                                    <div class="dropdown">
                                                        <span class="dropdown-toggle dropdown-bg" id="note-dropdownMenuButton20"
                                                            data-toggle="dropdown" aria-expanded="false" role="button">
                                                            <i class="ri-more-fill"></i>
                                                        </span>
                                                        <div class="dropdown-menu dropdown-menu-right"
                                                            aria-labelledby="note-dropdownMenuButton20" style="">
                                                            <a href="#" class="dropdown-item new-note5" data-toggle="modal" data-target="#new-note5"><i class="las la-eye mr-3"></i>View</a>
                                                            <a href="#" class="dropdown-item edit-note1" data-toggle="modal" data-target="#edit-note1"><i class="las la-pen mr-3"></i>Edit</a>
                                                            <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".card" href="#"><i class="las la-trash-alt mr-3"></i>Delete</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body rounded">
                                            <h4 class="card-title">{{$note->title}}</h4>
                                            <p class="mb-3 card-description short">{{$note->description}}</p>
                                        </div>
                                        <div class="card-footer">
                                            <div class="d-flex align-items-center justify-content-between note-text note-text-primary">
                                                <a href="#" class=""><i class="las la-user mr-2 font-size-20"></i>{{$note->user->name}}</a>
                                                <a href="#" class=""><i class="las la-calendar mr-2 font-size-20"></i>{{$note->created_at->format('d M Y')}}</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                @endforeach

                            </div>
                        </div>
                        <div class="icon active animate__animated animate__fadeIn i-list">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="table-responsive">
                                        <table class="table  tbl-server-info">
                                            <thead>
                                                <tr class="ligth">
                                                    <th class="w-50" scope="col">Title</th>
                                                    <th scope="col">Permission</th>
                                                    <th scope="col">Created At</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($notes as $note)
                                                @if ($note->user->id == $pins[0]->user_id && $note->id == $pins[0]->note_id)
                                                <tr>
                                                    <td>
                                                        <h4 class="mb-2">{{$note->title}} <i class="las la-thumbtack ml-2"></i></h4>
                                                        <span>{{$note->description}}</span>
                                                    </td>
                                                    <td>
                                                        <i class="las la-lock mr-2 font-size-20"></i>
                                                        {{$note->user->name}}
                                                    </td>
                                                    <td>{{$note->created_at->format('d M Y')}}</td>
                                                    <td>
                                                        <div>
                                                            <a href="#" class="badge badge-success mr-3" data-toggle="modal" data-target="#edit-note1"><i class="las la-pen mr-0"></i></a>
                                                            <a href="#" class="badge badge-danger" data-extra-toggle="delete" data-closest-elem="tr"><i class="las la-trash-alt mr-0"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                @endif
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="note4" class="tab-pane fade">
                        <div class="icon active animate__animated animate__fadeIn i-grid">
                            <div class="row">
                                @foreach ($notes as $note)
                                @if ($note->user->id == $favourites[0]->user_id && $note->id == $favourites[0]->note_id)
                                <div class="col-lg-4 col-md-6">
                                    <div class="card card-block card-stretch card-height card-bottom-border-danger note-detail">
                                        <div class="card-header d-flex justify-content-between pb-1">
                                            <div class="icon iq-icon-box-2 icon-border-danger rounded">
                                                <svg width="23" height="23" class="svg-icon" id="iq-main-23" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                                </svg>
                                            </div>
                                            <div class="card-header-toolbar d-flex align-items-center">
                                                <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="favorite"><i class="lar la-heart mr-2"></i></a>
                                                <div class="card-header-toolbar d-flex align-items-center">
                                                    <div class="dropdown">
                                                        <span class="dropdown-toggle dropdown-bg" id="note-dropdownMenuButton26"
                                                            data-toggle="dropdown" aria-expanded="false" role="button">
                                                            <i class="ri-more-fill"></i>
                                                        </span>
                                                        <div class="dropdown-menu dropdown-menu-right"
                                                            aria-labelledby="note-dropdownMenuButton26" style="">
                                                            <a href="#" class="dropdown-item new-note4" data-toggle="modal" data-target="#new-note4"><i class="las la-eye mr-3"></i>View</a>
                                                            <a href="#" class="dropdown-item edit-note1" data-toggle="modal" data-target="#edit-note1"><i class="las la-pen mr-3"></i>Edit</a>
                                                            <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".card" href="#"><i class="las la-trash-alt mr-3"></i>Delete</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body rounded">
                                            <h4 class="card-title">{{$note->title}}</h4>
                                            <p class="mb-3 card-description short">{{$note->description}}</p>

                                        </div>
                                        <div class="card-footer">
                                            <div class="d-flex align-items-center justify-content-between note-text note-text-danger">
                                                <a href="#" class=""><i class="las la-user mr-2 font-size-20"></i>{{$note->user->name}}</a>
                                                <a href="#" class=""><i class="las la-calendar mr-2 font-size-20"></i>{{$note->created_at->format('d M Y')}}</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                @endforeach
                            </div>
                        </div>
                        <div class="icon active animate__animated animate__fadeIn i-list">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="table-responsive">
                                        <table class="table  tbl-server-info">
                                            <thead>
                                                <tr class="ligth">
                                                    <th class="w-50" scope="col">Title</th>
                                                    <th scope="col">Permission</th>
                                                    <th scope="col">Created At</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($notes as $note)
                                                @if ($note->user->id == $favourites[0]->user_id && $note->id == $favourites[0]->note_id)
                                                <tr>
                                                    <td>
                                                        <h4 class="mb-2">{{$note->title}} <i class="lar la-heart ml-2"></i></h4>
                                                        <span>{{$note->description}}</span>
                                                    </td>
                                                    <td>
                                                        <i class="las la-lock mr-2 font-size-20"></i>
                                                        {{$note->user->name}}
                                                    </td>
                                                    <td>{{$note->created_at->format('d M Y')}}</td>
                                                    <td>
                                                        <div>
                                                            <a href="#" class="badge badge-success mr-3" data-toggle="modal" data-target="#edit-note1"><i class="las la-pen mr-0"></i></a>
                                                            <a href="#" class="badge badge-danger" data-extra-toggle="delete" data-closest-elem="tr"><i class="las la-trash-alt mr-0"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                @endif
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- model show  --}}
{{-- $theNotesID['id'] --}}
{{-- <div class="modal fade" id="new-note{{'ss'}}" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="popup text-left">
                    <div class="media align-items-top justify-content-between">
                        <h3 class="mb-3">{{'sss'}}</h3>
                        <div class="btn-cancel p-0" data-dismiss="modal"><i class="las la-times"></i></div>
                    </div>
                    <div class="content create-workform">
                        <p class="mb-4">{{$theIds}}</p>
                        <h4 class="mb-3">Shared</h4>
                        <ul class="list-inline p-0 m-0">
                            <li>
                                <div class="media align-items-center cust-card mb-3">
                                    <div class="">
                                        <img class="avatar-50 rounded-small" src="../assets/images/user/01.jpg" alt="01">
                                    </div>
                                    <div class="media-body ml-3">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h5 class="mb-0">{{'ssss'}}</h5>
                                            <h6 class="mb-0">{{'ssss'}}</h6>
                                        </div>
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}





                                {{-- model edit  --}}
{{-- sssssssssssssssssssssssss --}}

{{--
<div class="modal fade" id="edit-note{{$note->id}}" tabindex="1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="popup text-left">
                    <div class="media align-items-top justify-content-between">
                        <h3 class="mb-3">{{$note->title}}</h3>
                        <div class="btn-cancel p-0" data-dismiss="modal"><i class="las la-times"></i></div>
                    </div>
                    <div class="content edit-notes">
                        <div class="card card-transparent card-block card-stretch event-note mb-0">
                            <div class="card-body px-0 bukmark">
                                <div class="d-flex align-items-center justify-content-between pb-2 mb-3 border-bottom">
                                    <div class="quill-tool">
                                    </div>
                                </div>
                                <div id="quill-toolbar1">
                                    <p>{{$note->description}}</p>
                                </div>
                            </div>
                            <div class="card-footer border-0">
                                <div class="d-flex flex-wrap align-items-ceter justify-content-end">
                                    <div class="btn btn-primary mr-3" data-dismiss="modal">Cancel</div>
                                    <div class="btn btn-outline-primary" data-dismiss="modal">Save</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
