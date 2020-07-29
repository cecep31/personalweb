@extends('layout.main')
@section('title','Home | pilput website personal')
@section('content')

 {{-- {{ dd($data_profile) }} --}}
 <br>
<div class="container">
    @if(session('sukses'))
        <div class="alert alert-info float-center"  role="alert">
            {{session('sukses')}}
        </div>
    @endif

    <div class="row">
        <div class="col-6">
            <h2 class="text-white">Daftar profile</h2>
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
                            {{ csrf_field() }}
                            <div class="form-group">
                              <label for="exampleInputEmail1">NIK</label>
                              <input type="text" name="nik" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="masukan NIK">

                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama</label>
                                <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="masukan nama">
                                <
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Universitas</label>
                                <input type="text" name="alumni" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="masukan universitas">

                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Agama</label>
                                <select class="form-control" name="agama" id="exampleFormControlSelect1">
                                  <option value="islam">Islam</option>
                                  <option value="sesat">Sesat</option>
                                  <option value="other">Other</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tgl lahir</label>
                                <input type="date" name="tgl_lahir" class="form-control">

                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Alamat</label>
                                <textarea class="form-control" name="alamat" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Keterangan</label>
                                <textarea class="form-control" name="deskripsi" id="exampleFormControlTextarea1" rows="3"></textarea>
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
        <th>Action</th>
    </tr>
    @foreach ($data_profile as $profile)
        <tr>
            <td class="bg-light">{{$profile->nik}}</td>
            <td class="bg-light">{{$profile->nama}}</td>
            <td class="bg-light">{{$profile->alamat}}</td>
            <td class="bg-light">{{$profile->alumni}}</td>
            <td class="bg-light">{{$profile->agama}}</td>
            <td class="bg-light">{{$profile->tgl_lahir}}</td>
            <td class="bg-light">{{$profile->deskripsi}}</td>
        <td class="bg-light"><a href="/pilput/edit/{{$profile->id}}" class="btn btn-sm btn-warning">Edit</a><a href="/plput/delete" class="btn btn-sm btn-danger">Delete</a></td>
        </tr>
    @endforeach
</table>
    </div>
</div>


@endsection
