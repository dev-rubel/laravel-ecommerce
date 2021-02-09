<header>
    <!-- TOP HEADER -->
    <div id="top-header">
        <div class="container">
            <ul id="head_links" class="header-links pull-left">
                <li><a href="#"><i class="fa fa-envelope-o"></i> dpirubel@gmail.com</a></li>
            </ul>
            <ul class="header-links pull-right">
                @if(session()->has('user'))
                  <li><a style="color:white" href="{{route('user.history')}}">{{session()->get('user')->full_name}} </a></li>  
                  <li><a href="{{route('user.logout')}}"><i class="fa fa-user-o"></i> Logout</a></li>
                @else
                <li><a href="{{route('user.login')}}"><i class="fa fa-user-o"></i> Login</a></li>
                
                <li><a href="{{route('user.signup')}}"><i class="fa fa-user-o"></i> SignUp</a></li>
                @endif
                
            </ul>
        </div>
    </div>
    <!-- /TOP HEADER -->

    <!-- MAIN HEADER -->
    <div id="header">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- LOGO -->
                <div class="col-md-3">
                    <div class="header-logo">
                        <a href="{{route('user.home')}}" class="logo">
                            <img src="{{asset('img/logo.png')}}" alt="">
                        </a>
                    </div>
                </div>
                <!-- /LOGO -->

                <!-- SEARCH BAR -->
                <div class="col-md-6">
                    <div class="header-search">
                        <form action="#" method="get">
                            <div class="custom_search_top" >
                                <input class="input" style="border-radius: 40px 0px 0px 40px;" name="n" placeholder="Search here">
                                <button  class="search-btn">Search</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /SEARCH BAR -->

                <!-- ACCOUNT -->
                <div class="col-md-3 clearfix">
                    <div class="header-ctn">
                        <!-- Cart -->
                        <div  class="dropdown">
                            <a class="dropdown-toggle " id="custom_shopping_cart" href="{{route('user.cart')}}">
                                <i class="fa fa-shopping-cart"></i>
                                <span>Your Cart</span>
                            </a>

                        </div>
                        <!-- /Cart -->

                        <!-- Menu Toogle -->
                        <div class="menu-toggle pull-right">
                            <a href="#">
                                <i class="fa fa-bars"></i>
                                <span>Menu</span>
                            </a>
                        </div>
                        <!-- /Menu Toogle -->
                    </div>
                </div>
                <!-- /ACCOUNT -->
            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </div>
    <!-- /MAIN HEADER -->
</header>