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
                <a href="" class="side-nav-link">
                    <i class="ri-home-3-line"></i>
                    <span> Back Home </span>
                </a>
            </li>

            <li class="side-nav-item">
                <a href="" class="side-nav-link">
                    <i class="ri-dashboard-3-line"></i>
                    <span> Dashboard </span>
                </a>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarUsers" aria-expanded="false" aria-controls="sidebarUsers" class="side-nav-link">
                    <i class="ri-group-2-line"></i>
                    <span> Recruiter</span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarUsers">
                    <ul class="side-nav-third-level">
                        <li>
                            <a href="{{route('recuiters.create')}}">Add A Recruiter</a>
                        </li>
                        <li>
                            <a href="{{route('recuiters.index')}}">Recruiter List</a>
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
                            <a href="{{route('offers.create')}}">Add An Offers</a>
                        </li>
                        <li>
                            <a href="{{route('offers.index')}}">Offers List</a>
                        </li>
                    </ul>
                </div>
            </li>


            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarServices" aria-expanded="false" aria-controls="sidebarServices" class="side-nav-link">
                    <i class="ri-flag-2-line"></i>
                    <span> Condidats </span>
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




        </ul>



    </div>

    <div class="clearfix"></div>
</div>
