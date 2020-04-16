<hr>

<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a class="navbar-brand d-flex"  href="{{ url('/') }}">
    <div><img src="/svg/logo.svg" style="height: 20px; border-right: 1px solid #ffffff;" class="pr-3"></div>
    <div class="pl-3">CodeGram</div>
    
</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
      
      </ul>
      <ul class="nav navbar-nav">
        
  
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
       
          
        </li>
      </ul>
      {{-- <ul class="nav navbar-nav navbar-right">
        <li><a href="/posts/create">Created Post</a></li>
      </ul> --}}
      <ul class="navbar-nav ml-auto">
        <!-- Authentication Links -->
        @guest
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
            @endif
        @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->username }} <span class="caret"></span>
                </a>
  
                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                  {{-- <li><a href="/home">Dashboard</a></li> --}}
                  
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                       
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                        
                    </a>
  
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                  </ul>
            </li>
        @endguest
    </ul>
      
    </div>
  </nav>
  
  
     <main class="py-4">
    </main>