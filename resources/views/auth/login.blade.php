@extends('layouts.app')
@section('title', 'Login Page')

@section('content')
    <div class="d-flex justify-content-center align-items-center vh-100">
        <div class="card p-4 shadow" style="min-width: 350px;">
            <?php if (isset($_SESSION['error'])) {
                echo '<div class="alert alert-danger">' . $_SESSION['error'] . '</div>';
                unset($_SESSION['error']);
            } ?>
            <h3 class="text-center mb-3">Login Akun</h3>
            <form action="login.php" method="POST">
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" aria-describedby="email"
                        placeholder="Masukan email anda" name="email">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Masukan password anda"
                        name="password">
                </div>
                <div class="d-grid mt-3">
                    <button type="submit" name="submit" class="btn btn-primary">Login</button>
                </div>
                <div class="text-center mt-3">
                    <p>Apakah kamu belum mempunyai akun ? <a href="register">Register
                            sekarang</a> </p>
                </div>
            </form>
        </div>
    </div>
@endsection
