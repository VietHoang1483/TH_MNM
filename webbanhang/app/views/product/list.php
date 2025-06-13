<?php include 'app/views/shares/header.php'; ?>

<style>
    .product-list {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        justify-content: flex-start;
    }

    /* Mỗi thẻ sản phẩm */
    .product-card-wrapper {
        flex: 0 0 calc((100% - 60px) / 4); /* 4 thẻ mỗi hàng với 3 khoảng cách x 20px */
        min-width: 250px;
    }

    .product-card {
        transition: all 0.3s ease;
        border-radius: 10px;
        text-decoration: none !important;
        color: inherit;
        display: block;
        width: 100%;
    }

    .product-card:hover {
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.15);
        border: 1px solid #007bff;
    }

    .card-img-top {
        object-fit: cover;
        height: 200px;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
    }

    .card-body {
        padding: 1rem;
        display: flex;
        flex-direction: column;
        height: 100%;
    }

    .card-title {
        font-size: 1.2rem;
        font-weight: 600;
        margin-bottom: 0.5rem;
    }

    .card-text {
        font-size: 0.95rem;
    }

    .btn-sm:hover {
        opacity: 0.9;
        transform: scale(1.03);
    }

    .btn-warning:hover {
        background-color: #e0a800;
        border-color: #d39e00;
    }

    .btn-danger:hover {
        background-color: #c82333;
        border-color: #bd2130;
    }

    /* Responsive breakpoints */
    @media (max-width: 1200px) {
        .product-card-wrapper {
            flex: 0 0 calc((100% - 40px) / 3); /* 3 thẻ mỗi hàng */
        }
    }

    @media (max-width: 768px) {
        .product-card-wrapper {
            flex: 0 0 calc((100% - 20px) / 2); /* 2 thẻ mỗi hàng */
        }
    }

    @media (max-width: 576px) {
        .product-card-wrapper {
            flex: 0 0 100%; /* 1 thẻ mỗi hàng */
        }
    }
</style>

<h1 class="mb-4">Danh sách sản phẩm</h1>
<a href="/webbanhang/Product/add" class="btn btn-success mb-4">Thêm sản phẩm mới</a>

<!-- Sử dụng container-fluid để mở rộng vùng hiển thị -->
<div class="container-fluid px-4">
    <div class="product-list">
        <?php foreach ($products as $product): ?>
            <div class="product-card-wrapper">
                <a href="/webbanhang/Product/show/<?php echo $product->id; ?>" class="product-card">
                    <div class="card h-100 shadow-sm">
                        <?php if ($product->image): ?>
                            <img src="/webbanhang/<?php echo $product->image; ?>" class="card-img-top" alt="Product Image">
                        <?php endif; ?>
                        <div class="card-body">
                            <h5 class="card-title">
                                <?php echo htmlspecialchars($product->name, ENT_QUOTES, 'UTF-8'); ?>
                            </h5>
                            <p class="card-text text-truncate" title="<?php echo htmlspecialchars($product->description, ENT_QUOTES, 'UTF-8'); ?>">
                                <?php echo htmlspecialchars($product->description, ENT_QUOTES, 'UTF-8'); ?>
                            </p>
                            <p class="mb-1"><strong>Giá:</strong> <?php echo htmlspecialchars($product->price, ENT_QUOTES, 'UTF-8'); ?> VND</p>
                            <p class="mb-3"><strong>Danh mục:</strong> <?php echo htmlspecialchars($product->category_name, ENT_QUOTES, 'UTF-8'); ?></p>
                            <div class="mt-auto d-flex justify-content-between">
                                <a href ="/webbanhang/Product/addToCart/ <?php echo $product->id; ?>" class="btn btn-primary" >Thêm giỏ hàng</a>
                                <a href="/webbanhang/Product/edit/<?php echo $product->id; ?>" class="btn btn-warning btn-sm" onclick="event.stopPropagation();">Sửa</a>
                                <a href="/webbanhang/Product/delete/<?php echo $product->id; ?>" class="btn btn-danger btn-sm" onclick="event.stopPropagation(); return confirm('Bạn có chắc chắn muốn xóa sản phẩm này?');">Xóa</a>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?php include 'app/views/shares/footer.php'; ?>
