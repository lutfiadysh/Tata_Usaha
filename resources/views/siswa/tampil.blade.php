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
                <h5 id="date_time" class="text-white mt--6"></h5>
                    <div class="card shadow justify-content-center">
                        <div class="card-header bg-gradient-green">
                            <h3 class="mb-0 text-white">Tunggakan</h3>
                        </div>
                        @if(Auth::user()->tunggakan->isEmpty())
                         <div class="justify-content-center row">
                            <div class="alert bg-success mt-4 col-6 mb-4 text-white">
                                <h3 class="mb-0 text-white">Lunas</h3>
                            </div>
                         </div>
                        @else
                        <div class="card-body col-12 table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>virtual account</th>
                                        <td>Rp. {{number_format(Auth::user()->tunggakan->first()->va_jumlah,2)}}</td>
                                        <td>{{Auth::user()->tunggakan->first()->va_bulan}} bulan</td>
                                    <tr>
                                        <th>Tunai</th>
                                        <td>Rp. {{number_format(Auth::user()->tunggakan->first()->tunai_jumlah,2)}}</td>
                                        <td>{{Auth::user()->tunggakan->first()->tunai_bulan}} bulan</td>
                                    </tr>
                                    <tr>
                                        <th >DSP</th>
                                        <td colspan="2">Rp. {{number_format(Auth::user()->tunggakan->first()->dsp,2)}}</td>
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
                                        <td colspan="2" class="bg-yellow text-dark font-weight-bold text-right"> Rp. {{number_format(Auth::user()->tunggakan->first()->total,2)}}</td>
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