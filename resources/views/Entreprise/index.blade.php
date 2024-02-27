
@extends('layouts.mainentreprise')

@section('content')

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>



<!-- Start Content-->
<div class="container-fluid">
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);"> </a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboards</a></li>
                        <li class="breadcrumb-item active">Welcome!</li>
                    </ol>
                </div>
                <h4 class="page-title">Welcome!</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-xxl-3 col-sm-6">
            <div class="card widget-flat text-bg-primary">
                <div class="card-body">
                    <div class="float-end">
                        <i class="ri-group-2-line widget-icon"></i>
                    </div>
                    <h6 class="text-uppercase mt-0" title="Users">Users</h6>
                    <h2 class="my-2">0</h2>
                </div>
            </div>
        </div>
        <div class="col-xxl-3 col-sm-6">
            <div class="card widget-flat text-bg-purple">
                <div class="card-body">
                    <div class="float-end">
                        <i class="ri-building-4-line widget-icon"></i>
                    </div>
                    <h6 class="text-uppercase mt-0" title="Partners">Partners</h6>
                    <h2 class="my-2">0</h2>
                </div>
            </div>
        </div>
        <div class="col-xxl-3 col-sm-6">
            <div class="card widget-flat text-bg-info">
                <div class="card-body">
                    <div class="float-end">
                        <i class="ri-folder-line widget-icon"></i>
                    </div>
                    <h6 class="text-uppercase mt-0" title="Projects">Projects</h6>
                    <h2 class="my-2">0</h2>
                </div>
            </div>
        </div>

        <div class="col-xxl-3 col-sm-6">
            <div class="card widget-flat text-bg-secondary">
                <div class="card-body">
                    <div class="float-end">
                        <i class="ri-mail-line widget-icon"></i>
                    </div>
                    <h6 class="text-uppercase mt-0" title="Requests">Requests</h6>
                    <h2 class="my-2">0</h2>
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-12">
            <!-- Todo-->
            <div class="card">
                <div class="card-body p-0">
                    <div class="p-3">
                        <div class="row">
                            <div class="col-lg-6">
                                <a href="" class="btn btn-primary" id="addButton" style="width: 30%">Add An Artist</a>
                            </div>

                        </div>
                    </div>

                    <div id="yearly-sales-collapse" class="collapse show">
                        <div class="table-responsive">
                            <table class="table table-nowrap table-hover mb-0">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Image</th>
                                        <th>Username</th>
                                        <th>E-mail</th>
                                        <th>Phone</th>
                                        <th>Status</th>
                                        <th>Role</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody id="tableBody">

                                </tbody>
                            </table>
                            @if (Session::has('success'))
                            <script>
                                console.log("SweetAlert initialization script executed!");
                                Swal.fire("Success", "{{ Session::get('success') }}", 'success');
                            </script>
                            @endif


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection