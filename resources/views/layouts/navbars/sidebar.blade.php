<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Brand -->
        <a class="navbar-brand pt-0 row" href="{{ route('home') }}">
            <img src="{{ asset('argon') }}/img/brand/blue.png" class="navbar-brand-img float-left" alt="...">
            <h4 class="float-right mt-1 ml-2">TATA USAHA WIKRAMA</h4>
        </a>
        <!-- User -->
        <ul class="nav align-items-center d-md-none">
            <li class="nav-item dropdown">
                <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="media align-items-center">
                        <small><i class="ni ni-circle-08"></i></small>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                    <div class=" dropdown-header noti-title">
                        <h6 class="text-overflow m-0">Welcome!, {{ Auth::user()->name}}</h6>
                    </div>
                    <div class="dropdown-divider"></div>
                    <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        <i class="ni ni-user-run"></i>
                        <span>{{ __('Logout') }}</span>
                    </a>
                </div>
            </li>
        </ul>
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
            <!-- Collapse header -->
            <div class="navbar-collapse-header d-md-none">
                <div class="row">
                    <div class="col-6 collapse-brand">
                        <a href="{{ route('home') }}">
                            <img src="{{ asset('argon') }}/img/brand/blue.png">
                        </a>
                    </div>
                    <div class="col-6 collapse-close">
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Form -->
            <form class="mt-4 mb-3 d-md-none">
                <div class="input-group input-group-rounded input-group-merge">
                    <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="{{ __('Search') }}" aria-label="Search">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <span class="fa fa-search"></span>
                        </div>
                    </div>
                </div>
            </form>
            <!-- Navigation -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <h5 id="date_time" class="text-primary ml-4 mr-2 mt--2"></h5>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">
                        <i class="ni ni-tv-2 text-primary"></i> {{ __('Dashboard') }}
                    </a>
                </li>
                {{-- sidebar operator --}}
                @if(in_array(auth()->user()->role,['operator']))
                <li class="nav-item">
                    <a class="nav-link" href="#navbar-examples" data-toggle="collapse" role="button" aria-controls="navbar-examples">
                        <i class="ni ni-sound-wave text-danger"></i>
                        <span class="nav-link-text" >{{ __('Data Management') }}</span>
                    </a>
                    <div class="collapse" id="navbar-examples">
                        <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('rayon.index') }}">
                                        {{ __('Tambah Data Rayon') }}
                                    </a>
                                </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('siswa.index') }}">
                                    {{ __('Tambah Data Siswa') }}
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                @Endif

                {{-- sidebar bendahara --}}
                @if(in_array(auth()->user()->role,['bendahara']))
                <li class="nav-item">
                    <a class="nav-link" href="#navbar-examples" data-toggle="collapse" role="button" aria-controls="navbar-examples">
                        <i class="ni ni-credit-card text-success"></i>
                        <span class="nav-link-text" >{{ __('Data Management') }}</span>
                    </a>
                    <div class="collapse " id="navbar-examples">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('input.index') }}">
                                    {{ __('Input Data Tunggakan') }}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('input.data') }}">
                                    {{ __('Data Tunggakan') }}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('input.create') }}">
                                    {{ __('History') }}
                                </a>
                            </li>
                        </ul>
                    </div>
                @endif

                {{-- sidebar siswa --}}
                @if(in_array(auth()->user()->role,['siswa']))
                <li class="nav-item">
                        <a class="nav-link" href="{{ route('beranda.create') }}">
                            <i class="ni ni-collection text-green"></i> {{ __('Lihat Data ') }}
                        </a>
                    </li>
                @endif

                {{-- sidebar master --}}
                @if(in_array(auth()->user()->role,['master']))
                <li class="nav-item">
                        <a class="nav-link" href="{{ route('lihat.index') }}">
                            <i class="ni ni-collection text-green"></i> {{ __('Lihat Data ') }}
                        </a>
                    </li>
                @endif

                {{-- sidebar pemimbing --}}
                @if(in_array(auth()->user()->role,['pembimbing']))
                <li class="nav-item">
                    <a class="nav-link" href="{{route('data.show',Auth::user()->rayon_id)}}">
                        <i class="ni ni-collection text-green"></i>
                        <span class="nav-link-text">{{ __('Lihat Data') }}</span>
                    </a>
                </li>
                @endif
            </ul>
        </div>
    </div>
</nav>