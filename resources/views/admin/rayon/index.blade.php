@extends('layouts.app')

@section('content')
    @include('layouts.headers.cards')
    
    <div class="container-fluid mt--7">
        <div class="col-md-12">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
        </div>
        <div class="row mt-5 mb-7">
            <div class="col-10 ml-6 mb-5 mb-xl-0">
                <h5 id="date_time" class="text-white"></h5>
                <div class="card shadow">
                    <div class="card-header">
                        <h5>Input Data Rayon</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{route('rayon.store')}}" method="post">
                            @csrf
                            <h4 class="mb-2">Data rayon</h4>
                            <div class="form-group ">
                                <input type="text" class="form-control form-control-alternative" placeholder="Nama Rayon" name="nama_rayon">
                            </div>
                            <div class="form-group ">
                                <input type="text" class="form-control form-control-alternative" placeholder="Nama Pembimbing" name="pembimbing">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success col-12">Simpan</button>
                            </div>
                        </form>
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