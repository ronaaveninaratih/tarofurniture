@extends('template.base')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">
                        Data Produk
                        <a href="{{url('produk/create')}}" class="btn btn-dark float-right"><i class="fa fa-plus"></i> Tambah Data </a>
                    </div>
                    <div class="card-body">
                        <h1>{{$produk->nama}}</h1>
                        <hr>
                        @include('produk.show.detail')
                        <p>
                            {!! nl2br($produk->deskripsi) !!}
                        </p>
                        <p>
                            <img src="{{url("public", $produk->foto)}}" alt="">
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
