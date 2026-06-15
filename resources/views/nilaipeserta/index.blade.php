<!--Menghubungkan dengan view tempalte-->
@extends('template')

@section('title', 'Data Nilai Peserta')
<!-- isi bagian konten-->
@section('konten')
    <center>
        <br />
        <h2>Data Nilai Peserta</h2>
        <br />
        <h1>Kode Soal nilai_peserta</h1> <!-- Sesuai instruksi nomor 5 -->
    </div>

        <table class="table table-striped table-hover">
            <tr>
                <th>ID</th>
                <th>No Peserta</th>
                <th>Nilai Teori</th>
                <th>Nilai Praktek</th>
                <th>Rata-Rata</th>
                <th>Status</th>
            </tr>
            @foreach ($nilaipeserta as $np)
            @php
                $ratarata = ($np->nilaiteori + $np->nilaipraktek) / 2;
                // Logika Penentuan Status dan Warna
                $status = $ratarata >= 75 ? 'Lulus' : 'Gagal';
                $bg_color = $status == 'Lulus' ? 'bg-success' : 'bg-danger';
            @endphp
                <tr>
                    <td>{{ $np->ID }}</td>
                    <td>{{ $np->nopeserta }}</td>
                    <td>{{ $np->nilaiteori }}</td>
                    <td>{{ $np->nilaipraktek }}</td>
                    <td>{{ $ratarata }}</td>
                    <td class="{{ $bg_color }}">{{ $status }}</td>
                </tr>
            @endforeach
        </table>
        <a href="/nilaipesertatambah" class="btn btn-primary">Tambah Nilai Peserta</a>
        <div class="jumbotron text-center">

    </center>
@endsection
