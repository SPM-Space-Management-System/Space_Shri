<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="func-link" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="func-link" href="#">News Room</a>
          </li>
          <li class="nav-item">
            <a class="func-link" href="#">Fly with Rocket</a>
          </li>
          <li class="nav-item">
            <a class="func-link" href="{{ route('mhomeu') }}">Operations and Research</a>
          </li>
          <li class="nav-item">
            <a class="func-link" href="#">Jobs & Career</a>
          </li>
          
          @if (Auth::user())
          
          <form method="POST" action="{{ route('logout') }}" x-data>
            @csrf
            <li class="nav-item">
            <x-jet-dropdown-link  class="func-link" style="margin-left: 600px" href="{{ route('logout') }}"
                     @click.prevent="$root.submit();">
                {{ __('Log Out') }}
            </x-jet-dropdown-link > </li>
        </form>
          @else
          <li class="nav-item">
            <a class="func-link" href="{{ route('login') }}" style="margin-left: 560px;">Login</a>
          </li>

          <li class="nav-item">
            <a class="func-link" href="{{ route('register') }}" style="margin-left: 10px;">Register</a>
          </li>
          @endif
         
      
        </ul>
      </div>
    </div>
  </nav> 
 

