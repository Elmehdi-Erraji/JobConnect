@extends('layouts.main')

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
                            <li class="breadcrumb-item active">Offers</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Offers</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->
        <div class="row">
            <div class="col-12">
                <!-- Offers -->
                <div class="card">
                    <div class="card-body p-0">
                        <div class="p-3">
                            <div class="row">
                                <div class="col-lg-6">
                                    <!-- You can add a button or link to add new offers if needed -->
                                </div>
                            </div>
                        </div>

                        <div id="offers-table" class="collapse show">
                            <div class="table-responsive">
                                <table class="table table-nowrap table-hover mb-0">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Title</th>
                                        <th>Domain</th>
                                        <th>Location</th>
                                        <th>Salary</th>
                                        <th>Description</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody id="tableBody">
                                    @foreach ($offers as $offer)
                                        <tr>
                                            <td>{{ $offer->id }}</td>
                                            <td>{{ $offer->title }}</td>
                                            <td>{{ $offer->domain }}</td>
                                            <td>{{ $offer->local }}</td>
                                            <td>{{ $offer->salary }}</td>
                                            <td>{{ $offer->description }}</td>
                                            <td>
                                                <a href="{{ route('offers.edit', $offer->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                                <a href="{{ route('offers.show', $offer->id) }}" class="btn btn-sm btn-success">View Details</a>

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
