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
                            <li class="breadcrumb-item"><a href="javascript:void(0);"></a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboards</a></li>
                            <li class="breadcrumb-item active">Welcome!</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Create an offer</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="header-title">Add a new offer</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <form action="{{ route('offers.store') }}" method="POST" id="addOfferForm">
                                    @csrf

                                    <div class="mb-3">
                                        <label for="title" class="form-label">Title</label>
                                        <input type="text" id="title" class="form-control @error('title') is-invalid @enderror" name="title" placeholder="Offer Title">
                                        @error('title')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="domain" class="form-label">Domain</label>
                                        <input type="text" id="domain" class="form-control @error('domain') is-invalid @enderror" name="domain" placeholder="Offer Domain">
                                        @error('domain')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="local" class="form-label">Local</label>
                                        <input type="text" id="local" class="form-control @error('local') is-invalid @enderror" name="local" placeholder="Offer Location">
                                        @error('local')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="salary" class="form-label">Salary</label>
                                        <input type="number" id="salary" class="form-control @error('salary') is-invalid @enderror" name="salary" placeholder="Offer Salary">
                                        @error('salary')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="description" class="form-label">Description</label>
                                        <textarea id="description" class="form-control @error('description') is-invalid @enderror" name="description" rows="4" placeholder="Offer Description"></textarea>
                                        @error('description')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>


                                    <div class="mb-3">
                                        <label for="education_level_id" class="form-label">Education Level</label>
                                        <select id="education_level_id" class="form-control @error('education_level_id') is-invalid @enderror" name="education_level_id">
                                            <option value="">Select Education Level</option>
                                            @foreach($educationLevels as $level)
                                                <option value="{{ $level->id }}">{{ $level->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('education_level_id')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="profession_id" class="form-label">Profession</label>
                                        <select id="profession_id" name="profession_id" class="form-select">
                                            <!-- Add options dynamically from your database -->
                                            @foreach ($professions as $profession)
                                                <option value="{{ $profession->id }}">{{ $profession->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="mb-3">
                                        <label for="category_id" class="form-label">Category</label>
                                        <select id="category_id" name="category_id" class="form-select">
                                            <!-- Add options dynamically from your database -->
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="mb-3">
                                        <label for="contract_id" class="form-label">Contract</label>
                                        <select id="contract_id" name="contract_id" class="form-select">
                                            <!-- Add options dynamically from your database -->
                                            @foreach ($contracts as $contract)
                                                <option value="{{ $contract->id }}">{{ $contract->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                               
                                    <input type="hidden" name="entreprise_id" value="{{ $entrepriseId }}">
                                    <button type="submit" id="submitButton" class="btn btn-primary" name="addOffer">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
