<div class="app" id="main-listProduct">
    <div class="app__container">
        <div class="app__container__name-shop">Cửa Hàng</div>
        <div class="grid">
            <div class="grid__row app__content">
                <div class="grid__column-3">
                    <nav class="category" id="navbar">
                        <div class="classification">
                            <span class="category-list-title">Danh mục</span>
                            <ul class="category-list" id="list__category">
                            <?php
                                require 'connectDB.php';
                                $db = new connectDB();
                                $sql = "SELECT * FROM category WHERE STATUS_CAT NOT IN ('đã xóa')";
                                $result = $db->connection($sql);
                                if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_array($result)) {
                                        echo '<li class="category-item">
                                        <input type="checkbox" class="category-item__checkbox sort_checkbox" id="category-item__checkbox"c value="' . $row['CATEGORY_ID'] . '">
                                        <span>' . $row["NAME_CAT"] . '</span>
                                        </li>';
                                    }
                                }
                                ?>
                            </ul>

                            <span class="category-list-title">Thương hiệu</span>
                            <ul class="brand-list category-list" id="list__brand">
                                <?php
                                $sql = "SELECT * FROM brands WHERE STATUS_BRAND NOT IN ('đã xóa')";
                                $result = $db->connection($sql);
                                if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_array($result)) {
                                        echo '<li class="brand-item">
                                        <input type="checkbox" class="brand-item__checkbox sort_checkbox" id="brand-item__checkbox" value="' . $row['BRAND_ID'] . '">
                                        <span>' . $row["NAME_BRAND"] . '</span>
                                        </li>';
                                    }
                                }
                                ?>
                            </ul>
                        </div>
                    </nav>
                </div>

                <div class="grid__column-9">
                    <div class="select__search">
                        <select name="" id="sortPrices">
                            <option value="0">Sắp xếp giá</option>
                            <option value="1">Từ thấp đến cao</option>
                            <option value="2">Từ cao đến thấp</option>
                        </select>
                        <div class="priceSegment tooltips">
                            <input type="range" id="price" name="price" min="0" max="3" value="0" list="mark" step="1">
                            <i class="fa-duotone fa-coin"></i>
                            <span class="tooltiptext">ALL</span>
                        </div>
                        <datalist id="mark">
                            <option value="0"></option>
                            <option value="1"></option>
                            <option value="2"></option>
                            <option value="3"></option>
                        </datalist>
                    </div>
                    <!-- Show Products -->
                    <div class="home-product">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>