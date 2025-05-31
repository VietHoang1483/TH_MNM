<?php include 'app/views/shares/header.php'; ?>

<!-- Xác nhận đơn hàng -->
<div class="container my-5 text-center">
    <h1 class="text-light mb-4">Xác Nhận Đơn Hàng</h1>

    <div class="bg-dark p-5 rounded shadow-sm">
        <h3 class="text-success mb-3">Cảm ơn bạn đã đặt hàng!</h3>
        <p class="text-light mb-4">Đơn hàng của bạn đã được xử lý thành công. Bạn sẽ nhận được thông báo khi đơn hàng được giao.</p>
        
        <a href="/webbanhang/Product/index" class="btn btn-primary w-50 mt-3">Tiếp tục mua sắm</a>
    </div>
</div>
<style>
    body {
    background-color: #121212;
    color: #fff;
}

.container {
    max-width: 800px; 
}

h1 {
    font-size: 36px;
    font-weight: bold;
}

h3 {
    font-size: 28px;
    font-weight: bold;
}

p {
    font-size: 18px;
    line-height: 1.5;
}

button[type="submit"] {
    padding: 12px 20px;
    font-size: 18px;
    border-radius: 30px;
}

a.btn-primary {
    padding: 12px 30px;
    font-size: 18px;
    border-radius: 30px;
}

a.btn-primary:hover {
    background-color: #0056b3; /* Màu khi hover */
    color: white;
}

.bg-dark {
    background-color: #2f2f2f !important; /* Điều chỉnh nền tối */
}

.text-success {
    color: #28a745 !important;
}

</style>
<?php include 'app/views/shares/footer.php'; ?>
