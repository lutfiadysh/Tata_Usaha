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
                                    <h3 class="mb-0 text-white float-left">Rincian Tunggakan per-rayon</h3>
                                    <a href="{{route('softdeletes.all')}}" class="btn btn-danger btn-sm float-right">Hapus Semua</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body col-12 table-responsive">
                            <table id="myTable" class="table table-bordered none">
                                <thead>
                                    <th scope="col">#</th>
                                    <th scope="col">Rayon</th>
                                    <th scope="col">Jumlah</th>
                                    <th scope="col">action</th>
                                </thead>
                                <tbody>
                                    @foreach ($rayon as $u)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$u->nama_rayon}}</td>
                                        @if($u->tunggakan->sum("total") == 0)
                                            <td><div class="alert bg-success text-white text-center">Lunas</div></td>
                                        @else
                                        <td>Rp. {{number_format($u->tunggakan->sum("total"),2) ?? ''}}</td>
                                        @endif
                                        <td><a href="{{route('input.lihat',$u->id)}}" class="btn btn-sm btn-primary">Lihat</a></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
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