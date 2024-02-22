@extends('layouts.main')

@section('content')

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-sm-12">
                <div class="profile-bg-picture" style="background-image:url('assets/images/bg-profile.jpg')">
                    <span class="picture-bg-overlay"></span>
                    <!-- overlay -->
                </div>
                <!-- meta -->
                <div class="profile-user-box">
                    <div class="row">
                        <div class="col-sm-6">
                            @if (Auth::user()->getFirstMedia('avatars'))
                                <div class="profile-user-img"><img src="{{ Auth::user()->getFirstMedia('avatars')->getUrl() }}" alt="" class="avatar-lg rounded-circle"></div>
                            @else
                                <i class="ri-account-circle-line fs-18 align-middle me-1"></i>
                            @endif

                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex justify-content-end align-items-center gap-2">
                                <button type="button" class="btn btn-info" id="edit-profile-button">
                                    <i class="ri-settings-2-line align-text-bottom me-1 fs-16 lh-1"></i>
                                    Edit Profile
                                </button>
                                <button type="button" class="btn btn-soft-danger" id="delete-account-button" data-bs-toggle="modal" data-bs-target="#login-modal">
                                    <i class="ri-delete-bin-line align-text-bottom me-1 fs-16 lh-1"></i>
                                    Delete Account
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ meta -->
            </div>
        </div>



        <div id="login-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">


                        <form id="delete-account-form" action="{{ route('profile.destroy',Auth::user()->id) }}" method="POST" class="ps-3 pe-3">
                            @csrf
                            @method('DELETE')
                            <div class="mb-3">
                                <label for="password1" class="form-label">Password</label>
                                <input class="form-control" type="password" required id="password1" name="password" placeholder="Enter your password">
                            </div>
                            <div class="mb-3 text-center">
                                <button class="btn rounded-pill btn-primary" type="submit">Delete account</button>
                            </div>
                        </form>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card p-0">
                    <div class="card-body p-0">
                        <div class="profile-content">
                            <ul class="nav nav-underline nav-justified gap-0">
                                <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" data-bs-target="#aboutme" type="button" role="tab" aria-controls="home" aria-selected="true" href="#aboutme">Profile</a></li>
                                <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" data-bs-target="#edit-profile" type="button" role="tab" aria-controls="home" aria-selected="true" href="#edit-profile">Personal Info</a></li>
                                <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" data-bs-target="#user-activities" type="button" role="tab" aria-controls="home" aria-selected="true" href="#user-activities">Experience</a></li>
                                <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" data-bs-target="#projects" type="button" role="tab" aria-controls="home" aria-selected="true" href="#projects">Education</a></li>
                            </ul>

                            <div class="tab-content m-0 p-4">
                                <div class="tab-pane active" id="aboutme" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                                    <div class="profile-desk">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h2 class="text-uppercase fs-24 text-dark">{{ Auth::user()->name }} {{ Auth::user()->last_name }}</h2>
                                                <div class="designation mb-4">{{ Auth::user()->profession }}</div>
                                                <div class="mt-4">
                                                    <h4 class="fs-20 text-dark">Contact Information</h4>
                                                    <p class="text-muted fs-16"><strong>Email:</strong> <a href="mailto:{{ Auth::user()->email }}">{{ Auth::user()->email }}</a></p>
                                                    <p class="text-muted fs-16"><strong>Phone:</strong> {{ Auth::user()->phone }}</p>
                                                </div>
                                                <div class="mt-4">
                                                    <h4 class="fs-20 text-dark">About Me</h4>
                                                    <p class="text-muted fs-16">Hey, I'm [Your Name], a full stack developer passionate about crafting engaging web experiences. With expertise in both front-end and back-end technologies, I love turning ideas into reality through clean code and creative problem-solving. Let's build something awesome together!</p>
                                                </div>
                                            </div>
                                            <div class="col-md-6 text-end">
                                                <a href="" class="btn btn-primary">Download CV</a>
                                            </div>
                                        </div>
                                    </div>
                                
                                    <!-- Experience Section -->
                                    <div class="mt-5">
                                        <h3 class="text-dark mb-3 fs-24">Experience</h3>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h5 class="mb-3">January 2019 - Present</h5>
                                                        <h4 class="card-title fs-22"><strong>Full Stack Developer</strong></h4>
                                                        <p class="card-text"><strong>Company:</strong> Company Name</p>
                                                        <p class="card-text"><strong>City:</strong> City Name</p>
                                                        <p class="card-text"><strong>Details:</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                    </div>
                                                </div>
                                                
                                                <div class="card mt-3">
                                                    <div class="card-body">
                                                        <h5 class="mb-3">January 2019 - Present</h5>
                                                        <h4 class="card-title fs-22"><strong>Full Stack Developer</strong></h4>
                                                        <p class="card-text"><strong>Company:</strong> Company Name</p>
                                                        <p class="card-text"><strong>City:</strong> City Name</p>
                                                        <p class="card-text"><strong>Details:</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                
                                    <!-- Formation Section -->
                                    <div class="mt-5">
                                        <h3 class="text-dark mb-3 fs-24">Formation</h3>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="card">
                                                    <div class="card-body">
                                                       
                                                        <h5 class="card-title fs-22"><strong>Engineering degree</strong></h5>
                                                        <h5 class="mb-3">January 2019 - Jully 2024</h5>
                                                        <p class="card-text"><strong>School:</strong> ENSA </p>
                                                        <p class="card-text"><strong>City:</strong> Agadir</p>
                                                        <p class="card-text"><strong>Details:</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end profile-desk -->
                                </div>
                                

                                <div id="edit-profile" class="tab-pane">
                                    <div id="edit-profile" class="tab-pane">
                                        <div class="user-profile-content">
                                            <form action="{{ route('profile.update',Auth::user()->id) }}" method="POST" id="profileForm" enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT')
                                                <input type="hidden" name="user_id" value="{{Auth::user()->id}}" >
                                                <div class="row row-cols-sm-2 row-cols-1">
                                                    <div class="mb-2">
                                                        <label class="form-label" for="username">First Name </label>
                                                        <input type="text" value="{{ Auth::user()->name }}" id="username" name="name" class="form-control">
                                                    </div>
                                                    <div class="mb-2">
                                                        <label class="form-label" for="last_name">Last Name</label>
                                                        <input type="text" value="{{ Auth::user()->last_name }}" id="last_name" name="last_name" class="form-control">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label" for="email">Email</label>
                                                        <input type="email" value="{{ Auth::user()->email }}" id="email" name="email" class="form-control">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label" for="phone">Phone</label>
                                                        <input type="tel" value="{{ Auth::user()->phone }}" id="phone" name="phone" class="form-control">
                                                    </div>

                                                    <div class="mb-3">
                                                    <label class="form-label" for="profession">Profession</label>
                                                    <select id="profession" name="profession" class="form-select">
                                                        <option value="">Select Profession</option>
                                                        @foreach($professions as $profession)
                                                            <option value="{{ $profession->id }}">{{ $profession->name }}</option>
                                                        @endforeach
                                                    </select>
                                                    </div> 

                                                    <div class="mb-3">
                                                        <label class="form-label" for="education_level">Education Level</label>
                                                        <select class="form-control" id="education_level" name="education_level">
                                                            <option value="">Select Education Level</option>
                                                            @foreach($education_level as $level)
                                                                <option value="{{ $level->id }}">{{ $level->name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>

                                                
                                                    <div class="mb-3">
                                                        <label class="form-label" for="motivation">Motivation</label>
                                                        <textarea id="motivation" name="motivation" class="form-control">{{ Auth::user()->motivation }}</textarea>
                                                    </div> 

                                                     <div class="col-sm-12 mb-3">
                                                        <label class="form-label" for="cv">CV</label>
                                                        <input type="file" id="cv" name="cv" class="form-control">
                                                        @if(Auth::user()->cv)
                                                        <a href="{{ asset('media path to cv' . Auth::user()->cv) }}" download>Download CV</a>
                                                        @endif
                                                    </div>

                                                    <div class="col-sm-12 mb-3">
                                                        <label class="form-label" for="profileImage">Profile Image</label>
                                                        <input type="file" id="profileImage" name="avatar" class="form-control">
                                                    </div>
                                                </div>
                                                <button class="btn btn-primary" type="submit"><i class="ri-save-line me-1 fs-16 lh-1"></i> Save</button>
                                            </form>
                                           
                                        </div>
                                    </div>
                                </div>

                                <div id="user-activities" class="tab-pane">
                                    <div class="row m-t-10">
                                        <div class="col-md-12">
                                            <form action="" method="POST" id="profileForm" enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT')
                                                <div class="row row-cols-sm-2 row-cols-1">
                                                    <!-- Other fields -->
                                                    <div class="mb-3">
                                                        <label class="form-label" for="position">Position</label>
                                                        <input type="text" id="position" name="position" class="form-control" value="{{ old('position') }}" required>
                                                        @error('position')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label" for="company">Company Name</label>
                                                        <input type="text" id="company" name="company" class="form-control" value="{{ old('company') }}" required>
                                                        @error('company')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label" for="start_date">Start Date</label>
                                                        <input type="date" id="start_date" name="start_date" class="form-control" value="{{ old('start_date') }}" required>
                                                        @error('start_date')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label" for="end_date">End Date</label>
                                                        <input type="date" id="end_date" name="end_date" class="form-control" value="{{ old('end_date') }}" required>
                                                        @error('end_date')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                   
                                                    <div class="mb-3">
                                                        <label class="form-label" for="description">Description</label>
                                                        <textarea id="description" name="description" class="form-control" required>{{ old('description') }}</textarea>
                                                        @error('description')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                    <!-- Other fields -->
                                                </div>
                                                <button class="btn btn-primary" type="submit"><i class="ri-save-line me-1 fs-16 lh-1"></i> Save</button>
                                            </form>
                                            
                                            
                                        </div>
                                    </div>
                                </div>

                                <div id="projects" class="tab-pane">
                                    <!-- Content for the "Projects" tab -->
                                    <div class="row m-t-10">
                                        <div class="col-md-12">
                                            <form action="" method="POST" id="educationForm">
                                                @csrf
                                                @method('PUT')
                                                <div class="row">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="degree_title">Degree Title</label>
                                                        <input type="text" id="degree_title" name="degree_title" class="form-control" value="{{ old('degree_title') }}" required>
                                                        @error('degree_title')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label" for="university">University</label>
                                                        <input type="text" id="university" name="university" class="form-control" value="{{ old('university') }}" required>
                                                        @error('university')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label" for="start_date">Start Date</label>
                                                        <input type="date" id="start_date" name="start_date" class="form-control" value="{{ old('start_date') }}" required>
                                                        @error('start_date')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label" for="end_date">End Date</label>
                                                        <input type="date" id="end_date" name="end_date" class="form-control" value="{{ old('end_date') }}" required>
                                                        @error('end_date')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <button class="btn btn-primary" type="submit"><i class="ri-save-line me-1 fs-16 lh-1"></i> Save</button>
                                            </form>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end page title -->
    </div>
    @if (Session::has('success'))
        <script>
            console.log("SweetAlert initialization script executed!");
            Swal.fire("Success", "{{ Session::get('success') }}", 'success');
        </script>
    @endif
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.getElementById("edit-profile-button").addEventListener("click", function() {
                document.querySelector('a[href="#edit-profile"]').click();
            });
        });
    </script>
@endsection
