<!-- Navbar -->
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        
        <a href="{{ ('/') }}" class="navbar-brand ms-3">
            <img src="frontend/images/logo.png" alt="Logo Travel"> TravePoor
        </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navb">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navb">
            <ul class="navbar-nav ms-auto mr-3">
                <li class="nav-item mx-md-2"><a href="#" class="nav-link active">Home</a></li>
                <li class="nav-item mx-md-2"><a href="#" class="nav-link">Paket Travel</a></li>
                <li class="nav-item dropdown"><a href="#" class="nav-link dropdown-toggle" id="navbardrop" data-bs-toggle="dropdown">Service</a>
                    <ul class="dropdown-menu">
                        <li><a href="#" class="dropdown-item">Link</a></li>
                        <li><a href="#" class="dropdown-item">Link</a></li>
                        <li><a href="#" class="dropdown-item">Link</a></li>
                    </ul>
                </li>
                <li class="nav-item mx-md-2"><a href="#" class="nav-link">Testimonial</a></li>
            </ul>

            <!-- Mobile Button -->
            <form class="form-inline d-sm-block d-md-none">
                <button class="btn btn-login my-2 my-sm-0">
                    Masuk
                </button>
            </form>
            
            <!-- Desktop Button -->
            <form class="form-inline my-2 my-lg-0 d-none d-md-block">
                <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4">
                    Masuk
                </button>
            </form>
        </div>
    
    </nav>
</div>