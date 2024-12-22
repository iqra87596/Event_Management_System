<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="{{ asset('images/logo.jpg') }}" alt="Event Management System" class="img-fluid" style="max-width: 80px;">
                <strong><u>Event Management System</u></strong>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link home-link" href="{{ route('home') }}"><b><u>Home</u></b></a></li>
                    <li class="nav-item"><a class="nav-link products-link" href="{{ route('products') }}"><b><u>Products</u></b></a></li>
                    <li class="nav-item"><a class="nav-link contact-link" href="{{ route('contact') }}"><b><u>Contact</u></b></a></li>
                    @guest
                        <li class="nav-item"><a class="nav-link" href="{{ route('login') }}"><b><u>Login</u></b></a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('register') }}"><b><u>Register</u></b></a></li>
                    @else
                        <li class="nav-item">
                            <form action="{{ route('logout') }}" method="POST" class="d-inline">
                                @csrf
                                <button type="submit" class="btn btn-danger btn-sm">Logout</button>
                            </form>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
</header>
