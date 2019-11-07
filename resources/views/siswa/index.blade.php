@extends('layouts.app')

@section('content')
    @include('layouts.headers.cards')
    
    <div class="container-fluid mt--7">
        <div class="row mt-5 mb-7">
            <div class="col-12 shadow">
                <h5 id="date_time" class="text-white"></h5>
                    <div class="card ">
                        <div class="card-body row">
                        <span class="text-success col-6 mr--8">Selamat Datang orang tua dari :</span>
                        <h3 class=" col-6 ml--9"> {{Auth::user()->name}} !</h3>
                        <h3 class="mt--2 col-12">{{Auth::user()->rayon->nama_rayon}}</h3>
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