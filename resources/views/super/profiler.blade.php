@extends('layout.main')
@section('title','Home | pilput website personal')
@section('content')

 {{-- {{ dd($data_profile) }} --}}
 <br>
<div class="container">
    <div class="row">
        <div class="col-6">
            <h2>Daftar profile</h2>
        </div>
        <div class="col-6">
            <button type="button" class="btn btn-primary float-right btn-sm" data-toggle="modal" data-target="#exampleModal">
                Tambah profile
            </button>

              <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Isi data</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                        <form action="/pilput/tambah" method="POST">
                            <div class="form-group">
                              <label for="exampleInputEmail1">NIK</label>
                              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="masukan NIK">

                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="masukan nama">
                                <
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Universitas</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="masukan universitas">

                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Agama</label>
                                <select class="form-control" id="exampleFormControlSelect1">
                                  <option value="islam">Islam</option>
                                  <option value="sesat">Sesat</option>
                                  <option value="other">Other</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tgl lahir</label>
                                <input type="date" class="form-control">

                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Alamat</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Keterangan</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>

                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                      <button type="submit" class="btn btn-primary">Submit</button>
                          </form>
                    </div>
                  </div>
                </div>
            </div>
        </div>



<table class="table table-bordered table-hover">
    <tr class="thead-dark">
        <th>Nik</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Univ</th>
        <th>Agama</th>
        <th>Tgl lahir</th>
        <th>Ket</th>
    </tr>
    @foreach ($data_profile as $profile)
        <tr>
            <td>{{$profile->nik}}</td>
            <td>{{$profile->nama}}</td>
            <td>{{$profile->alamat}}</td>
            <td>{{$profile->alumni}}</td>
            <td>{{$profile->agama}}</td>
            <td>{{$profile->tgl_lahir}}</td>
            <td>{{$profile->deskripsi}}</td>
        </tr>
    @endforeach
</table>
    </div>
</div>


@endsection
