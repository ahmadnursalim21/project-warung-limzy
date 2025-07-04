@extends('layouts.app')

@section('title', 'Register Page')

@section('content')
    <div class="d-flex justify-content-center align-items-center vh-100">
        <div class="card p-4 shadow" style="min-width: 350px;">
            <h3 class="text-center mb-3">Register Akun</h3>
            <form action="register.php" method="POST">
                <div class="mb-3">
                    <label for="name" class="form-label">Username</label>
                    <input type="text" class="form-control" id="name" name="username" required
                        placeholder="Masukan nama anda">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required
                        placeholder="Masukan email anda">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required
                        placeholder="Masukan password anda">
                </div>
                <div class="d-grid">
                    <button type="submit" name="submit" class="btn btn-primary">Register</button>
                </div>
                <div class="text-center mt-3">
                    <p>Sudah mempunyai akun? <a href="login">Login sekarang</a></p>
                </div>
            </form>
        </div>
    </div>
@endsection
