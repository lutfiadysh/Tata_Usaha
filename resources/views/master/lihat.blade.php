@extends('layouts.app',['title'=>'Data Keseluruhan'])

@section('content')
    @include('layouts.headers.cards')
    
    <div class="container-fluid mt--7">
        <div class="row justify-content-center">
            <div class="col-12 mb-5 mb-xl-0">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            </div>
        </div>
        <div class="container  mt-2">
            <div class="col-12 justify-content-center">
                    <div class="card shadow mb-9">
                        <div class="card-header boder-0 bg-gradient-green">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h3 class="mb-0 text-white float-left">Data Tunggakan</h3>
                                    <a href="{{route('lihat.create')}}" class="btn btn-primary btn-sm float-right">Lihat rincian</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h2>Total : <span class="text-warning">Rp. {{number_format($total,2)}}</span></h2>
                        </div>
                    </div>
                </div>
            </div>
            @include('layouts.footers.auth')
        </div>
    @endsection

@push('js')
    <script>
        $(document).ready( function () {
            $('#myTable').DataTable();
        } );
    </script>
@endpush