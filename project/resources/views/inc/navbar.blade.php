
<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        {{-- <div class="container"> --}}
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    <div class="nav-item" style="margin-top: 6px; margin-right: -10px;">
                        @if (Auth::user()->id == 1)
                            <a class="nav-link" href="{{ route('students.index') }}"><i class="fa fa-user-circle"></i></a>
                        @else
                            <a class="nav-link" href="{{ route('professors.index') }}"><i class="fa fa-user-circle"></i></a>
                        @endif
                    </div>

                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <b>{{ Auth::user()->surname }} {{Auth::user()->name}}</b> <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            @if (Auth::user()->id == 1)
                                <a class="dropdown-item" href="{{ route('students.edit', ['student' => Auth::user()->id] ) }}"><i class="fa fa-user-o"></i> Edit Profile</a>  
                            @else
                                <a class="dropdown-item" href="{{ route('professors.edit', ['professor' => Auth::user()->id] ) }}"><i class="fa fa-user-o"></i> Edit Profile</a>
                            @endif
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                <i class="fa fa-sign-out "></i>
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                        
                    </li>
                </ul>
            </div>
        {{-- </div> --}}
    </nav>