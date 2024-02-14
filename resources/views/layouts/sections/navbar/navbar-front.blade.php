<style>
    .dropdown-menu {
        display: none;
    }

    .dropdown-menu.show {
        display: block;
    }
</style>
<nav class="layout-navbar shadow-none py-0">
    <div class="container">
        <div class="navbar navbar-expand-lg landing-navbar px-3 px-md-4">
            <!-- Menu logo wrapper: Start -->
            <div class="navbar-brand app-brand demo d-flex py-0 py-lg-2 me-4">
                <!-- Mobile menu toggle: Start-->
                <button class="navbar-toggler border-0 px-0 me-2" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <i class="ti ti-menu-2 ti-sm align-middle"></i>
                </button>
                <!-- Mobile menu toggle: End-->
                <a href="{{ route('front-page') }}" class="app-brand-link">

                    <span class="app-brand-text demo menu-text fw-bold ms-2 ps-1">EasyService</span>
                </a>
            </div>
            <!-- Menu logo wrapper: End -->
            <!-- Menu wrapper: Start -->
            <div class="collapse navbar-collapse landing-nav-menu" id="navbarSupportedContent">
                <button class="navbar-toggler border-0 text-heading position-absolute end-0 top-0 scaleX-n1-rtl"
                    type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="ti ti-x ti-sm"></i>
                </button>
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link fw-medium" aria-current="page" href="#landingHero">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-medium" href="#landingFeatures">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-medium" href="#landingTeam">Team</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-medium" href="#landingFAQ">FAQ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-medium" href="#landingContact">Contact us</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link fw-medium" href="" id="admin-link">Admin</a>
                    </li>
                </ul>
            </div>

            <!-- Menu wrapper: End -->
            <!-- Toolbar: Start -->
            <ul class="navbar-nav flex-row align-items-center ms-auto">

                <!-- navbar button: Start -->
                @if (Auth::check() && Auth::user()->show_profile === 'yes')
               
                    <li class="nav-item navbar-dropdown dropdown-user">
                        <a class="nav-link dropdown-toggle hide-arrow" href="#" id="userDropdown">
                            <div class="avatar avatar-online">
                                <img src="{{ Auth::user()->image ? Auth::user()->image : asset('assets/img/avatars/1.png') }}"
                                    alt class="h-auto rounded-circle">
                            </div>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                            <li>
                                <h6 class="dropdown-header">Profile</h6>
                            </li>
                            <li>
                                <div class="dropdown-divider"></div>
                            </li>
                            <li style="display: flex; justify-content: center; align-items: center;">
                                <div>
                                    <div class="avatar avatar-online">
                                        <img src="{{ Auth::user()->image ? Auth::user()->image : asset('assets/img/avatars/1.png') }}"
                                            alt class="h-auto rounded-circle">
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a class="dropdown-item">
                                    <h6 class="align-middle">Name:</h6>
                                    <span class="align-middle">{{ Auth::user()->username }}</span>
                                </a>
                            </li>
                            <li>
                                <div class="dropdown-divider"></div>
                            </li>
                            <li>
                                <a class="dropdown-item">
                                    <h6 class="align-middle">Email:</h6>
                                    <span class="align-middle">{{ Auth::user()->email }}</span>
                                </a>
                            </li>
                            <li>
                                <div class="dropdown-divider"></div>
                            </li>
                            <li>
                                <a class="dropdown-item">
                                    <h6 class="align-middle">Role:</h6>
                                    <span class="align-middle">{{ Auth::user()->role }}</span>
                                </a>
                            </li>
                            <li>
                                <div class="dropdown-divider"></div>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('logout') }}">
                                    <i class='ti ti-logout me-2'></i>
                                    <span class="align-middle">Logout</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                @else
                    <a href="{{ route('login-view', ['showregister' => 'true']) }}" class="btn btn-primary"
                        target="_blank">
                        <span class="tf-icons ti ti-login scaleX-n1-rtl me-md-1"></span>
                        <span class="d-none d-md-block">Login/Register</span>
                    </a>
                @endif

                <!-- navbar button: End -->
            </ul>
            <!-- Toolbar: End -->
        </div>
    </div>
</nav>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function() {
        $("#userDropdown").on("click", function() {
            $(".dropdown-menu").toggleClass("show");
        });

        $(document).on("click", function(event) {
            var $trigger = $("#userDropdown");
            if ($trigger !== event.target && !$trigger.has(event.target).length) {
                $(".dropdown-menu").removeClass("show");
            }
        });
    });
    document.getElementById('admin-link').addEventListener('click', function(event) {
        event.preventDefault();
        var isAuthenticated = {{ Auth::check() ? 'true' : 'false' }};
        if (isAuthenticated)   {

            $.ajax({
                url: 'admin-data',
                method: 'GET',
                success: function(response) {

                    window.location.href = 'admin-data';
                },
                error: function(xhr, status, error) {
                    console.error(error);
                }
            });
        } else {

            alert("Please register with a plan first.");
        }
    });
</script>
