@extends('template')

@section('title', 'Beli Barang')

@section('konten')
<div class="text-center">
    <div class="container mt-5">
            </h2>
            <h3>Beli Barang</h3>
        </div>

        <a href="/keranjang" class="btn btn-secondary mb-4">Kembali</a>

        @foreach($barang as $b)
        <div class="card text-start"> <div class="card-header">
                Form Beli Barang
            </div>

            <div class="card-body">
                <form action="/keranjang/store" method="post">
                    {{ csrf_field() }}

                    <div class="row mb-3">
                        <label for="kode_barang" class="col-sm-2 col-form-label">ID</label>
                        <div class="col-sm-10">
                            <input
                                type="number"
                                name="kode_barang"
                                id="kode_barang"
                                class="form-control"
                                required
                                value="{{ $b->Id }}"
                                readonly
                            >
                            </div>
                    </div>

                    <div class="row mb-3">
                        <label for="jumlah" class="col-sm-2 col-form-label">Jumlah</label>
                        <div class="col-sm-10">
                            <input
                                type="number"
                                name="jumlah"
                                id="jumlah"
                                class="form-control"
                                required
                                value="{{ $b->Jumlah }}"
                            >
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                        <div class="col-sm-10">
                            <input
                                type="number"
                                name="harga"
                                id="harga"
                                class="form-control"
                                required
                                value="{{ $b->Harga }}"
                            >
                        </div>
                    </div>

                    <div class="row">
                        <div class="offset-sm-2 col-sm-10">
                            <input type="submit" value="Beli" class="btn btn-primary">
                        </div>
                    </div>

                </form>
            </div>
        </div>
        @endforeach

    </div>
</div>
@endsection
