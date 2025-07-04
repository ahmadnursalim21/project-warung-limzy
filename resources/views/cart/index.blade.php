@extends('layouts.app')

@section('title', 'Page Cart')

@section('content')

    <div class="container mt-4">

        <h2 class="mb-4">Shopping Cart</h2>

        <table class="table table-bordered">
            <thead class="table-primary">
                <tr>
                    <th>#</th>
                    <th>Product</th>
                    <th>Qty</th>
                    <th>Price</th>
                    <th>Subtotal</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <!-- Dummy data -->
                <tr>
                    <td>1</td>
                    <td>Produk A</td>
                    <td>2</td>
                    <td>Rp 50.000</td>
                    <td>Rp 100.000</td>
                    <td>
                        <button class="btn btn-danger btn-sm">Remove</button>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Produk B</td>
                    <td>1</td>
                    <td>Rp 30.000</td>
                    <td>Rp 30.000</td>
                    <td>
                        <button class="btn btn-danger btn-sm">Remove</button>
                    </td>
                </tr>
            </tbody>
        </table>

        <div class="text-end mt-3">
            <h4>Total: <span class="text-primary">Rp 130.000</span></h4>
            <a href="#" class="btn btn-success mt-2">Checkout</a>
        </div>

    </div>

@endsection
