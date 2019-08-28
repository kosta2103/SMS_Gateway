
    <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
        <i class="fas fa-bars"></i>
    </a>
    <nav id="sidebar" class="sidebar-wrapper">
        <div class="sidebar-content">
        <div class="sidebar-brand">
            <a href="http://fink.rs/">Fakultet inženjerskih nauka</a>
            <div id="close-sidebar">
            <i class="fas fa-times"></i>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul>
            <li class="header-menu">
                <span>General</span>
            </li>
            <li class="sidebar-dropdown">
                <a href="#">
                <i class="fas fa-book"></i>
                <span>Predmeti</span>
                </a>
                <div class="sidebar-submenu">
                    <ul>
                        <li>
                            <a href="{{ route('students.subjects', ['student' => Auth::user()->id]) }}">Upisani predmeti</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="sidebar-dropdown">
                <a href="#">
                <i class="fas fa-clipboard"></i>                
                <span>Ispiti</span>
                </a>
                <div class="sidebar-submenu">
                <ul>
                    <li>
                    <a href="{{ route('students.passedExams', ['student' => Auth::user()->id]) }}">Položeni ispiti</a>
                    </li>
                    <li>
                    <a href="{{ route('students.reportedExams', ['student' => Auth::user()->id]) }}">Prijavljivani ispiti po rokovima</a>
                    </li>
                </ul>
                </div>
            </li>
            <!-- <li class="sidebar-dropdown">
                <a href="#">
                <i class="fa fa-shopping-cart"></i>
                <span>E-commerce</span>
                </a>
                <div class="sidebar-submenu">
                <ul>
                    <li>
                    <a href="#">Products

                    </a>
                    </li>
                    <li>
                    <a href="#">Orders</a>
                    </li>
                    <li>
                    <a href="#">Credit cart</a>
                    </li>
                </ul>
                </div>
            </li>
            <li class="sidebar-dropdown">
                <a href="#">
                <i class="far fa-gem"></i>
                <span>Components</span>
                </a>
                <div class="sidebar-submenu">
                <ul>
                    <li>
                    <a href="#">General</a>
                    </li>
                    <li>
                    <a href="#">Panels</a>
                    </li>
                    <li>
                    <a href="#">Tables</a>
                    </li>
                    <li>
                    <a href="#">Icons</a>
                    </li>
                    <li>
                    <a href="#">Forms</a>
                    </li>
                </ul>
                </div>
            </li> -->
            <li class="sidebar-dropdown">
                <a href="#">
                <i class="fa fa-chart-line"></i>
                <span>Charts</span>
                </a>
                <div class="sidebar-submenu">
                <ul>
                    <li>
                    <a href="#">Pie chart</a>
                    </li>
                    <li>
                    <a href="#">Line chart</a>
                    </li>
                    <li>
                    <a href="#">Bar chart</a>
                    </li>
                    <li>
                    <a href="#">Histogram</a>
                    </li>
                </ul>
                </div>
            </li>
            <li class="sidebar-dropdown">
                <a href="#">
                <i class="fa fa-globe"></i>
                <span>Mape</span>
                </a>
                <div class="sidebar-submenu">
                <ul>
                    <li>
                    <a href="https://www.google.com/maps/place/%D0%A4%D0%B0%D0%BA%D1%83%D0%BB%D1%82%D0%B5%D1%82+%D0%B8%D0%BD%D0%B6%D0%B5%D1%9A%D0%B5%D1%80%D1%81%D0%BA%D0%B8%D1%85+%D0%BD%D0%B0%D1%83%D0%BA%D0%B0+%D0%A3%D0%BD%D0%B8%D0%B2%D0%B5%D1%80%D0%B7%D0%B8%D1%82%D0%B5%D1%82%D0%B0+%D1%83+%D0%9A%D1%80%D0%B0%D0%B3%D1%83%D1%98%D0%B5%D0%B2%D1%86%D1%83/@44.0192328,20.9058266,17.12z/data=!4m13!1m7!3m6!1s0x4757213a54f2bd8b:0xfd57c5227959dfa5!2sSestre+Janji%C4%87,+Kragujevac,+Serbia!3b1!8m2!3d44.0174881!4d20.9063822!3m4!1s0x0:0x9acc30ed949db9b7!8m2!3d44.0189555!4d20.9054321?hl=en-US">Google maps</a>
                    </li>
                    <li>
                    <a href="https://www.google.com/maps/@44.0184894,20.9050765,3a,60y,5.95h,90.48t/data=!3m6!1e1!3m4!1sZuqCEwOSOKxuzyebcKsG4A!2e0!7i13312!8i6656?hl=en-US">Open street map</a>
                    </li>
                </ul>
                </div>
            </li>
            <li class="header-menu">
                <span>Extra</span>
            </li>
            <li>
                <a href="#">
                <i class="fa fa-book"></i>
                <span>Dokumentacija</span>
                </a>
            </li>
            <li>
                <a href="{{ route('calendar', ['student' => Auth::user()->id]) }}">
                <i class="fa fa-calendar"></i>
                <span>Kalendar</span>
                </a>
            </li>
            <li>
                <a href="#">
                <i class="fa fa-folder"></i>
                <span>Examples</span>
                </a>
            </li>
            </ul>
        </div>
        <!-- sidebar-menu  -->
        </div>
        <!-- sidebar-content  -->
        <div class="sidebar-footer">
            {{-- <div class="sidebar-brand">
                <a  href="{{ route('logout') }}"
                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                    <i class="fa fa-sign-out "></i>
                    <span>{{ __('Logout') }}</span>
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>   --}}
        </div>
    </nav> 


   

