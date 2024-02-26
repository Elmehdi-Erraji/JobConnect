@extends('.layouts.main')

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
                <h4 class="page-title">Edit Entreprise</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="header-title">Edit Entreprise</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <form action="{{ route('entreprise.update', $entreprise->id) }}" method="POST" id="editEntrepriseForm" enctype="multipart/form-data">
                                @csrf
                                @method('PUT') <!-- Use the HTTP PUT method for updating -->

                                <div class="mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" id="name" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Entreprise Name" value="{{ old('name', $entreprise->name) }}">
                                    @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="description" class="form-label">Description</label>
                                    <textarea id="description" class="form-control @error('description') is-invalid @enderror" name="description" placeholder="Entreprise Description">{{ old('description', $entreprise->description) }}</textarea>
                                    @error('description')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="status" class="form-label">Status</label>
                                    <select class="form-select @error('status') is-invalid @enderror" id="status" name="status">
                                        <option value="0" {{ old('status', $entreprise->status) == 0 ? 'selected' : '' }}>Pending</option>
                                        <option value="1" {{ old('status', $entreprise->status) == 1 ? 'selected' : '' }}>Active</option>
                                        <option value="2" {{ old('status', $entreprise->status) == 2 ? 'selected' : '' }}>Banned</option>
                                    </select>
                                    @error('status')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="user_id" class="form-label">Responsible User</label>
                                    <select class="form-select @error('user_id') is-invalid @enderror" id="user_id" name="user_id">
                                        @foreach ($users as $user)
                                            <option value="{{ $user->id }}" {{ old('user_id', $entreprise->user_id) == $user->id ? 'selected' : '' }}>{{ $user->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('user_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <button type="submit" id="submitButton" class="btn btn-primary" name="editEntreprise">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
