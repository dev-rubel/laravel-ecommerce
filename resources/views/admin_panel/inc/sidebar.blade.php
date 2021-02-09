<nav class="sidebar sidebar-offcanvas" id="sidebar">
	<ul class="nav">
	    <li class="nav-item nav-profile">
	        <div class="nav-link">
	            <div class="user-wrapper">
	                <div class="profile-image">
	                    <img src="{{asset('images/faces/face1.jpg')}}" alt="profile image">
	                </div>
	                <div class="text-wrapper">
	                    <p class="profile-name">{{session()->get('admin')->name}}</p>
	                    <div>
	                        <small class="designation text-muted">Admin</small>
	                        <span class="status-indicator online"></span>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </li>
	    <li class="nav-item {{Route::is('admin.dashboard') ? 'active' : ''}}">
	        <a class="nav-link" href="{{route('admin.dashboard')}}">
	            <i class="menu-icon mdi mdi-television"></i>
	            <span class="menu-title">Dashboard</span>
	        </a>
	    </li>
	    <li class="nav-item {{Route::is('admin.products') ? 'active' : ''}}">
	        <a class="nav-link" href="{{route('admin.products')}}">
	            <i class="menu-icon mdi mdi-cart-outline"></i>
	            <span class="menu-title">Products</span>
	        </a>
	    </li>
	    <li class="nav-item {{Route::is('admin.categories') ? 'active' : ''}}">
	        <a class="nav-link" href="{{route('admin.categories')}}">
	            <i class="menu-icon mdi mdi-view-grid"></i>
	            <span class="menu-title">Categories</span>
	        </a>
	    </li>
	    <li class="nav-item">
	        <a class="nav-link" href="{{route('admin.orderManagement')}}">
	            <i class="menu-icon mdi mdi-content-paste"></i>
	            <span class="menu-title">Order Management</span>
	        </a>
	    </li>
	</ul>
</nav>