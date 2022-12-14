<header>
    <div class="row ">
        <div class="col-md-12">
            <div class="row">
                <div class="col-lg-3 col-md-12">
                    <!-- <a class="navbar-brand" href="#"><img src="https://images-platform.99static.com//y0rb96b9CUsj6F8lqnkVOPlBuyY=/0x0:999x999/fit-in/500x500/99designs-contests-attachments/109/109048/attachment_109048124" height="60" width="150" alt=""></a> -->
                </div>
                <div class="col-lg-6 col-md-10">
                    <!-- <img class="img ms-md-5 ms-lg-0" src="https://th.bing.com/th/id/OIP.GzdIdwawwaDLXahsPhPlLAHaDi?w=314&h=167&c=7&r=0&o=5&pid=1.7" alt="" height="80px" width="400px"> -->
                </div>

            </div>
        </div>
    </div>
</header>
<nav class="navbar navbar-expand-lg navbar sticky-top container-fluid m-0 p-0" style="background-color:   #00e64d;">
    <div class="container-fluid">
        <div class="dropdown">
            <button class="btn text-danger" style="margin-right: 10rem;" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <h3>CATEGORY</h3>
            </button>
            <ul class="dropdown-menu text-center">
                <li><a class="dropdown-item" href="#">Grocery</a></li>
                <li><a class="dropdown-item" href="#">Kitchen</a></li>
                <li><a class="dropdown-item" href="#">Applicens</a></li>
                <li><a class="dropdown-item" href="#">Toys & Games</a></li>
                <li><a class="dropdown-item" href="#">Sports & Fittenss</a></li>
                <li><a class="dropdown-item" href="#">Mobiles & Accessories</a></li>
                <li><a class="dropdown-item" href="#">Books</a></li>
                <li><a class="dropdown-item" href="#">Furniture</a></li>
            </ul>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa-solid fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto px-2 mb-2 mb-lg-0">
                <a href="{{ route('home')}}">
                    <li class="nav-item {{ Route::is('home') ?  'active' : ''}}">
                        <button class="btn me-1 {{ Route::is('home') ?  'active' : ''}}" type="button" data-bs-auto-close="true" aria-expanded="false">
                            Home
                        </button>
                    </li>
                </a>
                <a href="{{ route('productlist')}}">
                    <li class="nav-item {{ Route::is('productlist') ?  'active' : ''}}">
                        <button class="btn me-1 {{ Route::is('productlist') ?  'active' : ''}}" type="button" data-bs-auto-close="true" aria-expanded="false">
                            Product
                        </button>
                    </li>
                </a>
                <a href="{{ route('about')}}">
                    <li class="nav-item {{ Route::is('about') ?  'active' : ''}}">
                        <button class="btn me-1 {{ Route::is('about') ?  'active' : ''}}" type="button" data-bs-auto-close="true" aria-expanded="false">
                            About
                        </button>
                    </li>
                </a>
                <a href="{{ route('contact')}}">
                    <li class="nav-item nav-item {{ Route::is('contact') ?  'active' : ''}}">
                        <button class="btn me-1 nav-item {{ Route::is('contact') ?  'active' : ''}}" type="button" data-bs-auto-close="true" aria-expanded="false">
                            Contact
                        </button>
                    </li>
                </a>

                <li class="nav-item dropdown">
                    <button class="btn dropdown-toggle me-0 nav-item" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        GALLERY
                    </button>
                    <ul class="dropdown-menu dropdown-menu-dark">
                        <li><a class="dropdown-item text-center" href="#">Action</a></li>
                        <li><a class="dropdown-item text-center" href="#">Another action</a></li>
                        <li><a class="dropdown-item text-center" href="#">Something else here</a></li>
                    </ul>
                </li>

            </ul>

            <form class="navbar-left navbar-right navbar-form nav-search md-3 m-0 " action="">
                <div class="input-group">
                    <input type="text" placeholder="Search ..." class="form-control px-5">
                    <button class="btn btn-danger " type="button">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </form>
            
            <ul class="p-0">

                <div class="col-md-12 row container-fluid m-1 p-0">
                    <div class="col-md-4 text-center">
                        <a href="#" class="btn-tag btn-rounded text-danger" data-mdb-close="true" style="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-bell  mt-3" viewBox="0 0 16 16">
                                <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z" />
                            </svg>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <button class="btn btn-sm pt-1 mt-3" style="background-color: #993339;">
                            <a class="text-light " href="#"> Sign in</a>
                        </button>

                    </div>
                    <div class="col-md-4">
                        <button class="btn btn-sm pt-1 mt-3 me-5" style="background-color: #cc0040;">
                            <a class="text-light" href="#">Sign Up</a>
                        </button>
                    </div>
                </div>
            </ul>
        </div>
    </div>
</nav>