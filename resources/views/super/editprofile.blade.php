@extends('layout.main')
@section('title','Home | pilput website personal')
@section('content')


<div class="container bg-light rounded">
    <br>
    <div class="row">
        <div class="col-12">
            <h2>Edit data profile</h2>
            <hr>
        </div>

        <div class="col-12">
            <form action="/pilput/update/{{$profile->id}}" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                  <label for="exampleInputEmail1">NIK</label>
                  <input type="text" name="nik" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="masukan NIK" value="{{ $profile->nik }}">

                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama</label>
                    <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="masukan nama" value="{{ $profile->nama }}">

                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Universitas</label>
                    <input type="text" name="alumni" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="masukan universitas" value="{{ $profile->alumni }}">

                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Agama</label>
                    <select class="form-control" name="agama" id="exampleFormControlSelect1">
                      <option value="islam" @if($profile->agama == 'islam') selected @endif>Islam</option>
                      <option value="sesat" @if($profile->agama == 'sesat') selected @endif>Sesat</option>
                      <option value="other" @if($profile->agama == 'other') selected @endif>Other</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Tgl lahir</label>
                    <input type="date" name="tgl_lahir" class="form-control" value="{{ $profile->tgl_lahir }}">

                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Alamat</label>
                <textarea class="form-control" name="alamat" id="exampleFormControlTextarea1" rows="3">{{$profile->alamat}}</textarea>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Keterangan</label>
                    <textarea class="form-control" name="deskripsi" id="exampleFormControlTextarea1" rows="3">{{ $profile->deskripsi }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary float-right btn-sm">Simpan</button>
                <br>
            </form>
            <br>

            </div>
        </div>
    </div>

</div>
<br>



@endsection
