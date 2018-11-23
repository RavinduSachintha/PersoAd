<nav class="navbar navbar-expand-sm py-0 bg-dark navbar-dark fixed-top py-md-0" style="margin-left: 230px; height:70px;">

    <div class="container">
  
        <button class="navbar-toggler mt-1" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>
  
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            
              <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown " class="nav-link dropdown-toggle " style="font-size:large; margin-right:30px;" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            Admin <span class="caret"></span>
                        </a>
                        
                        <div class="dropdown-menu dropdown-menu-right bg-light" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item bg-light" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                        </div>
  
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                    </li>
            </ul>
        </div>
    </div>
  </nav>