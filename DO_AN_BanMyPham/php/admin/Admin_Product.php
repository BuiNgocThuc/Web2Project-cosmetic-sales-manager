<main id="Admin_Product" data-content="Danh sách Sản Phẩm">
    <div class="overlay">

    </div>
    <div class="new-form">
        <!-- -----Create Form ------ -->
        <div id="create-form" style="display: none;">
            <i onclick="hiddenForm()" style="cursor: pointer;" class="fa-sharp fa-light fa-xmark" id="close"></i>
            <div class="title">Thêm sản phẩm Mới</div>
            <form action="" class="content">
                <div>
                    <label for="" class="name-product">tên sản phẩm: </label>
                    <input class="textfield new-name" type="text">
                </div>
                <div>
                    <label for="" class="brand-product">tên thương hiệu: </label>
                    <select class="textfield new-brand">
                        <?php
                        require_once("connectDB.php");
                        $db = new ConnectDB();
                        $sql = "SELECT * FROM brands WHERE STATUS_BRAND NOT IN ('đã xóa') AND STATUS_BRAND NOT IN ('ngừng hoạt động')";
                        $result = $db->connection($sql);
                        while ($row = mysqli_fetch_array($result)) {
                            echo '<option value="' . $row['BRAND_ID'] . '">' . $row['NAME_BRAND'] . '</option>';
                        }
                        ?>
                    </select>
                </div>
                <div>
                    <label for="" class="category-product">tên danh mục: </label>
                    <select class="textfield new-category">
                        <?php
                        require_once("connectDB.php");
                        $db = new ConnectDB();
                        $sql = "SELECT * FROM category WHERE STATUS_CAT NOT IN ('đã xóa') AND STATUS_CAT NOT IN ('ngừng hoạt động')";
                        $result = $db->connection($sql);
                        while ($row = mysqli_fetch_array($result)) {
                            echo '<option value="' . $row['CATEGORY_ID'] . '">' . $row['NAME_CAT'] . '</option>';
                        }
                        ?>
                    </select>
                </div>
                <div>
                    <label for="" class="origin-product">xuất xứ: </label>
                    <input class="textfield new-original" type="text">
                </div>
                <div>
                    <label for="" class="img-product">hình ảnh: </label>
                    <div class="image-upload">
                        <input id="file-input" class="new-img" type="file" accept="image/*">
                        <label for="" class="icon-upload">
                            <i class="fa-duotone fa-plus fa-2xl"></i>
                            <span>đăng tải</span>
                        </label>
                        <img id="image-preview" src="#" alt="" style="display: none" />
                    </div>
                </div>
            </form>
            <div class="tool">
                <button class="btnConfirm btn" onclick="AddInfo('Product')">Thêm</button>
                <button class="btnCancel btn">Hủy Bỏ</button>
            </div>
        </div>

        <!-- -----Update Form ------ -->
        <div id="fix-form" style="display: none;">
            <i onclick="hiddenForm()" style="cursor: pointer;" class="fa-sharp fa-light fa-xmark" id="close"></i>
            <div class="title">Cập nhật thương hiệu</div>
            <form action="" class="content">
                <div>
                    <label for="" class="name-product">tên sản phẩm: </label>
                    <input class="textfield NAME_OBJECT" type="text">
                </div>
                <div>
                    <label for="" class="brand-product">tên thương hiệu: </label>
                    <select class="textfield BRAND_OBJECT">
                        <?php
                        require_once("connectDB.php");
                        $db = new ConnectDB();
                        $sql = "SELECT * FROM brands WHERE STATUS_BRAND NOT IN ('đã xóa') AND STATUS_BRAND NOT IN ('ngừng hoạt động')";
                        $result = $db->connection($sql);
                        while ($row = mysqli_fetch_array($result)) {
                            echo '<option value="' . $row['NAME_BRAND'] . '" data-content="' . $row['BRAND_ID'] . '">' . $row['NAME_BRAND'] . '</option>';
                        }
                        ?>
                    </select>
                </div>
                <div>
                    <label for="" class="category-product">tên danh mục: </label>
                    <select class="textfield CATEGORY_OBJECT">
                        <?php
                        require_once("connectDB.php");
                        $db = new ConnectDB();
                        $sql = "SELECT * FROM category WHERE STATUS_CAT NOT IN ('đã xóa') AND STATUS_CAT NOT IN ('ngừng hoạt động')";
                        $result = $db->connection($sql);
                        while ($row = mysqli_fetch_array($result)) {
                            echo '<option value="' . $row['NAME_CAT'] . '"data-content="' . $row['CATEGORY_ID'] . '">' . $row['NAME_CAT'] . '</option>';
                        }
                        ?>
                    </select>
                </div>
                <div>
                    <label for="" class="price-product">đơn giá: </label>
                    <input class="textfield PRICE_OBJECT" type="number">
                </div>
                <div>
                    <label for="" class="origin-product">xuất xứ: </label>
                    <input class="textfield ORIGINAL_OBJECT" type="text">
                </div>
                <div>
                    <label for="" class="img-product">hình ảnh: </label>
                    <div class="image-upload">
                        <!-- <label for="" class="icon-upload">
                            <i class="fa-duotone fa-plus fa-2xl"></i>
                            <span>đăng tải</span>
                        </label> -->
                        <img id="image-preview" src="#" alt="No Image" />
                        <input id="file-input" class="IMG_OBJECT" type="file" accept="image/*">
                        <button></button>
                    </div>
                </div>
                <div>
                    <label for="">Trạng Thái: </label>
                    <input type="checkbox" class="switch" data-content="ngừng hoạt động" onclick="changeDataContent(this)">
                </div>
            </form>
            <div class="tool">
                <button class="btnConfirm btn" onclick="UpdateInfo('Product')" data-content="">Cập nhật</button>
                <button class="btnCancel btn" onclick="hiddenForm()">Hủy Bỏ</button>
            </div>
        </div>

        <!-- -----Delete Form ------ -->
        <div id="delete-form" style="display: none;">
            <i onclick="hiddenForm()" style="cursor: pointer;" class="fa-sharp fa-light fa-xmark" id="close"></i>
            <div class="title">Xóa thương hiệu</div>
            <p class="warning"> Bằng cách xác nhận xóa sản phẩm này, bạn không thể nhập hoặc bán sản phẩm này nữa</p>
            <div class="tool">
                <button class="btnConfirm btn" onclick="DeleteInfo('Product')">Xóa</button>
                <button class="btnCancel btn" onclick="hiddenForm()">Hủy Bỏ</button>
            </div>
        </div>
    </div>
    <div class="form-container">
        <div class="title-form">
            <h3 for="">tùy chọn tìm kiếm</h3>
            <span><i onclick="changeIconArrow(this), hideForm()" class="fa-regular fa-angle-up"></i></span>
        </div>
        <div class="fix-info">
            <div>
                <label for="">Mã Sản Phẩm</label>
                <input class="textfield ID_PRODUCT_SEARCH" type="text">
            </div>
            <div>
                <label for="">Tên Sản Phẩm</label>
                <input class="textfield NAME_PRODUCT_SEARCH" type="text">
            </div>
            <div>
                <label for="">danh mục</label>
                <select name="status" class="textfield CATEGORY_PRODUCT_SEARCH">
                    <option value=""></option>
                    <?php
                    require_once("connectDB.php");
                    $db = new ConnectDB();
                    $sql = "SELECT * FROM category WHERE STATUS_CAT NOT IN ('đã xóa')";
                    $result = $db->connection($sql);
                    while ($row = mysqli_fetch_array($result)) {
                        echo '<option value="' . $row['NAME_CAT'] . '">' . $row['NAME_CAT'] . '</option>';
                    }
                    ?>
                </select>
            </div>
            <div>
                <label for="">thương hiệu</label>
                <select name="status" class="textfield BRAND_PRODUCT_SEARCH">
                    <option value=""></option>
                    <?php
                    require_once("connectDB.php");
                    $db = new ConnectDB();
                    $sql = "SELECT * FROM brands WHERE STATUS_BRAND NOT IN ('đã xóa')";
                    $result = $db->connection($sql);
                    while ($row = mysqli_fetch_array($result)) {
                        echo '<option value="' . $row['NAME_BRAND'] . '">' . $row['NAME_BRAND'] . '</option>';
                    }
                    ?>
                </select>
            </div>
            <div>
                <label for="">Trạng Thái</label>
                <input type="checkbox" class="switch STATUS_PRODUCT_SEARCH" data-content="ngừng hoạt động" onclick="changeDataContent(this)">
            </div>
            <div>
                <label for=""></label>
                <button class="btn btn--Search" onclick="SearchInfo('Product')">Tìm Kiếm</button>
                <button class="btn btn--Undo" onclick="loadPageByAjax('Admin_Product')">Hoàn Tác</button>
            </div>
        </div>
    </div>
    <div class="list-container">
        <div class="title-list">
            <h3>danh sách sản phẩm</h3>
            <select class="sort-function object-sort">
                <option value="">cột muốn sắp xếp</option>
                <option value="NAME_OBJECT">tên sản phẩm</option>
                <option value="BRAND_OBJECT">thương hiệu</option>
                <option value="CATEGORY_OBJECT">danh mục</option>
            </select>
            <select class="sort-function">
                <option value="">Sắp xếp theo tiêu đề</option>
                <option value="increase">Sắp xếp tăng dần</option>
                <option value="decrease">Sắp xếp giảm dần</option>
            </select>
            <button class="btnCreate enable">
                <i class="fa-light fa-plus"></i>
                <span>tạo mới</span>
            </button>
        </div>
        <div class="list-code">
            <table class="content-table">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>mã sản phẩm</th>
                        <th>tên sản phẩm</th>
                        <th>tên thương hiệu</th>
                        <th>loại danh mục</th>
                        <th>đơn giá</th>
                        <th>số lượng</th>
                        <th>hình ảnh</th>
                        <th>xuất xứ</th>
                        <th>trạng thái</th>
                        <th>hoạt động</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    require_once("ConnectDB.php");
                    $db = new ConnectDB();
                    $sql = "SELECT *  FROM products
                        join brands on brands.brand_id = products.brand_id
                        join category on category.category_id = products.category_id
                        WHERE STATUS_PRO NOT IN ('đã xóa')";
                    $result = $db->connection($sql);
                    $i = 1;
                    while ($row = mysqli_fetch_array($result)) {
                        $action = ($row['STATUS_PRO'] == 'ngừng hoạt động') ? '' : 'action';
                        echo '<tr>
                                <td>' . $i++ . '</td>
                                <td class="ID_OBJECT">' . $row['PRODUCT_ID'] . '</td>
                                <td class="NAME_OBJECT">' . $row['NAME_PRO'] . '</td>
                                <td class="BRAND_OBJECT">' . $row['NAME_BRAND'] . '</td>
                                <td class="CATEGORY_OBJECT">' . $row['NAME_CAT'] . '</td>
                                <td class="PRICE_OBJECT">' . $row['PRICE_PRO'] . '</td>
                                <td class="QUANTITY_OBJECT">' . $row['QUANTITY_PRO'] . '</td>
                                <td class="IMG_OBJECT">
                                    <div>
                                        <img src="../image/img/' . $row['IMG_PRO'] . '">
                                    </div>    
                                </td>
                                <td class="ORIGINAL_OBJECT">' . $row['ORIGIN_PRO'] . '</td>
                                <td class="STATUS_OBJECT">' . $row['STATUS_PRO'] . '</td>
                                <td>
                                    <button class="btnFix ' . $action . '">chỉnh sửa</button>
                                    <button class="btnDel">xóa</button>
                                </td>
                            </tr>';
                    }
                    echo '<script>
                        if($(".sidebar .product_per").hasClass("Create")) {
                            $(".btnCreate").addClass("enable");
                        }
                        if($(".sidebar .product_per").hasClass("Update")) {
                            $(".btnFix").addClass("enable");
                        }
                        if($(".sidebar .product_per").hasClass("Delete")) {
                            $(".btnDel").addClass("enable");
                        }
                        if($(".sidebar .product_per").hasClass("Control")) {
                            $(".btnFix").addClass("enable");
                            $(".btnCreate").addClass("enable");
                            $(".btnDel").addClass("enable");
                        }
                    </script>'
                    ?>
                </tbody>

            </table>
        </div>
    </div>
</main>