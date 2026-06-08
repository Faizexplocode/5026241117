<!--Menghubungkan dengan view tempalte-->
@extends('template')

@section('title', 'Data Keranjang Belanja')
<!-- isi bagian konten-->
@section('konten')

    <center>
        <br />
        <br />

        <br />
        <table class="table table-striped table-hover">
            <tr>
                <th>ID</th>
                <th>Kode Barang</th>
                <th>Jumlah</th>
                <th>Harga</th>
                <th>Total Harga</th>
                <th>Opsi</th>
            </tr>
            @foreach ($belanja as $b)
                <tr>
                    <td>{{ $b->Id }}</td>
                    <td>{{ $b->KodeBarang }}</td>
                    <td>{{ $b->Jumlah }}</td>
                    <td>{{ $b->Harga }}</td>
                    <td>{{ $b->Jumlah * $b->Harga}}</td>
                    <td>
                        <a href="/keranjangbeli/{{ $b->KodeBarang }}" class="btn btn-warning">Beli</a>
                        <a href="/keranjanghapus/{{ $b->KodeBarang }}" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
            @endforeach
    </center>
@endsection
