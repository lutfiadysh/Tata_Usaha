@extends('layouts.app')

@section('content')
    @include('layouts.headers.cards')
    
    <div class="container-fluid mt--7">
        <div class="row justify-content-center">
            <div class="col-12 mb-5 mb-xl-0">
            </div>
        </div>
        <div class="row mt-5 mb-7">
            <div class="col-12 shadow">
                <h5 id="date_time" class="text-white"></h5>
                    <div class="card shadow">
                        <h5 id="date_time" class="text-white"></h5>
                        <div class="card-body">
                        <span class="text-success">Selamat Datang</span>
                        <h5>Bendahara</h5>
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