<nav id="navigation">
    <!-- container -->
    <div class="container">
        <!-- responsive-nav -->
        <div id="responsive-nav">
            <!-- NAV -->
            <ul class="main-nav nav navbar-nav">
                <li class="{{Route::is('user.home') ? 'active' : ''}}"><a href="{{route('user.home')}}">Home</a></li>
                @if(Route::is('user.search'))
                    @foreach($cat as $c)
                    <li class="{{$c->id == $a ? 'active' : ''}}"><a href="{{route('user.search.cat',['id'=>$c->id])}}" >{{$c->name}}</a></li>
                    @endforeach
                    <li class="{{$a == -1  ? 'active' : ''}}"><a href="search">Browse All</a></li>
                @else
                    @foreach($cat as $c)
                    <li ><a href="{{route('user.search.cat',['id'=>$c->id])}}" >{{$c->name}}</a></li>
                    @endforeach
                    <li ><a href="{{route('user.search')}}">Browse All</a></li>
                @endif
                
            </ul>
            <!-- /NAV -->
        </div>
        <!-- /responsive-nav -->
    </div>
    <!-- /container -->
</nav>