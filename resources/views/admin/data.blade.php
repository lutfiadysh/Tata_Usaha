@extends('layouts.app',['title'=>'Data Tunggakan'])

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
        <div class=" container  mt--2 mb-7">
            <div class="col-12 justify-content-center">
                    <div class="card shadow">
                        <div class="card-header bg-gradient-green">
                                <h3 class="mb-0 text-white float-left">Data Tunggakan</h3>
                        </div>
                        @if($data->isEmpty())
                            <div class="alert bg-danger justify-content-center  mt-4 mb-5 text-white">
                                Tidak ada data!
                            </div>
                        @else
                        <div class="card-body col-12 table-responsive">
                            <a href="{{route('input.destroy.all')}}" class="btn btn-danger float-right mb-2" {{ isset($deleted) ? '' : 'hidden' }}>Hapus Semua</a>
                            <table id="myTable" class="table table-bordered">
                                <thead>
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
                                        <th scope="col">ACTION</th>
                                </thead>
                                <tbody>
                                    @foreach ($data as $u)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$u->user->name}}</td>
                                        <td>Rp. {{number_format($u->va_jumlah,2)}}</td>
                                        <td>{{$u->va_bulan}} Bulan</td>
                                        <td>Rp. {{number_format($u->tunai_jumlah,2)}}</td>
                                        <td>{{$u->tunai_bulan}} Bulan</td>
                                        <td>Rp. {{number_format($u->dsp,2)}}</td>
                                        <td>Rp. {{number_format($u->sertifikat,2)}}</td>
                                        <td>{Rp. {{number_format($u->pondokan,2)}}</td>
                                        <td>Rp. {{number_format($u->perpisahan,2)}}</td>
                                        <td>Rp. {{number_format($u->dana_ganjil,2)}}</td>
                                        <td>Rp. {{number_format($u->dana_genap,2)}}</td>
                                        <td>Rp. {{number_format($u->kunjungan_industri,3)}}</td>
                                        <td>Rp. {{number_format($u->bpjs,2)}}</td>
                                        <td>Rp. {{number_format($u->toeic,2)}}</td>
                                        <td>Rp. {{number_format($u->total,2)}}</td>
                                        <td><a href="{{route('input.soft',$u->id)}}" class="btn btn-danger btn-sm">delete</a></td>
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