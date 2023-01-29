        <!-- header start  -->
        <header>
            <!-- topbar start  -->
                <div class="topbar-main col-12 container">
                    <div class="topbar d-flex justify-content-between">
                        <ul class="topbar-left p-0 mb-0">
                            <li><a href="{{ route('return') }}" class="top-l-link">Return</a></li>
                            <li><a href="{{ route('terms') }}" class="top-l-link">Terms</a></li>
                            <li><a href="{{ route('faq') }}" class="top-l-link">FAQS</a></li>
                        </ul>
                        <div class="topbar-right">
                            <ul class="topbar-right me-1 mb-0">
                                <li><a href="{{ route('compare') }}" class="top-r-link"><i class="fas fa-random"></i><span class="badge badge-pill">1</span> <span class="compare">Compare</span></a></li>
                                <li><a href="{{ route('wishlist') }}" class="top-r-link"><i class="far fa-heart"></i><span class="badge badge-pill">1</span> <span class="compare">Wishlist</span></a></li>
                                <li><a href="#" class="top-r-link">Login/Register</a></li>
                            </ul>
                        </div>
                     </div>
                </div>
            <!-- topbar end  -->
            <!-- navbar start  -->
            <div class="manubar">
                <div class="container-fluid">
                    <ul class="navbar-inner col-12 mb-0 p0">
                        <li class="menu-bar d-block d-md-block d-lg-none">
                            <button id="menu-toggler" class="menu-toggler">
                                <i class="fas fa-bars"></i> <span>MENU</span>
                            </button>
                        </li>
                        <li class="navbar-brand">
                            <a href="/">
                                <img src="assets/images/logo/adada.png" alt="Logo" width="80" class="p-2">
                            </a>
                        </li>
                        <li class="menu-items-container d-none d-md-none d-lg-block">
                            <ul class="d-flex menu-items">
                                <li class="nav-item">
                                    <a href="{{ route('home') }}" class="nav-link active">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('shop') }}" class="nav-link">Shop</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('flash.sell') }}" class="nav-link">Flash Sell</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('about.us') }}" class="nav-link">About Us</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('contact.us') }}" class="nav-link">Contact Us</a>
                                </li>
                            </ul>
                        </li>
                        <li class="cart d-none d-md-none d-lg-block">
                            <a href="{{ route('cartlist') }}">
                                <span class="menu-cart-icon"><i class="fas fa-shopping-cart"></i></span>
                                <span><span>0</span> items</span>
                            </a>
                        </li>
                        <li class="cart-sm d-block d-md-block d-lg-none">
                            <a href="{{ route('cartlist') }}">
                                <i class="fas fa-shopping-bag"></i><span class="badge badge-pill">1</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- navbar end  -->
            <div class="search-bar">
                <div class="container-fluid">
                    <ul class="searchbar-inner col-12">
                        <li class="dpdown cat-dp-main d-none d-md-none d-lg-block">
                            <button class="cat-dp">
                                <span><i class="fas fa-bars"></i> <span style="font-size: 14px; font-weight: 600;">BROWSE CATEGORIES</span></span><i class="fas fa-angle-down"></i>
                            </button>
                            <!-- dropdown  -->
                            <div class="search-cat-dp-hover">
                                <ul>
                                    @foreach(\Cache::get('categories') as $category)
                                    <li class="nav-item">
                                        <a href="{{ route('product.category', ['id'=>$category['id']]) }}" class="nav-link">{{ $category['name'] }}</a>
                                    </li>
                                    @endforeach
                                    
                                </ul>
                            </div>
                        <!-- dropdown  -->
                        </li>
                        
                        <li class="search-box ps-lg-3">
                            <input type="text" class="search-input" placeholder="Product search here.."
                            onkeypress="handle(event)">
                            <div class="dpdown d-none d-md-none d-lg-block">
                                <button class="search-dp ps-3 pe-3">
                                    <span class="pe-3">Search Category</span> <i class="fas fa-angle-down"></i>
                                </button>
                                    <!-- dropdown  -->
                                        <div class="search-cat-dp">
                                            <ul>
                                                @foreach(\Cache::get('categories') as $category)
                                                <li class="nav-item">
                                                    <a href="{{ route('product.category', ['id'=>$category['id']]) }}" class="nav-link">{{ $category['name'] }}</a>
                                                </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    <!-- dropdown  -->
                            </div>
                            <button class="search-submit" type="button" onclick="searchItem()">
                                <i class="fas fa-search"></i>
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- sidebar start  -->
            <div class="sidebar-main">
                <div class="m-row">
                    <div class="mobile-sidebar collapsed-left-open">
                        <form action="#" class="mobile-sidebar-form">
                        <input type="text" class="msf-input" placeholder="Product search here..">
                            <button type="button" onclick="mobileSearch()"><i class="fas fa-search"></i></button>
                        </form>
                        <div class="m-sidebar-tab-container col-12">
                            <div class="row mst-row col-12 m-0 p-0">
                                <div class="col-6 mst-item mst-active" id="mst-menu">
                                    menu
                                </div>
                                <div class="col-6 mst-item" id="mst-category">
                                    Categories
                                </div>  
                            </div>
                            <ul class="navbar-nav m-menu-dp">
                                <li class="nav-item m-menu-active"><a href="{{ route('home') }}" class="nav-link">Home</a></li>
                                <li class="nav-item"><a href="{{ route('shop') }}" class="nav-link">Shop</a></li>
                                <li class="nav-item"><a href="{{ route('flash.sell') }}" class="nav-link">Flash Sell</a></li>
                                <li class="nav-item"><a href="{{ route('about.us') }}" class="nav-link">About Us</a></li>
                                <li class="nav-item"><a href="{{ route('contact.us') }}" class="nav-link">Contact Us</a></li>
                            </ul>
                            <ul class="navbar-nav m-cat-dp" style="display: none;">
                                @foreach(\Cache::get('categories') as $category)
                                <li class="nav-item m-cat-active">
                                    <a href="{{ route('product.category', ['id'=>$category['id']]) }}" class="nav-link">{{ $category['name'] }}</a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="overlay-sidebar"></div>
                </div>
            </div>
        <!-- sidebar end  -->
        </header>
        <!-- header end  -->
        <div class="manubar" id="navbar">
            <div class="container-fluid">
                <ul class="navbar-inner col-12 mb-0">
                    <li class="menu-bar d-block d-md-block d-lg-none">
                        <button id="menu-toggler" class="menu-toggler">
                            <i class="fas fa-bars"></i> <span>MENU</span>
                        </button>
                    </li>
                    <li class="navbar-brand">
                        <a href="/">
                            <img src="assets/images/logo/adada.png" alt="Logo" width="80">
                        </a>
                    </li>
                    <li class="menu-items-container d-none d-md-none d-lg-block">
                        <ul class="d-flex menu-items">
                            <li class="nav-item">
                                <a href="/{{ route('home') }}" class="nav-link active">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('shop') }}" class="nav-link">Shop</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('flash.sell') }}" class="nav-link">Flash Sell</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('about.us') }}" class="nav-link">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('contact.us') }}" class="nav-link">Contact Us</a>
                            </li>
                        </ul>
                    </li>
                    <li class="cart d-none d-md-none d-lg-block">
                        <a href="#">
                            <span class="menu-cart-icon"><i class="fas fa-shopping-cart"></i></span>
                            <span><span>0</span> items</span>
                        </a>
                    </li>
                    <li class="cart-sm d-block d-md-block d-lg-none">
                        <a href="#">
                            <i class="fas fa-shopping-bag"></i><span class="badge badge-pill">1</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <script>
            function handle(e)
            {
                let query = e.target.value;
                if(e.keyCode === 13 && query.length > 1)
                {
                    window.location.href = "product_search?query="+query;
                }
            }

            function searchItem()
            {
                let query = document.querySelector('.search-input').value;
                if(query.length > 1)
                {
                    window.location.href = "product_search?query="+query;
                }
            }            
            
            function mobileSearch()
            {
                let query = document.querySelector('.msf-input').value;
                if(query.length > 1)
                {
                    window.location.href = "product_search?query="+query;
                }
            }
        </script>