<body class="grey darken-4">
  <?php include 'app/views/shares/header.php'; ?>

  <div class="container" style="margin-top: 30px; margin-bottom: 50px;">
    <div class="row">
      <div class="col s12 m8 offset-m2">

        <div class="card grey darken-3">
          <div class="card-content blue darken-2 white-text">
            <span class="card-title">Chỉnh sửa sản phẩm</span>
          </div>

          <?php if (!empty($errors)): ?>
            <div class="card-panel red lighten-2 white-text" style="margin: 15px;">
              <ul class="browser-default">
                <?php foreach ($errors as $error): ?>
                  <li><?php echo htmlspecialchars($error, ENT_QUOTES, 'UTF-8'); ?></li>
                <?php endforeach; ?>
              </ul>
            </div>
          <?php endif; ?>

          <div class="card-content white-text">
            <form method="POST" action="/webbanhang/Product/update" enctype="multipart/form-data">

              <input type="hidden" name="id" value="<?php echo $product->id; ?>">
              <input type="hidden" name="existing_image" value="<?php echo htmlspecialchars($product->image, ENT_QUOTES, 'UTF-8'); ?>">

              <div class="input-field">
                <input id="name" name="name" type="text" class="validate white-text" value="<?php echo htmlspecialchars($product->name, ENT_QUOTES, 'UTF-8'); ?>" required>
                <label for="name" class="active white-text">Tên sản phẩm</label>
              </div>

              <div class="input-field">
                <textarea id="description" name="description" class="materialize-textarea white-text" required><?php echo htmlspecialchars($product->description, ENT_QUOTES, 'UTF-8'); ?></textarea>
                <label for="description" class="active white-text">Mô tả</label>
              </div>

              <div class="row">
                <div class="input-field col s12 m6">
                  <input id="price" name="price" type="number" step="0.01" class="validate white-text" value="<?php echo $product->price; ?>" required>
                  <label for="price" class="active white-text">Giá (VND)</label>
                </div>

                <div class="input-field col s12 m6">
                  <select id="category_id" name="category_id" class="white-text" required>
                    <?php foreach ($categories as $category): ?>
                      <option value="<?php echo $category->id; ?>" <?php echo ($product->category_id == $category->id) ? 'selected' : ''; ?>>
                        <?php echo htmlspecialchars($category->name, ENT_QUOTES, 'UTF-8'); ?>
                      </option>
                    <?php endforeach; ?>
                  </select>
                  <label for="category_id" class="white-text">Danh mục</label>
                </div>
              </div>

              <div class="file-field input-field">
                <div class="btn blue darken-1">
                  <span>Hình ảnh (nếu muốn thay)</span>
                  <input id="image" name="image" type="file" accept="image/*" />
                </div>
                <div class="file-path-wrapper">
                  <input class="file-path validate" type="text" placeholder="Chọn file hình ảnh mới" />
                </div>
              </div>

              <?php if (!empty($product->image)): ?>
                <div class="card-panel grey darken-2 white-text" style="margin-top: 15px;">
                  <span>Hình ảnh hiện tại:</span><br />
                  <img src="/webbanhang/uploads/<?php echo htmlspecialchars($product->image, ENT_QUOTES, 'UTF-8'); ?>" alt="Ảnh sản phẩm" class="responsive-img" style="max-height: 160px; margin-top: 10px; border-radius: 6px;">
                </div>
              <?php endif; ?>

              <div class="right-align" style="margin-top: 30px;">
                <a href="/webbanhang/Product/list" class="btn-flat grey-text text-lighten-3" style="margin-right: 15px;">
                  Quay lại
                </a>
                <button type="submit" class="btn blue darken-1 waves-effect waves-light">
                  Cập nhật sản phẩm
                  <i class="material-icons right">send</i>
                </button>
              </div>

            </form>
          </div>
        </div>

      </div>
    </div>
  </div>

  <?php include 'app/views/shares/footer.php'; ?>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      var elemsSelect = document.querySelectorAll('select');
      M.FormSelect.init(elemsSelect);
    });
  </script>
</body>
