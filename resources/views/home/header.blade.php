<header>
    <!-- header inner -->
    <div class="header">
       <div class="container">
          <div class="row">
             <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                <div class="full">
                   <div class="center-desk">
                      <div class="logo">
                         <a href="index.html"><img src="images/logo.png" alt="#" style="width: 30% " /></a>
                      </div>
                   </div>
                </div>
             </div>
             <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                <nav class="navigation navbar navbar-expand-md navbar-dark ">
                   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                   <span class="navbar-toggler-icon"></span>
                   </button>
                   <div class="collapse navbar-collapse" id="navbarsExample04">
                      <ul class="navbar-nav mr-auto">
                         <li class="nav-item active">
                            <a class="nav-link" href="">Acceuille</a>
                         </li>
                         <li class="nav-item">
                            <a class="nav-link" href="{{url('about')}}">About</a>
                         </li>
                         <li class="nav-item">
                            <a class="nav-link" href="{{url('book')}}">books</a>
                         </li>
                         <li class="nav-item">
                            <a class="nav-link" href="{{url('galle')}}">Gallery</a>
                         </li>
                         {{-- <li class="nav-item">
                            <a class="nav-link" href="blog.html">Blog</a>
                         </li> --}}
                         <li class="nav-item" style="padding-right: 10px">
                            <a class="nav-link" href="{{url('contact')}}">Contact</a>
                         </li>
                         
                        

                        @if (Route::has('login'))
                
                    @auth
                    <li class="nav-item">
                     <x-app-layout></x-app-layout>
                  </li>

                    @else
                    <li class="nav-item">
                     <a class="btn " href="{{url('login')}}">login</a>
                    </li>

                  @if (Route::has('register'))
                  <li class="nav-item">
                     <a class="btn  ml-2" href="{{url('register')}}">register</a>
                  </li>
                  @endif
                    @endauth
                
            @endif
                      </ul>
                   </div>
                </nav>
             </div>
          </div>
       </div>
    </div>
 </header>