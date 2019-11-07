@extends('layouts.app')

@section('content')
    @include('layouts.headers.cards')
    
    <div class="container-fluid mt--7">
        <div class="row justify-content-center">
            <div class="col-12 mb-5 mb-xl-0">
            </div>
        </div>
        <div class=" container row mt-5 mb-7">
            <div class="col-12 ">
                <h5 id="date_time" class="text-white"></h5>
                    <div class="card shadow">
                        <h5 class="mt-3 ml-3">Tunggakan</h5>
                        @if(Auth::user()->tunggakan->isEmpty())
                            <div class="alert bg-success col-10 ml-6 mt-4 mb-5 text-white">
                                Lunas
                            </div>
                        @else
                        <div class="card-body col-12">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>virtual account</th>
                                        <td>{{Auth::user()->tunggakan->first()->va_jumlah}}</td>
                                        <td>{{Auth::user()->tunggakan->first()->va_bulan}} bulan</td>
                                    <tr>
                                        <th>Tunai</th>
                                        <td>{{Auth::user()->tunggakan->first()->tunai_jumlah}}</td>
                                        <td>{{Auth::user()->tunggakan->first()->tunai_bulan}} bulan</td>
                                    </tr>
                                    <tr>
                                        <th >DSP</th>
                                        <td colspan="2">{{Auth::user()->tunggakan->first()->dsp}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="col">Sertifikat</th>
                                        <td colspan="2">{{Auth::user()->tunggakan->first()->sertifikat}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="col">Pondokan</th>
                                        <td colspan="2">{{Auth::user()->tunggakan->first()->pondokan}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="col">Perpisahan</th>
                                        <td colspan="2">{{Auth::user()->tunggakan->first()->perpisahan}}</td>
                                    </tr>
                                    <tr>
                                        <th >Dana SMT. Ganjil</th>
                                        <td colspan="2">{{Auth::user()->tunggakan->first()->dana_ganjil}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="col">Dana SMT. Genap</th>
                                        <td colspan="2">{{Auth::user()->tunggakan->first()->dana_genap}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="col">Kunjungan Industri</th>
                                        <td colspan="2">{{Auth::user()->tunggakan->first()->kunjungan_industri}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="col">BPJS</th>
                                        <td colspan="2">{{Auth::user()->tunggakan->first()->bpjs}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="col">TOEIC</th>
                                        <td colspan="2">{{Auth::user()->tunggakan->first()->toeic}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="col">TOTAL</th>
                                        <td colspan="2">{{Auth::user()->tunggakan->first()->total}}</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        
                                    </tr>
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