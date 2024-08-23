<header class="header">
        <div class="container-fluid px-lg-5">
            <!-- nav -->
            <nav class="py-4">
                <div id="logo">
                    <h1> <a href="/"><span class="fa fa-scribd" aria-hidden="true"></span>tella</a></h1>
                </div>

                <label for="drop" class="toggle">Menu</label>
                <input type="checkbox" id="drop" />
                <ul class="menu mt-2">
                    <li><a href="/">Home</a></li>
                    <li><a href="/#about">About</a></li>
                    <li><a href="/cart">Cart</a></li>
                    {{-- <li><a href="contact.html">Contact</a></li> --}}
                    @auth
                        <li class="{{ Str::wordCount(Auth::user()->name) <= 1 ? 'mr-5 pr-5' : '' }}">
                            <!-- First Tier Drop Down -->
                            <label for="drop-2" class="toggle">
                                {{ Auth::user()->name }} <span class="fa fa-angle-down" aria-hidden="true"></span>
                            </label>
                            <a href="#">{{ Auth::user()->name }} <span class="fa fa-angle-down"
                                    aria-hidden="true"></span></a>
                            <input type="checkbox" id="drop-2" />
                            <ul>
                                <li><a href="/history">History</a></li>
                                <li><a href="/logout">Sign Out</a></li>
                            </ul>
                        </li>
                    @else
                        <li><a href="/sign-in">Sign In</a></li>
                    @endauth
                </ul>
            </nav>
            <!-- //nav -->
        </div>
    </header>
