
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
                <i class="fa fa-tachometer-alt"></i>
                <span>Dashboard</span>
                </a>
                <div class="sidebar-submenu">
                <ul>
                    <li>
                    <a href="#">Dashboard 1
                    </a>
                    </li>
                    <li>
                    <a href="#">Dashboard 2</a>
                    </li>
                    <li>
                    <a href="#">Dashboard 3</a>
                    </li>
                </ul>
                </div>
            </li>
            <li class="sidebar-dropdown">
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
            </li>
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
                <span>Maps</span>
                </a>
                <div class="sidebar-submenu">
                <ul>
                    <li>
                    <a href="#">Google maps</a>
                    </li>
                    <li>
                    <a href="#">Open street map</a>
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
                <span>Documentation</span>
                </a>
            </li>
            <li>
                <a href="#">
                <i class="fa fa-calendar"></i>
                <span>Calendar</span>
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

   

