@extends('layouts.app')

@section('title', 'Detail Product')
@section('content')
    <div class="container mt-5">
        <div class="row">
            <!-- Gambar Produk -->
            <div class="col-md-6">
                <img src="{{ asset('images/gambar.jpeg') }}" class="img-fluid rounded shadow" alt="Product Image">
            </div>

            <!-- Detail Produk -->
            <div class="col-md-6">
                <h2 class="mb-3">Nama Produk</h2>
                <h4 class="text-muted mb-3">Rp 150.000</h4>

                <p class="mb-4">
                    Ini adalah deskripsi lengkap produk. Produk ini terbuat dari bahan berkualitas, cocok digunakan
                    sehari-hari, dan tersedia dalam berbagai ukuran.
                </p>

                <form action="#" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="qty" class="form-label">Quantity</label>
                        <input type="number" id="qty" name="qty" class="form-control" value="1"
                            min="1">
                    </div>

                    <button type="submit" class="btn btn-success">
                        <i class="bi bi-cart-plus"></i> Tambah ke Keranjang
                    </button>
                </form>

                <div class="mt-4">
                    <span class="badge bg-info">Kategori: Fashion</span>
                    <span class="badge bg-secondary">Stok: Tersedia</span>
                </div>
            </div>
        </div>
    </div>
@endsection
