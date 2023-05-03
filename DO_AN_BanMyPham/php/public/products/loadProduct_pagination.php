<?php
require '../../connectDB.php';
$db = new connectDB();
$priceValue = $_POST['priceValue']; //khoảng giá
if (isset($_POST['sortCategoryArray'])) {
    $sort_cat = $_POST['sortCategoryArray']; //danh mục
} else {
    $sort_cat = array();
}
if (isset($_POST['sortBrandArray'])) {
    $sort_brand = $_POST['sortBrandArray']; //thương hiệu
} else {
    $sort_brand = array();
}
$orderBy = $_POST['orderSort']; //sắp xếp
$char = $_POST['character']; //tìm kiếm
$currentPage = $_POST['currentPage']; //trang hiện tại
$sql = getQuery();
$result = $db->connection($sql);
$product = array();
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        array_push($product, $row);
    }
}
$pagination = new Pagination($product, 8, $currentPage);
?>
<div class="grid__row" id="home__product">
    <?php for ($i = $pagination->startProduct(); $i <= $pagination->endProduct(); $i++) : ?>
        <div class="grid__column-2-4" onclick="loadProductDetails(<?= $product[$i]['PRODUCT_ID'] ?>)">
            <div class="home-product-item" pid="<?= $product[$i]['PRODUCT_ID'] ?>">
                <span onclick="loadProductDetails(<?= $product[$i]['PRODUCT_ID'] ?>)">
                    <img class="home-product-item__img" src="../image/img/<?= $product[$i]['IMG_PRO'] ?>">
                </span>
                <span onclick="loadProductDetails(<?= $product[$i]['PRODUCT_ID'] ?>)">
                    <h4 class="home-product-item__name"> <?= $product[$i]['NAME_PRO'] ?></h4>
                </span>
                <div class="home-product-item__price">
                    <span class="home-product-item__price-current"><?= number_format($product[$i]['PRICE_PRO']) ?>đ</span>
                </div>
                <div class="home-product-item__action">
                    <span class="home-product-item__like home-product-item__like--liked">
                        <i class="home-product-item__like-icon-empty far fa-heart"></i>
                        <i class="home-product-item__like-icon-fill fas fa-heart"></i>
                    </span>
                    <div class="home-product-item__rating">
                        <i class="home-product-item__star-gold fas fa-star"></i>
                        <i class="home-product-item__star-gold fas fa-star"></i>
                        <i class="home-product-item__star-gold fas fa-star"></i>
                        <i class="home-product-item__star-gold fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <span class="home-product-item__sold"><?= $product[$i]['QUANTITY_PRO'] ?> đã bán</span>
                </div>
                <div class="home-product-item__origin">
                    <span class="home-product-item__brand"><?= $product[$i]['NAME_BRAND'] ?></span>
                    <span class="home-product-item__origin-name"><?= $product[$i]['ORIGIN_PRO'] ?></span>
                </div>
            </div>
        </div>

    <?php endfor; ?>
</div>

<div class="pagination__frame">
    <i class="fa-regular fa-chevron-left" onclick="sortProduct(<?php echo $pagination->prevDot(); ?>, <?php echo $orderBy ?>)"></i>
    <ul class="pagination">
        <?php for ($i = 1; $i <= $pagination->quantityPage; $i++) : ?>
            <li class="pagination-item" onclick="sortProduct(<?= $i ?>, <?= $orderBy ?>)">
                <div class="pagination-item__number <?php echo ($i == $currentPage ? "clicked" : ""); ?>"><?= $i ?></div>
            </li>
        <?php endfor; ?>
    </ul>
    <i class="fa-regular fa-chevron-right" onclick="sortProduct(<?php echo $pagination->nextDot(); ?>, <?php echo $orderBy ?>)"></i>
</div>

<?php
function getQuery()
{
    global $priceValue, $sort_cat, $sort_brand, $char, $orderBy;
    $sql = "SELECT * FROM products JOIN brands ON products.BRAND_ID = brands.BRAND_ID ";
    $f = false;
    if ($char != "" || $priceValue != 0 || count($sort_cat) > 0 || count($sort_brand) > 0) {
        $sql .= "WHERE ";
        if ($char != "") {
            $sql .= "NAME_PRO LIKE '%$char%' ";
            $f = true;
        }
        if ($priceValue != 0) {
            if ($f) {
                $sql .= "AND ";
            }
            switch ($priceValue) {
                case 1:
                    $sql .= "PRICE_PRO >= 0 AND PRICE_PRO <= 400000 ";
                    break;
                case 2:
                    $sql .= "PRICE_PRO >= 400000  AND PRICE_PRO <= 700000 ";
                    break;
                case 3:
                    $sql .= "PRICE_PRO >= 700000 AND PRICE_PRO <= 1000000 ";
                    break;
            }
            $f = true;
        }
        if (count($sort_cat) > 0) {
            if ($f) {
                $sql .= "AND ";
            }
            $sql .= "(";
            for ($i = 0; $i < count($sort_cat); $i++) {
                if ($i == count($sort_cat) - 1) {
                    $sql .= "CATEGORY_ID = '$sort_cat[$i]'";
                } else {
                    $sql .= "CATEGORY_ID = '$sort_cat[$i]' OR ";
                }
            }
            $sql .= ")";
            $f = true;
        }
        if (count($sort_brand) > 0) {
            if ($f) {
                $sql .= "AND ";
            }
            $sql .= "(";
            for ($i = 0; $i < count($sort_brand); $i++) {
                if ($i == count($sort_brand) - 1) {
                    $sql .= "products.BRAND_ID = '$sort_brand[$i]'";
                } else {
                    $sql .= "products.BRAND_ID = '$sort_brand[$i]' OR ";
                }
            }
            $sql .= ")";
            $f = true;
        }
    }
    if ($orderBy != 0) {

        $sql .= "ORDER BY ";

        switch ($orderBy) {
            case 1:
                $sql .= "PRICE_PRO ASC ";
                break;
            case 2:
                $sql .= "PRICE_PRO DESC ";
                break;
        }
    }
    return $sql;
}
?>



<?php

class Pagination
{
    public $quantityPerPage;
    public $quantityProduct;
    public $quantityPage;
    public $currentPage;

    public function __construct($array, $quantityPerPage, $currentPage)
    {
        $this->quantityProduct = count($array);
        $this->quantityPerPage = $quantityPerPage;
        $this->quantityPage = ceil($this->quantityProduct / $quantityPerPage);
        $this->currentPage = $currentPage;
    }
    public function startProduct()
    {
        return ($this->currentPage - 1) * $this->quantityPerPage;
    }
    public function endProduct()
    {
        $end = $this->currentPage * $this->quantityPerPage - 1;
        if ($end > $this->quantityProduct - 1) {
            $end = $this->quantityProduct - 1;
        }
        return $end;
    }
    public function nextDot()
    {
        if ($this->currentPage == $this->quantityPage) {
            return $this->quantityPage;
        } else {
            return $this->currentPage + 1;
        }
    }
    public function prevDot()
    {
        if ($this->currentPage == 1) {
            return 1;
        } else {
            return $this->currentPage - 1;
        }
    }
}
