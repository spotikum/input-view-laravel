@extends('products.layout')

@section('content')

<form action="{{ route('products.store') }}" method="POST">
    @csrf
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama:</strong>
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Detail:</strong>
                <textarea class="form-control" style="height:150px" name="detail" placeholder="Detail"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-3">
                <a class="btn btn-primary" href="{{ route('products.index') }}"> Kembali</a>
                <button type="submit" class="btn btn-primary">Tambahkan</button>
        </div>
    </div>
</form>
@endsection