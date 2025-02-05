
<header>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid py-3 px-2 px-md-5 px-lg-2">
            <!-- Navbar Brand -->
            <div class="main-brand">
                <a class="navbar-brand brand-img" href="#">
                    <img class="img-fluid img-thumbnail bg-img" src="{{ asset('images/logo.png') }}" alt="Logo">
                </a>
            </div>

            <!-- Offcanvas Menu -->
            <div class="offcanvas offcanvas-start bg-color" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel"></h5>
                    <button type="button" class="btn-close text-reset rounded-circle bg-white mt-3 me-3" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3 py-3">
                        <li class="nav-item px-2">
                            <a class="nav-link active text-white fw-bold" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item px-2">
                            <a class="nav-link text-white fw-bold" href="#">About</a>
                        </li>
                        <li class="nav-item px-2">
                            <a class="nav-link text-white fw-bold" href="#">Contact</a>
                        </li>
                        <li class="nav-item px-2">
                            <a class="nav-link text-white fw-bold" href="#">Blog</a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Navbar Links -->
            <div class="ms-auto me-lg-0" id="navbarNav">
                <ul class="navbar-nav ms-auto me-sm-4 me-lg-0">
                    <li class="nav-item download-cv-btn rounded px-3">
                        <a class="nav-link border-style rounded px-2 text-white fw-bold" aria-current="page" href="#">Download CV</a>
                    </li>
                </ul>
            </div>

            <!-- Offcanvas Trigger (for smaller screens below `sm`) -->
            <button class="btn d-lg-none" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon">
                    <span></span>
                </span>
            </button>

        </div>
    </nav>
</header>

