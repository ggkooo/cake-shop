<div class="container">
    <header class="blog-header py-3">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="/"><i class="blog-header-logo text-dark"><span class="and">The <span class="title-orange-text">Sweet</span> Piece</span></i></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse mt-3" id="navbarSupportedContent">
                <div class="w-100 d-flex flex-column flex-lg-row justify-content-between align-items-center">
                    <div class="navbar-center order-2 order-lg-1 w-100 d-flex justify-content-center">
                        <ul class="navbar-nav d-flex flex-column flex-lg-row justify-content-center align-items-center w-100">
                            <li class="nav-item active mx-lg-3 mb-2 mb-lg-0">
                                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item mx-lg-3 mb-2 mb-lg-0">
                                <a class="nav-link" href="{{route('categories.index')}}">Category</a>
                            </li>
                            <li class="nav-item mx-lg-3 mb-2 mb-lg-0">
                                <a class="nav-link" href="{{route('products.productshop')}}">Products</a>
                            </li>
                            <li class="nav-item dropdown mx-lg-3 mb-2 mb-lg-0">
                                <a class="nav-link dropdown-toggle text-center" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Services
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{route('cart.show')}}">Your Cart</a>
                                    <a class="dropdown-item" href="{{route('aboutus')}}">About Us</a>
                                    <a class="dropdown-item" href="#">Contact Us</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Privacy Policy</a>
                                    <a class="dropdown-item" href="#">Terms & Condition</a>
                                </div>
                            </li>
                            <li class="nav-item w-100 d-block d-lg-none mt-3">
                                <div class="d-flex flex-column align-items-center w-100">
                                    <form class="form-inline mb-2">
                                        @guest()
                                            <a class="btn btn-outline-secondary w-100" href="{{route('login')}}">
                                                <i class="fas fa-user"></i>
                                            </a>
                                        @endguest
                                    </form>
                                    <form class="form-inline w-100 d-flex justify-content-center align-items-center mt-3">
                                        <input class="form-control w-75" type="search" placeholder="Search" aria-label="Search">
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="navbar-right order-1 order-lg-2 d-none d-lg-flex align-items-center mt-2 mt-lg-0">
                        <form class="form-inline d-flex flex-nowrap align-items-center mr-2" style="gap: 4px; min-width: 0;">
                            <input class="form-control" type="search" placeholder="Search" aria-label="Search" style="min-width: 80px; flex: 1 1 auto;">
                            <button class="btn btn-outline-orange d-flex align-items-center" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                        </form>
                        <form class="form-inline">
                            @auth()
                                <a class="btn btn-outline-secondary" href="#">
                                    <i class="fas fa-user"></i> Profile({{optional(auth()->user())->name}})
                                </a>
                                &nbsp;
                                <a class="btn btn-outline-secondary" href="{{route('logout')}}">
                                    <i class="fas fa-sign-out-alt"></i> Log Out
                                </a>
                            @endauth
                            @guest()
                                <a class="btn btn-outline-secondary" href="{{route('login')}}">
                                    <i class="fas fa-user"></i>
                                </a>
                            @endguest
                        </form>
                    </div>
                </div>
            </div>
        </nav>
    </header>
</div>
