<?php include 'app/views/shares/header.php'; ?>

<style>
    body {
        background-color: #f4f6f9;
    }

    .register-container {
        min-height: 100vh;
    }

    .card-register {
        border: none;
        border-radius: 12px;
        box-shadow: 0 8px 30px rgba(0, 0, 0, 0.1);
    }

    .form-control:focus {
        box-shadow: none;
        border-color: #4a90e2;
    }

    .btn-register {
        background-color: #4a90e2;
        border: none;
    }

    .btn-register:hover {
        background-color: #357ABD;
    }

    .card-title {
        color: #333;
    }

    .text-muted-custom {
        color: #777;
    }

    .text-danger {
        text-align: left;
        margin-bottom: 10px;
    }
</style>

<div class="container register-container d-flex align-items-center justify-content-center">
    <div class="col-md-6">
        <div class="card card-register p-4">
            <div class="card-body">
                <h3 class="card-title text-center mb-4">Create Your Account</h3>
                <p class="text-muted-custom text-center mb-4">Please fill out the form to register.</p>

                <?php if (isset($errors) && is_array($errors)): ?>
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            <?php foreach ($errors as $err): ?>
                                <li><?= htmlspecialchars($err) ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php endif; ?>

                <form action="/webbanhang/account/save" method="post">
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Enter username" required>
                    </div>

                    <div class="mb-3">
                        <label for="fullname" class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Enter full name" required>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter password" required>
                    </div>

                    <div class="mb-4">
                        <label for="confirmpassword" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" id="confirmpassword" name="confirmpassword" placeholder="Confirm password" required>
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-register btn-lg text-white">Register</button>
                    </div>
                </form>

                <div class="text-center mt-3">
                    <small class="text-muted-custom">Already have an account?
                        <a href="/webbanhang/account/login" class="text-primary fw-semibold">Login here</a>
                    </small>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'app/views/shares/footer.php'; ?>
