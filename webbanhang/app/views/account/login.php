<?php include 'app/views/shares/header.php'; ?>

<style>
    body {
        background: #f4f6f9;
    }

    .login-container {
        min-height: 100vh;
    }

    .card-login {
        border: none;
        border-radius: 12px;
        box-shadow: 0 8px 30px rgba(0, 0, 0, 0.1);
    }

    .form-control:focus {
        box-shadow: none;
        border-color: #4a90e2;
    }

    .btn-login {
        background-color: #4a90e2;
        border: none;
    }

    .btn-login:hover {
        background-color: #357ABD;
    }

    .social-icons a {
        color: #4a90e2;
        margin: 0 10px;
        font-size: 1.2rem;
        transition: 0.3s;
    }

    .social-icons a:hover {
        color: #1c5d99;
    }

    .card-title {
        color: #333;
    }

    .text-muted-custom {
        color: #777;
    }
</style>

<div class="container login-container d-flex align-items-center justify-content-center">
    <div class="col-md-6 col-lg-5">
        <div class="card card-login p-4">
            <div class="card-body">
                <h3 class="card-title text-center mb-4">Welcome Back 👋</h3>
                <p class="text-muted-custom text-center mb-4">Please enter your username and password to continue.</p>

                <form action="/webbanhang/account/checklogin" method="post">
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" name="username" class="form-control" id="username" required>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="password" required>
                    </div>

                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <a href="#!" class="small text-muted-custom">Forgot password?</a>
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-login btn-lg text-white">Login</button>
                    </div>

                    <div class="social-icons text-center mt-4">
                        <span>Or sign in with:</span><br>
                        <a href="#!"><i class="fab fa-facebook-f"></i></a>
                        <a href="#!"><i class="fab fa-twitter"></i></a>
                        <a href="#!"><i class="fab fa-google"></i></a>
                    </div>

                    <div class="text-center mt-4">
                        <p class="mb-0">Don't have an account?
                            <a href="/webbanhang/account/register" class="text-primary fw-semibold">Sign Up</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include 'app/views/shares/footer.php'; ?>
