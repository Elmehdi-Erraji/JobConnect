@extends('layouts.main')

@section('content')


 {{-- @dd($applications);  --}}
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
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Entreprise</a></li>
                        <li class="breadcrumb-item active">Welcome!</li>
                    </ol>
                </div>
                <h4 class="page-title">Entreprise!</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <!-- Todo-->
            <div class="card">
                <div class="card-body p-0">
                    <div class="p-3">
                        <div class="row">
                            <div class="col-lg-6">
                            </div>

                        </div>
                    </div>

                    <div id="yearly-sales-collapse" class="collapse show">
                        <div class="table-responsive">
                            <table class="table table-nowrap table-hover mb-0">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Candidat name</th>
                                        <th>Offer title</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody id="tableBody">
                                    @foreach ($applications as $application)
                                    <tr>
                                        <td>#</td>
                                        <td>{{ $application->user_name }}</td> <!-- Display candidate's name -->
                                        <td>{{ $application->offer_title }}</td> <!-- Display offer title -->
                                        <td>
                                            @if ($application->request_status === '0')
                                                <span class="badge bg-info-subtle text-info">Pending</span>
                                            @elseif ($application->request_status ==='1')
                                                <span class="badge bg-success-subtle text-success">Accepted</span>
                                            @elseif ($application->request_status === '2') <!-- Assuming 2 is for 'Rejected' status -->
                                                <span class="badge bg-danger-subtle text-danger">Rejected</span>
                                            @else
                                                <span class="badge bg-warning-subtle text-warning">Unknown</span>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="" class="btn btn-info">Edit</a>
                                            <a href="" class="btn btn-warning">View Candidate details</a>
                                        </td>
                                    </tr>
                                @endforeach
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