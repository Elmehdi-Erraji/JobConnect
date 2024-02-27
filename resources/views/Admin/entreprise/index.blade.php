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
                                <a href="" class="btn btn-primary" id="addButton" style="width: 30%">Add An Entreprise</a>
                            </div>

                        </div>
                    </div>

                    <div id="yearly-sales-collapse" class="collapse show">
                        <div class="table-responsive">
                            <table class="table table-nowrap table-hover mb-0">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>description</th>
                                        <th>Status</th>
                                        <th>Responsable Name</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody id="tableBody">
                                    @foreach ($entreprises as $entreprise)
                                    <tr>
                                        <td>{{ $entreprise->id }}</td>
                                        <td>{{ $entreprise->name }}</td>
                                        <td>{{ $entreprise->description }}</td>
                                        <td>
                                            @if($entreprise->status == 0)
                                            Pending
                                            @elseif($entreprise->status == 1)
                                            Active
                                            @elseif($entreprise->status == 2)
                                            Banned
                                            @else
                                            Unknown Status
                                            @endif
                                        </td>
                                        <td>{{ $entreprise->entrepriseRepre->name }}</td>
                                        <td>

                                            <a href="{{ route('entreprise.edit', $entreprise->id) }}" class="btn btn-warning">Edit</a>
                                            <a href="{{ route('entreprise.show', $entreprise->id) }}" class="btn btn-info">View</a>


                                            <form action="{{ route('entreprise.destroy', $entreprise->id) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete?')">Delete</button>
                                            </form>
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