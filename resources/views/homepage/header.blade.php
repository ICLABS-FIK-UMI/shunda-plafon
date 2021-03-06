
<div class="container-fluid">
    <!-- NavBar Header -->
   <nav class="navbar navbar-light bg-white">
        <a class="navbar-brand" id="indonesia" href="#">
            Indonesia<img src="{{('assets/image/indonesia.png')}}" width="20" height="15" class="d-inline-block align-top" alt="">
        </a>
        <div>
            <a href="{{ url('/') }}" class="text-color-Headerfitur">Beranda</a> -
            <a href="#" class="text-color-Headerfitur">Informasi Toko</a> -
            <a href="#" class="text-color-Headerfitur">Katalok</a>
        </div>
        <div>
            {{-- <a href="{{ route('login') }}" class="text-color-Headerlogin" >Login </a> - <a href="{{ route('register') }}" class="text-color-Headerlogin">Registrasi</a> --}}
            @guest
                <a href="{{ route('login') }}" class="text-color-Headerlogin" >Login </a> -
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="text-color-Headerlogin">Registrasi</a>
                @endif
                    @else
           
                        <a href="#" class="text-color-Headerlogin">
                            {{ Auth::user()->nm_user }} <span class="caret"></span>
                        </a> -
               
                        <a class="text-color-Headerlogin" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
            @endguest
        </div>
    
    </nav>
    <!-- Image logo -->
    <nav class="navbar navbar-light bg-white">
        <img src="{{('assets/image/logo.png')}}" width="250"  class="d-inline-block align-top" alt=""> 
            <form class="form-inline my-4 my-lg-0">
                <input class="form-control" type="search" placeholder="Pencarian ..." aria-label="Search" length="200px">
                <button class="btn-cari my-2 my-sm-0 " type="submit">Cari</button>
                <img src="{{('assets/image/troli.png')}}" width="30" height="30" class="d-inline-block align-top" alt="">    
            </form>               
    </nav>

     <!-- line Header -->
    <nav class="navbar navbar-light bg-white">
        <img src="{{('assets/image/line.png')}}"  height="6" width="100%" class="d-inline-block align-top" alt=""> 
    </nav>



    
</div>
