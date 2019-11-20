@extends('layouts.app',['title'=>'Welcome!'])

@section('content')
    @include('layouts.headers.cards')
    
    <div class="container-fluid mt--7">
        <div class="row justify-content-center">
            <div class="col-12 mb-5 mb-xl-0">
            </div>
        </div>
        <div class="row mt--2 mb-7">
            <div class="col-12">
                <h5 id="date_time" class="text-white mt--4"></h5>
                    <div class="card shadow">
                        <div class="card-header bg-gradient-green">
                            <h3 class="mb-0 text-white">Selamat Datang pembimbing </h3>
                        </div>
                        <div class="card-body">
                        <h2 class="mb-0">{{Auth::user()->rayon->nama_rayon}}</h2>
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
    <script>
        $(document).ready( function () {
            $('#myTable').DataTable();
        } );
    </script>
@endpush