@extends('layouts.app',['title'=>'Welcome!'])

@section('content')
    @include('layouts.headers.cards')
    
    <div class="container-fluid mt--7">
        <div class="row mt-5 mb-7">
            <div class="col-12 shadow">
                <h5 id="date_time" class="text-white"></h5>
                    <div class="card ">
                        <div class="card-header bg-gradient-green">
                            <h3 class="text-white">Selamat Datang orang tua dari :</h3>
                        </div>
                        <div class="card-body">
                        <h3 class="mb-0 "> {{Auth::user()->name}} </h3>
                        <h5 class="mb-0">{{Auth::user()->rayon->nama_rayon}}</h5>
                        </div>
                    </div>
            </div>
        </div>

        @include('layouts.footers.auth')
    </div>
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush