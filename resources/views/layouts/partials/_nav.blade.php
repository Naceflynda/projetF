<nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
  <a class="navbar-brand" href="#">meow</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarCollapse">
    <ul class="navbar-nav mr-auto">
      
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('contact_path') }}">CONTACT</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('shop.index') }}">SHOP</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#"> ABOUT</a>
      </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
         
          @guest
          <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">LOGIN</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">SIGN UP</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="{{ route('cart.index') }}">CART <span class="cart-count">
            @if(Cart::instance('default')->count() >0)
            <span>{{Cart::instance('default')->count()}}</span></span></a>
            @endif
          </li>
          @else
            <li class="nav-item dropdown">
                <li>
                    <a  id="navbarDropdown" class="nav-link dropdown-toggle" href="{{ route('Users.edit') }}">{{ Auth::user()->full_name}}</a>
                </li>
                <li>
                    <a class="nav-link" aria-labelledby="navbarDropdown" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                        LOGOUT
                    </a>
                    <li class="nav-item active">
                      <a class="nav-link" href="{{ route('cart.index') }}">CART<span class="cart-count">
                      @if(Cart::instance('default')->count() >0)
                      <span>{{Cart::instance('default')->count()}}</span></span></a>
                      @endif
                    </li>
                </li>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
              
            </li>
            
          @endguest
      
    </ul>
  </div>
</nav>