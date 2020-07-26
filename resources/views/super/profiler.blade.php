@extends('layout.main')
@section('title','Home | pilput website personal')
@section('content')


<tbody>
    <?php $i = 1; ?>
        @foreach($profile as $data)
        <tr>
            <td class="text-center">{{$loop->iteration}}</td>
            <td>{{$data->nama}}</td>
            <td>{{$data->tipe_buku}}</td>
            <td class="text-center">{{$data->stock_buku}}</td>
            <td>{{$data->penulis}}</td>
            <td>{{$data->penerbit}}</td>
            <td class="text-center">{{$book->tanggal_terbit}}</td>
            <td>
                <a href="{{url('/edit')}" class="btn btn-xs btn-primary">Edit</a> |
                <a href="#" class="btn btn-xs btn-danger" onclick="return confirm('yakin?');">Delete</a>
            </td>
        </tr>
        @endforeach
</tbody>

@endsection
