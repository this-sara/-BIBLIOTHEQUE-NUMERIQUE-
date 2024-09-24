<div class="main-wrapper">
    <div class="header">
        <div class="header-left">
            <a href="index.html" class="logo"><span class="logoclass">BIBLIO</span> </a>
            {{-- <a href="index.html" class="logo logo-small"> </a> --}}
        </div>
        <a href="javascript:void(0);" id="toggle_btn"> <i class="fe fe-text-align-left"></i> </a>
        <a class="mobile_btn" id="mobile_btn"> <i class="fas fa-bars"></i> </a>
        <ul class="nav user-menu">
            <li class="nav-item dropdown noti-dropdown">
                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown"> <i class="fe fe-bell"></i> <span class="badge badge-pill">3</span> </a>
                <div class="dropdown-menu notifications">
                </div>
            </li>
            <li class="nav-item dropdown has-arrow">
                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown"> <span class="user-img"></span> </a>
                <div class="dropdown-menu">
                    <div class="user-header">
                        
                        <div class="user-text">
                            {{-- <form method="POST" action="{{ route('logout') }}" x-data>
                                @csrf

                                <x-dropdown-link href="{{ route('logout') }}"
                                         @click.prevent="$root.submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form> --}}
                            <form method="POST" action="{{route('logout')}}" x-data>
                                @csrf
                                <button type="submit" @click.prevent="$root.submit();">
                                    {{ __('Log Out') }}
                                </button>
                            </form>
                            
                        </div>
                    </div>
            </li>
        </ul>
        <div class="top-nav-search">
            <form>
                <input type="text" class="form-control" placeholder="Search here">
                <button class="btn" type="submit"><i class="fas fa-search"></i></button>
            </form>
        </div>
    </div>