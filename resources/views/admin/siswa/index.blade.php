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
        <div class="row">
            <div class="col-xl-8 mb-5 mb-xl-0">
            </div>
        </div>
        <div class="row mt-5 mb-7">
            <div class="col-10 ml-6 mb-5 mb-xl-0">
                <h5 id="date_time" class="text-white"></h5>
                <div class="card shadow">
                    <div class="card-header">
                        <h5>Input Data User</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{route('siswa.store')}}" method="post">
                            @csrf
                            <h4 class="mb-2">Data diri</h4>
                            <div class="form-group mt-3">
                                <input type="text" name="nis" class="form-control form-control-alternative" placeholder="Nomor Induk Siswa">
                            </div>
                            <div class="form-group ">
                                <input type="text" name="name" class="form-control form-control-alternative" placeholder="Nama Lengkap">
                            </div>
                            <div class="form-group ">
                                <select name="rayon_id" id="" class="form-control form-control-alternative">
                                    <option value="">Rayon</option>
                                    @foreach ($rayon as $r)
                                    <option value="{{$r->id}}">{{$r->nama_rayon}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group ">
                                <select name="role" id="" class="form-control form-control-alternative">
                                    <option value="">Role</option>
                                    <option value="pembimbing">Pembimbing</option>
                                    <option value="siswa">siswa</option>
                                </select>
                            </div>
                            <div class="form-group ">
                                <input type="text" name="rombel" class="form-control form-control-alternative" placeholder="Rombel">
                            </div>
                            <div class="form-group ">
                                <input type="text" name="tahun_pelajaran" class="form-control form-control-alternative" placeholder="Tahun Pelajaran">
                            </div>
                            <h4 class="mb-4">Authentikasi</h4>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control form-control-alternative" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" class="form-control form-control-alternative" placeholder="Password">
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