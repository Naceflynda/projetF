<link rel="stylesheet" href="css/header.css">
<ul>
    @guest
    <li><a href="{{ route('register') }}">Sign Up</a></li>
    <li><a href="{{ route('login') }}">Login</a></li>
    @else
    <li>
        <a href="{{ route('users.edit') }}">My Account</a>
    </li>
    <li>
        <a  id="navbarDropdown" class="nav-link dropdown-toggle" href="{{ route('Users.edit') }}">{{ Auth::user()->full_name}}</a>
    </li>
    <li>
        <a class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">
            Logout
        </a>
    </li>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
    </form>
    @endguest
</ul>
