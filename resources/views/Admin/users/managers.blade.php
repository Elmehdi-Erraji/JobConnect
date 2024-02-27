@extends('layouts.main')

@section('content')

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@dd($managers);

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
            <div class="col-12">
                <!-- Todo-->
                <div class="card">
                    <div class="card-body p-0">
                        <div class="p-3">
                            <div class="row">
                                <div class="col-lg-6">
                                    <a href="{{ route('users.create') }}" class="btn btn-primary" id="addButton" style="width: 30%">Add A User</a>
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
                                        @foreach ($managers as $manager)
                                        <tr>
                                            <td>{{ $manager->id }}</td>
                                            <td>
                                                @if ($manager->getFirstMedia('avatars'))
                                                    <img src="{{ asset($manager->getFirstMedia('avatars')->getUrl()) }}" class="rounded-circle" alt="Avatar" width="50">
                                                @else
                                                    No image
                                                @endif
                                            </td>
                                            <td>{{ $manager->name }}</td>
                                            <td>{{ $manager->email }}</td>
                                            <td>{{ $manager->phone }}</td>
                                            <td>{{ $manager->status }}</td> <!-- Adjust status display as needed -->
                                    
                                            <!-- Display roles -->
                                            <td>
                                                @if ($manager->roles()->exists())
                                                    {{ $manager->roles()->first()->name }}
                                                @endif
                                            </td>
                                    
                                            <!-- Display enterprise -->
                                            <td>
                                                @if ($manager->enterprise)
                                                    {{ $manager->enterprise->name }}
                                                @endif
                                            </td>
                                    
                                            <!-- Other actions -->
                                            <td>
                                                <a href="{{ route('users.edit', $manager->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                                <a href="{{ route('users.show', $manager->id) }}" class="btn btn-sm btn-success">View Details</a>
                                    
                                                <form action="{{ route('users.destroy', $manager->id) }}" method="POST" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger  delete-btn">Delete</button>
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

