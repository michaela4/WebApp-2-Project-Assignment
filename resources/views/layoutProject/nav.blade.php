<!-- Navigation -->
    <nav class="navbar fixed-top navbar-toggleable-md navbar-inverse bg-inverse">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarExample" aria-controls="navbarExample" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="container">
            <a class="navbar-brand" href="/">deCoders</a>
            <div class="collapse navbar-collapse" id="navbarExample">

                <ul class="navbar-nav ml-auto">
                    @if (Route::has('login'))
                        <li class="nav-item">
                            @if (Auth::check())
                                <a class="nav-link" href="/">Home</a>
                        </li>
                            @else
                        <li class="nav-item">
                                <a class="nav-link" href="/log">Login</a>
                        </li>
                        <li class="nav-item">
                                <a class="nav-link" href="/registerUser">Register</a>
                        </li>
                             @endif
                       
                    @endif

                    <li class="nav-item">
                        <a class="nav-link" href="/blogList">Blog List</a>
                    </li>
                
                    @if (Auth::check())
                    <li class="nav-item">
                        <a class="nav-link" href="/bye">Logout</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">{{ Auth::user()->name }}</a>
                    </li>
                    @endif
                    
                </ul>
            </div>
        </div>
    </nav>