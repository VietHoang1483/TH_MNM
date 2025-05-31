<?php include 'app/views/shares/header.php'; ?>

<!-- Giỏ hàng -->
<div class="container my-5">
    <h1 class="text-center text-light mb-4">Giỏ Hàng</h1>

    <?php if (!empty($cart)): ?>
        <div class="row">
            <div class="col-md-8">
                <ul class="list-group bg-dark text-white rounded shadow-sm">
                    <?php foreach ($cart as $id => $item): ?>
                        <li class="list-group-item bg-secondary d-flex justify-content-between align-items-center mb-3 rounded">
                            <div class="d-flex align-items-center">
                              
                                <?php if ($item['image']): ?>
                                    <img src="/webbanhang/<?php echo $item['image']; ?>" alt="Product Image" class="img-fluid me-3" style="max-width: 120px;">
                                <?php endif; ?>

                                <div>
                                    <h5 class="text-light"><?php echo htmlspecialchars($item['name'], ENT_QUOTES, 'UTF-8'); ?></h5>
                                    <p class="mb-1">Giá: <?php echo htmlspecialchars($item['price'], ENT_QUOTES, 'UTF-8'); ?> VND</p>
                                    <p class="mb-0">Số lượng: <?php echo htmlspecialchars($item['quantity'], ENT_QUOTES, 'UTF-8'); ?></p>
                                </div>
                            </div>
                            
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            
            <div class="col-md-4">
                <div class="bg-secondary p-3 rounded shadow-sm">
                    <h5 class="text-light">Tóm tắt Giỏ Hàng</h5>
                    <hr class="border-light">
                    <p class="text-light">Số sản phẩm: <strong><?php echo count($cart); ?></strong></p>
                    <p class="text-light">Tổng tiền: <strong><?php echo number_format(array_sum(array_column($cart, 'price')), 0, ',', '.') ?> VND</strong></p>
                    <div class="d-flex justify-content-between mt-4">
                        <a href="/webbanhang/Product" class="btn btn-primary w-48">Tiếp tục mua sắm</a>
                        <a href="/webbanhang/Product/checkout" class="btn btn-success w-48">Thanh Toán</a>
                    </div>
                </div>
            </div>
        </div>
    <?php else: ?>
        <p class="text-center text-white">Giỏ hàng đang trống.</p>
    <?php endif; ?>
</div>

<?php include 'app/views/shares/footer.php'; ?>
