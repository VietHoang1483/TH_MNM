<?php include 'app/views/shares/header.php'; ?>

<!-- Thanh toán -->
<div class="container my-5">
    <h1 class="text-center text-light mb-4">Thanh Toán</h1>

    <form method="POST" action="/webbanhang/Product/processCheckout" class="bg-dark p-4 rounded shadow-sm">
        <!-- Họ tên -->
        <div class="form-group mb-3">
            <label for="name" class="text-light">Họ tên:</label>
            <input type="text" id="name" name="name" class="form-control" required placeholder="Nhập họ tên của bạn">
        </div>

        <!-- Số điện thoại -->
        <div class="form-group mb-3">
            <label for="phone" class="text-light">Số điện thoại:</label>
            <input type="text" id="phone" name="phone" class="form-control" required placeholder="Nhập số điện thoại">
        </div>

        <!-- Địa chỉ -->
        <div class="form-group mb-3">
            <label for="address" class="text-light">Địa chỉ:</label>
            <textarea id="address" name="address" class="form-control" required placeholder="Nhập địa chỉ của bạn"></textarea>
        </div>

        <!-- Nút thanh toán -->
        <button type="submit" class="btn btn-success w-100">Thanh toán</button>
    </form>

    <!-- Quay lại giỏ hàng -->
    <div class="text-center mt-3">
        <a href="/webbanhang/Product/cart" class="btn btn-secondary">Quay lại giỏ hàng</a>
    </div>
</div>
<style>
    body {
    background-color: #121212;
    color: #fff;
}

.container {
    max-width: 600px;
}

.form-group label {
    font-weight: 500;
}

.form-control {
    background-color: #333;
    color: #fff;
    border: 1px solid #444;
}

.form-control:focus {
    border-color: #28a745;
    box-shadow: 0 0 5px rgba(40, 167, 69, 0.5);
}

button[type="submit"] {
    padding: 10px 15px;
    font-size: 18px;
    border-radius: 30px;
}

a.btn {
    padding: 10px 20px;
    font-size: 16px;
    border-radius: 30px;
}

a.btn-secondary {
    background-color: #6c757d;
    color: #fff;
}

a.btn-secondary:hover {
    background-color: #5a6268;
}

button[type="submit"],
a.btn {
    display: flex;              
    align-items: center;      
    justify-content: center;  
    padding: 12px 20px;         
    font-size: 18px;         
    border-radius: 30px;       
    text-transform: uppercase;   
    font-weight: 600;            
}

/* Hiệu ứng hover cho nút */
a.btn:hover, button[type="submit"]:hover {
    background-color: #28a745;   
    border-color: #28a745;
}

</style>
<?php include 'app/views/shares/footer.php'; ?>
