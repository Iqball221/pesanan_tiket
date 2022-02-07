                <ul class="nav navbar-nav navbar-left navbar-top-links">
                    <li><a href="#"><i class="fa fa-home fa-fw"></i> WEBSITE</a></li>
                </ul>

                <ul class="nav navbar-nav navbar-center navbar-top-links">
                    <li><a href="#">PEMESANAN TIKET KERETA PULAU JAWA</a></li>
                </ul>

                <ul class="nav navbar-right navbar-top-links">
                    <li class="dropdown navbar-inverse">
                        
                            
                            <li><a class = "dropdown-item" href="{{ route('logout')}}"
                            onclick = "event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            <i class = "fa fa-sign-out fa-fw"></i>Logout</a>
                        </li>
                        <form id = "logout-form" action="{{ route('logout') }}" method = "POST" class = "d-none">
                            @csrf
                        </form>

                    </li>
                </ul>