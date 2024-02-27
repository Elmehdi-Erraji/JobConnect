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
                            <li class="breadcrumb-item"><a href="javascript:void(0);"> </a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboards</a></li>
                            <li class="breadcrumb-item active">Recruiters</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Recruiters</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->
        <div class="row">
            <div class="col-12">
                <!-- Recruiters -->
                <div class="card">
                    <div class="card-body p-0">
                        <div class="p-3">
                            <div class="row">
                                <div class="col-lg-6">
                                    <!-- You can add a button or link to add new recruiters if needed -->
                                </div>
                            </div>
                        </div>

                        <div id="recruiters-table" class="collapse show">
                            <div class="table-responsive">
                                <table class="table table-nowrap table-hover mb-0">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                       
                                        <th>Username</th>
                                        <th>E-mail</th>
                                        <th>Phone</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody id="tableBody">
                                    @foreach ($recruiters as $recruiter)
                                        <tr>
                                            <td>{{ $recruiter->id }}</td>
                                            
                                            <td>{{ $recruiter->name }}</td>
                                            <td>{{ $recruiter->email }}</td>
                                            <td>{{ $recruiter->phone }}</td>

                                            <td>
                                                @if ($recruiter->status === 1)
                                                    <span class="badge bg-info-subtle text-info">Pending</span>
                                                @elseif ($recruiter->status === 2)
                                                    <span class="badge bg-warning-subtle text-warning">Active</span>
                                                @elseif ($recruiter->status === 3)
                                                    <span class="badge bg-pink-subtle text-pink ">Banned</span>
                                                @else
                                                    <span class="badge bg-warning">Unknown Status</span>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('recuiters.edit', $recruiter->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                                <a href="{{ route('recuiters.show', $recruiter->id) }}" class="btn btn-sm btn-success">View Details</a>

                                                <!-- Add delete functionality if needed -->
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                <!-- You can add pagination links if needed -->

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
