@extends('layouts.app',['title'=>'Data Tunggakan'])

@section('content')
    @include('layouts.headers.cards')
    
    <div class="container-fluid mt--7">
        <div class="row justify-content-center">
            <div class="col-12 mb-5 mb-xl-0">
            </div>
        </div>
        <div class=" container row mt-5 mb-7">
            <div class="col-12 ">
                <h5 id="date_time" class="text-white mt--4"></h5>
                    <div class="card shadow">
                        <h5 class="mt-3 ml-3">Tunggakan Siswa Rayon : {{Auth::user()->rayon->nama_rayon}}</h5>
                        <div class="card-body col-12 table-responsive mr-2">
                            <table id="myTable" class="table table-bordered mr-2">
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
                                        <th scope="col">Tanggal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($user as $u)
                                    <tr>
                                        @if($u->tunggakan->isEmpty())
                                        @else
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$u->name}}</td>
                                        <td>{{$u->tunggakan->first()->va_jumlah}}</td>
                                        <td>{{$u->tunggakan->first()->va_bulan}}</td>
                                        <td>{{$u->tunggakan->first()->tunai_jumlah}}</td>
                                        <td>{{$u->tunggakan->first()->tunai_bulan}}</td>
                                        <td>{{$u->tunggakan->first()->dsp}}</td>
                                        <td>{{$u->tunggakan->first()->sertifikat}}</td>
                                        <td>{{$u->tunggakan->first()->pondokan}}</td>
                                        <td>{{$u->tunggakan->first()->perpisahan}}</td>
                                        <td>{{$u->tunggakan->first()->dana_ganjil}}</td>
                                        <td>{{$u->tunggakan->first()->dana_genap}}</td>
                                        <td>{{$u->tunggakan->first()->kunjungan_industri}}</td>
                                        <td>{{$u->tunggakan->first()->bpjs}}</td>
                                        <td>{{$u->tunggakan->first()->toeic}}</td>
                                        <td>{{$u->tunggakan->first()->total}}</td>
                                        <td>{{$u->tunggakan->first()->tanggal}}</td>
                                        @endif
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