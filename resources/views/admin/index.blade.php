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
            <div class="col-6 mb-5 mb-xl-0">
                <h5 id="date_time" class="text-white"></h5>
                <div class="card shadow">
                    <div class="card-header">
                        <h5>Pilih Siswa</h5>
                    </div>
                    <div class="card-body">
                        <form action="">
                            <div class="form-group row">
                            <input type="text" name="name" class="form-control form-control-alternative col-8" placeholder="Nama Lengkap" value="{{$s->name ?? ''}}" disabled>
                                <button type="button" class="btn btn-primary col-4" data-toggle="modal" data-target="#exampleModal">
                                    Cari
                                </button>
                            </div>
                            <div class="form-group row">
                            <input type="text" name="rayon" class="form-control form-control-alternative" placeholder="Rayon" value="{{$s->nis ?? ''}}" disabled>
                            </div>
                            <div class="form-group row">
                                <input type="text" name="rayon" class="form-control form-control-alternative" placeholder="Rayon" value="{{$s->rayon->nama_rayon ?? ''}}" disabled>
                            </div>
                            <div class="form-group row">
                                <input type="text" name="rombel" class="form-control form-control-alternative" placeholder="Rombel" value="{{$s->rombel ?? ''}}" disabled>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card shadow">
                    <div class="card-header">
                        <h5>Data Inputan</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{{route('input.store')}}}" method="post">
                            @csrf
                            <input type="hidden" value="{{$s->id ?? ''}}" name="user_id">
                            <span>Virtual Account</span>
                            <div class="form-group">
                                <div class="input-group input-group-alternative">
                                    <input type="text" name="va_jumlah" id="va_jumlah" class="form-control form-control-alternative" placeholder="Jumlah">
                                    <div class="input-group-append">
                                        <div class="input-group-text">Jumlah</div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group input-group-alternative">
                                    <input type="text" name="va_bulan" id="va_bulan" class="form-control form-control-alternative" placeholder="Bulan">
                                    <div class="input-group-append">
                                        <div class="input-group-text">Bulan</div>
                                    </div>
                                </div>
                            </div>
                            <span>Tunai</span>
                            <div class="form-group">
                                <div class="input-group input-group-alternative">
                                    <input type="text" name="tunai_jumlah" id="tunai_jumlah" class="form-control form-control-alternative" placeholder="Jumlah">
                                    <div class="input-group-append">
                                        <div class="input-group-text">Jumlah</div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group input-group-alternative">
                                    <input type="text" name="tunai_bulan" id="tunai_bulan" class="form-control form-control-alternative" placeholder="Bulan">
                                    <div class="input-group-append">
                                        <div class="input-group-text">Bulan</div>
                                    </div>
                                </div>
                            </div>
                            <span>Lain -lain</span>
                            <div class="form-group">
                                <div class="input-group input-group-alternative">
                                    <input type="text" name="dsp" id="dsp" class="form-control form-control-alternative" placeholder="DSP">
                                    <div class="input-group-append">
                                        <div class="input-group-text">DSP</div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group input-group-alternative">
                                    <input type="text" name="sertifikat" id="sertifikat" class="form-control form-control-alternative" placeholder="Sertifikat internasional Keahlian">
                                    <div class="input-group-append">
                                        <div class="input-group-text">Sertifikat Keahlian</div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group input-group-alternative">
                                    <input type="text"  name="pondokan" id="pondokan" class="form-control form-control-alternative" placeholder="Pondokan">
                                    <div class="input-group-append">
                                        <div class="input-group-text">Pondokan</div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group input-group-alternative">
                                    <input type="text" name="perpisahan" id="perpisahan" class="form-control form-control-alternative" placeholder="Perpisahan">
                                    
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            Perpisahan
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group input-group-alternative">
                                    <input type="text" name="dana_ganjil" id="dana_ganjil" class="form-control form-control-alternative" placeholder="Dana Pengembangan SMT Ganjil">

                                    <div class="form-group-append">
                                        <div class="input-group-text">
                                            Dana SMT Ganjil
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group input-group-alternative">
                                    <input type="text" name="dana_genap" id="dana_genap" class="form-control form-control-alternative" placeholder="Dana Pengembangan SMT Genap">

                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            Dana SMT Genap
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group input-group-alternative">
                                    <input type="text" name="kunjungan_industri" id="kunjungan_industri" class="form-control form-control-alternative" placeholder="Kunjungan Industri">

                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            Kunjungan Industri
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group input-group-alternative">
                                    <input type="text" name="bpjs" id="bpjs" class="form-control form-control-alternative" placeholder="BPJS">

                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            BPJS
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group input-group-alternative">
                                    <input type="text" name="toeic" id="toeic" class="form-control form-control-alternative" placeholder="TOEIC">

                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            TOEIC
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group input-group-alternative">
                                    <input type="text" name="total" id="total" class="form-control form-control-alternative" placeholder="Total">

                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            TOTAL
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success col-12" {{ isset($s) ? '' : 'disabled' }}>Simpan</button>
                        </form>
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
    <script>
        var vaj = document.getElementById('va_jumlah');
        var vab = document.getElementById('va_bulan');
        var tuj = document.getElementById('tunai_jumlah');
        var tub = document.getElementById('tunai_bulan');
        var dsp = document.getElementById('dsp');
        var sert = document.getElementById('sertifikat');
        var pondok = document.getElementById('pondokan');
        var perpisahan = document.getElementById('perpisahan');
        var dg = document.getElementById('dana_ganjil');
        var dge = document.getElementById('dana_genap');
        var kj = document.getElementById('kunjungan_industri');
        var bpjs = document.getElementById('bpjs');
        var toeic = document.getElementById('toeic');
        var total = document.getElementById('total');

        vaj.value = 350000;
        vab.value = 0;
        tuj.value = 100000;
        tub.value = 0;
        dsp.value = 0;
        sert.value = 0;
        pondok.value = 0;
        perpisahan.value = 0;
        dg.value = 0;
        dge.value = 0;
        kj.value = 0;
        bpjs.value = 0;
        toeic.value = 0;
        total.value = 0;

        vaj.addEventListener('keyup',function(){
            total.value = hitungTotal();
        });
        vab.addEventListener('keyup',function(){
            total.value = hitungTotal();
        });
        tuj.addEventListener('keyup',function(){
            total.value = hitungTotal();
        });
        tub.addEventListener('keyup',function(){
            total.value = hitungTotal();
        });
        dsp.addEventListener('keyup',function(){
            total.value = hitungTotal();
        });
        sert.addEventListener('keyup',function(){
            total.value = hitungTotal();
        });
        pondok.addEventListener('keyup',function(){
            total.value = hitungTotal();
        });
        perpisahan.addEventListener('keyup',function(){
            total.value = hitungTotal();
        });
        dg.addEventListener('keyup',function(){
            total.value = hitungTotal();
        });
        dge.addEventListener('keyup',function(){
            total.value = hitungTotal();
        });
        kj.addEventListener('keyup',function(){
            total.value = hitungTotal();
        });
        bpjs.addEventListener('keyup',function(){
            total.value = hitungTotal();
        });
        toeic.addEventListener('keyup',function(){
            total.value = hitungTotal();
        });

        function hitungTotal(){
            var total = (parseInt(vaj.value * vab.value) + parseInt(tuj.value * tub.value) + parseInt(dsp.value)
            + parseInt(sert.value) + parseInt(pondok.value) + parseInt(perpisahan.value) + parseInt(dg.value) 
            + parseInt(dge.value) + parseInt(kj.value) + parseInt(bpjs.value) + parseInt(toeic.value));

            return Math.round(total);
        }
    </script>
@endpush

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">User Data</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
            <div class="modal-body">
                <table id="myTable" class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>NIS</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($siswa as $s)
                        <tr>
                            <td>{{$s->name}}</td>
                            <td>{{$s->nis}}</td>
                            <td><a href="{{route('input.show',$s->id)}}" class="btn btn-primary">
                                    <i class="fa fa-forward"></i>
                                </a></td>
                                @endforeach
                            </tr>    
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>