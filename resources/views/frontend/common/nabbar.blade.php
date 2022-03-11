  <nav class="navbar">
                <div class="nav_content">
                    <div class="logo">
                        <a href="{{ route('/') }}">
                            <h1>Synd<span>it</span></h1>
                        </a>
                    </div>
                    <div class="nav_extend_button" id="nav_response_btn" onclick="navappear()">
                        <a><i class="fa-solid fa-bars"></i></a>
                        <a><i class="fa-solid fa-xmark"></i></a>
                    </div>
                    <div class="nav_items">
                        <ul>
                            <li><a href="#" onclick="appear_send_form()">Send</a></li>
                            <li><a href="#" onclick="appear_request_form()">Receive</a></li>
                            <li><a href="{{ route('about') }}">About Us</a></li>
                            <li><a href="{{ route('contact') }}">Support</a></li>
                            @if (Session::get('user_id'))
                                <li><a href="{{ route('account') }}">Dashboard</a></li>
                            @endif

                        </ul>
                    </div>
                    @if (Session::get('user_login'))
                        <div class="nav_btn">
                        <button><a href="{{ route('logout') }}">Logout</a></button>
                        </div>
                    @else
                        <div class="nav_btn">
                        <button><a href="{{ route('login') }}">Login</a></button>
                        <button><a href="{{ route('login') }}">Sign up</a></button>
                        </div>
                    @endif
                </div>
            </nav>

            <div class="nav_extend" id="extend-nav">
                <ul>
                    <li><a href="#" onclick="appear_send_form()">Send</a></li>
                    <li><a href="#" onclick="appear_request_form()">Receive</a></li>
                    <li><a href="{{ route('about') }}">About Us</a></li>
                    <li><a href="{{ route('contact') }}">Support</a></li>
                    <li><a href="{{ route('account') }}">Dashboard</a></li>
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('login') }}">Signup</a></li>
                </ul>
            </div>
