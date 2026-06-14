<!--Menghubungkan dengan view tempalte-->
@extends('template')

@section('title', 'Data Sandal')
<!-- isi bagian konten-->
@section('konten')
<h2>Daftar Sandal</h2>

    <center>
        <br />
        <br />

        <br />
        <table class="table table-striped table-hover">
            <tr>
                <th>Kode Sandal</th>
                <th>Merk Sandal</th>
                <th>Stok Sandal</th>
                <th>Tersedia</th>
            </tr>
            @foreach ($sandal as $s)
                <tr>
                    <td>{{ $s->kodesandal }}</td>
                    <td>{{ $s->merksandal }}</td>
                    <td>{{ $s->stocksandal }}</td>
                    <td>{{ $s->tersedia }}</td>
                </tr>
            @endforeach
    </center>
@endsection
