<div class="leftside-menu">
    <!-- Brand Logo Light -->
    <a href="#" class="logo logo-light">
            <span class="logo-lg">
                <img src="{{ asset('assets/images/logo-sm.png') }}" alt="logo">
            </span>
        <span class="logo-sm">
                <img src="{{ asset('assets/images/logo-sm.png') }}" alt="small logo">
            </span>
    </a>

    <!-- Brand Logo Dark -->
    <a href="#" class="logo logo-dark">
            <span class="logo-lg">
                <img src="{{ asset('assets/images/logo-sm.png') }}" alt="dark logo">
            </span>
        <span class="logo-sm">
                <img src="{{ asset('assets/images/logo-sm.png') }}" alt="small logo">
            </span>
    </a>

    <!-- Sidebar -left -->
    <div class="h-100" id="leftside-menu-container" >

        <ul class="side-nav">
            <li class="side-nav-title">Main</li>

            <li class="side-nav-item">
                <a href="{{route('home')}}" class="side-nav-link">
                    <i class="ri-home-3-line"></i>
                    <span> Back Home </span>
                </a>
            </li>

            <li class="side-nav-item">
                <a href="{{route('dashboard')}}" class="side-nav-link">
                    <i class="ri-dashboard-3-line"></i>
                    <span> Dashboard </span>
                </a>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarUsers" aria-expanded="false" aria-controls="sidebarUsers" class="side-nav-link">
                    <i class="ri-group-2-line"></i>
                    <span> Users </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarUsers">
                    <ul class="side-nav-third-level">
                        <li>
                            <a href="{{route('users.create')}}">Add A User</a>
                        </li>
                        <li>
                            <a href="{{route('users.index')}}">Users List</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarManagers" aria-expanded="false" aria-controls="sidebarManagers" class="side-nav-link">
                    <i class="ri-admin-line"></i>
                    <span> Managers </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarManagers">
                    <ul class="side-nav-third-level">
                        <li>
                            <a href="{{route('users.create')}}">Add A Manager</a>
                        </li>
                        <li>
                            <a href="{{route('users.index')}}">Managers List</a>
                        </li>
                    </ul>
                </div>
            </li>

         
            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarOffers" aria-expanded="false" aria-controls="sidebarOffers" class="side-nav-link">
                    <i class="ri-folder-line"></i>
                    <span> Offers </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarOffers">
                    <ul class="side-nav-third-level">
                        <li>
                            <a href="#">Add An Offers</a>
                        </li>
                        <li>
                            <a href="#">Offers List</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarServices" aria-expanded="false" aria-controls="sidebarServices" class="side-nav-link">
                    <i class="ri-flag-2-line"></i>
                    <span> Requests </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarServices">
                    <ul class="side-nav-third-level">
                        <li>
                            <a href="#">Requests List</a>
                        </li>
                    </ul>
                </div>
            </li>


            <!-- Additional data -->
            <li class="side-nav-title">Static Informations</li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarCategory" aria-expanded="false" aria-controls="sidebarCategory" class="side-nav-link">
                    <i class="ri-folder-line"></i>
                    <span> Category </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarCategory">
                    <ul class="side-nav-third-level">
                        <li>

                            <a href="{{route('category.index')}}">Categories list</a>

                        </li>

                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarSkills" aria-expanded="false" aria-controls="sidebarSkills" class="side-nav-link">
                    <i class="ri-tools-line"></i>
                    <span> Skills </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarSkills">
                    <ul class="side-nav-third-level">
                        <li>
                            <a href="{{route('skills.index')}}">Skill List</a>
                        </li>

                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarContact" aria-expanded="false" aria-controls="sidebarContact" class="side-nav-link">
                    <i class="ri-file-text-line"></i>
                    <span> Contract </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarContact">
                    <ul class="side-nav-third-level">

                        <li>

                            <a href="{{route('contracts.index')}}">Contract List</a>

                        </li>

                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarProfession" aria-expanded="false" aria-controls="sidebarProfession" class="side-nav-link">
                    <i class="ri-briefcase-line"></i>
                    <span> Profession </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarProfession">
                    <ul class="side-nav-third-level">
                        <li>
                            <a href="{{route('profession.index')}}">Profession List</a>
                        </li>
                    </ul>
                </div>
            </li>
           


        </ul>



    </div>

    <div class="clearfix"></div>
</div>
