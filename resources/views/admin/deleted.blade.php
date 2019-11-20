@extends('layouts.app',['title'=>'History'])

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
        <div class="container row mt-2">
            <div class="col-12 justify-content-center">
                    <div class="card shadow">
                        <div class="card-header boder-0 bg-gradient-green">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h3 class="mb-0 text-white">Data yang terhapus</h3>
                                </div>
                                @if($deleted->isEmpty())
                                <div class="alert bg-warning col-11 ml-3 mt-4 mb-5 text-white">
                                    Tidak ada data
                                </div>
                                @else
                                <div class="col text-right" {{ isset($deleted) ? '' : 'hidden' }}>
                                    <a href="{{route('input.destroy.all')}}" class="btn btn-danger btn-sm" >Hapus Semua</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body col-12 table-responsive">
                            <table id="myTable" class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama</th>
                                        <th colspan="2" class="text-center">virtual account</th>
                                        <th colspan="2" class="text-center">Tunai</th>
                                        <th scope="col">DSP</th>
                                        <th scope="col">Sertifikat</th>
                                        <th scope="col">Pondokan</th>
                                        <th scope="col">Perpisahan</th>
                                        <th scope="col">Dana SMT. Ganjil</th>
                                        <th scope="col">Dana SMT. Genap</th>
                                        <th scope="col">Kunjungan Industri</th>
                                        <th scope="col">BPJS</th>
                                        <th scope="col">TOEIC</th>
                                        <th scope="col">TOTAL</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($deleted as $u)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$u->user->name}}</td>
                                        <td>{{$u->va_jumlah}}</td>
                                        <td>{{$u->va_bulan}}</td>
                                        <td>{{$u->tunai_jumlah}}</td>
                                        <td>{{$u->tunai_bulan}}</td>
                                        <td>{{$u->dsp}}</td>
                                        <td>{{$u->sertifikat}}</td>
                                        <td>{{$u->pondokan}}</td>
                                        <td>{{$u->perpisahan}}</td>
                                        <td>{{$u->dana_ganjil}}</td>
                                        <td>{{$u->dana_genap}}</td>
                                        <td>{{$u->kunjungan_industri}}</td>
                                        <td>{{$u->bpjs}}</td>
                                        <td>{{$u->toeic}}</td>
                                        <td>{{$u->total}}</td>
                                        <td><a href="{{route('input.edit',$u->id)}}" class="btn btn-warning mb-3 btn-sm">Restore</a>
                                        <a href="{{route('input.destroy',$u->id)}}" class="btn btn-danger mb-3 btn-sm">Hapus</a></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            @endif
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