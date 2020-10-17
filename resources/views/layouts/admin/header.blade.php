<div class="app-header header-shadow bg-dark header-text-light">

    <div class="app-header__logo">
        {{-- <div class="logo-src"></div> --}}
        <div style="color: #ffffff"> <h4> Z </h4></div>
        <div class="header__pane ml-auto">
            <div>
                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>

    <div class="app-header__mobile-menu">
        <div>
            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
        </div>
    </div>

    <div class="app-header__menu">
        <span>
            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                <span class="btn-icon-wrapper">
                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                </span>
            </button>
        </span>
    </div> 

    
    <div class="app-header__content">

        <div class="app-header-left">
            {{-- <div class="search-wrapper">
                <div class="input-holder">
                    <input type="text" class="search-input" placeholder="Type to search">
                    <button class="search-icon"><span></span></button>
                </div>
                <button class="close"></button>
            </div> --}}
            {{-- <a href="javascript:void(0);" class="nav-link">
                <i class="nav-link-icon fa fa-cog"></i>
                Ajustes
            </a> --}}
            <ul class="header-menu nav">
                {{-- <li class="nav-item">
                    <a href="javascript:void(0);" class="nav-link">
                        <i class="nav-link-icon fa fa-database"> </i>
                        Statistics
                    </a>
                </li>
                <li class="btn-group nav-item">
                    <a href="javascript:void(0);" class="nav-link">
                        <i class="nav-link-icon fa fa-edit"></i>
                        Projects
                    </a>
                </li> --}}
                {{-- <li class="dropdown nav-item">
                    <a href="javascript:void(0);" class="nav-link">
                        <i class="nav-link-icon fa fa-cog"></i>
                        Ajustes
                    </a>
                </li> --}}
            </ul>        
        </div> {{-- end header left --}}

        <div class="app-header-right">
            <div class="header-btn-lg pr-0">
                <div class="widget-content p-0">
                    <div class="widget-content-wrapper">
                        <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn">
                        <div class="widget-content-left   header-user-info">
                            <div class="widget-heading">
                                {{ Auth::user()->name }}
                            </div>
                            <div class="widget-subheading">
                            @foreach(Auth::user()->roles()->get(); as $rol)
                            
                                {{ $rol->name }}
                            
                            @endforeach
                            </div>
                            
                        </div>
                        <div class="widget-content-right">
                            <div class="btn-group">
                                
                                    <img width="42" class="rounded-circle" src="{{ Auth::user()->getSocialAvatar() }}" alt="">
                                    <i class="fa fa-angle-down ml-2 opacity-10"></i>
                                </a>
                                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                    {{-- <button type="button" tabindex="0" class="dropdown-item">Cuenta</button>
                                    <button type="button" tabindex="0" class="dropdown-item">Ajustes</button>
                                    <h6 tabindex="-1" class="dropdown-header">Header</h6>
                                    <div tabindex="-1" class="dropdown-divider"></div> --}}
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar sesión') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                        </div>
                        
                        {{-- <div class="widget-content-right header-user-info ml-3">
                            <button type="button" class="btn-shadow p-1 btn btn-primary btn-sm show-toastr-example">
                                <i class="fa text-white fa-user pr-1 pl-1"></i>
                            </button>
                        </div> --}}
                    </div>
                </div>
            </div>        
        </div> {{-- end header right --}}

    </div> {{-- end header content --}}

</div> {{-- end header --}}