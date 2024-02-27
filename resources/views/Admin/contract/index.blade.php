


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
                <!-- Categories Table -->
                <div class="card">
                    <div class="card-body p-0">
                        <div class="p-3">
                            <div class="row">
                                <div class="col-lg-6">
                                    <button type="button" class="btn btn-primary" style="width: 30%" data-bs-toggle="modal" data-bs-target="#add-contracts-modal">Add A Category</button>

                                </div>
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table class="table table-nowrap table-hover mb-0">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($contracts as $contract)
                                    <tr>
                                        <td>{{ $contract->id }}</td>
                                        <td>{{ $contract->name }}</td>
                                        <td>
                                            <form action="{{ route('contracts.destroy', $contract->id) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger delete-btn">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
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
        <div id="add-contracts-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <form id="add-category-form" action="{{ route('contracts.store') }}" method="POST" class="ps-3 pe-3">
                            @csrf
                            <div class="mb-3">
                                <label for="contracts-name" class="form-label">contracts Name</label>
                                <input class="form-control" type="text"  id="contracts-name" name="name" placeholder="Enter category name">
                                @error('name')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3 text-center">
                                <button class="btn rounded-pill btn-primary" type="submit" id="add-category-btn">Add contracts</button>
                            </div>
                        </form>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div>
    </div>


@endsection

