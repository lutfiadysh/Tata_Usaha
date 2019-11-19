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
                <div class="card shadow">
                    <div class="card-header">
                        <h5>Input Data Rayon</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{route('rayon.store')}}" method="post">
                            @csrf
                            <h4 class="mb-2">Data rayon</h4>
                            <div class="form-group ">
                                <input type="text" class="form-control form-control-alternative" placeholder="Nama Rayon" name="nama_rayon" required>
                            </div>
                            <div class="form-group ">
                                <input type="text" class="form-control form-control-alternative" placeholder="Nama Pembimbing" name="pembimbing" required>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success col-12">Simpan</button>
                            </div>
                        </form>
                        <div class="form-group">
                            <button  class="btn btn-primary col-12" data-toggle="modal" data-target="#exampleModal">Import Data</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('layouts.footers.auth')
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Import Data Rayon</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <form action="{{route('import.rayon')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                <div class="modal-body">
                  <div class="form-group">
                      <label for="file">Pilih File</label>
                      <input type="file" name="file" class="form-control form-control-alternative">
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
              </div>
            </form>
            </div>
          </div>
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush