<div class="app" id="main-listProduct">
    <div class="app__container">
        <div class="app__container__name-shop">shop</div>

        <div class="grid">
            <div class="grid__row app__content">
                <div class="grid__column-3">
                    <nav class="category">
                        <h3 class="home__page">Trang chủ
                            <b>/</b>
                            <a href="#" class="shop__page">Shop</a>
                        </h3>

                        <div class="classification">
                            <span class="category-list-title">Danh mục</span>
                            <ul class="category-list" id="list__category">
                                
                            </ul>

                            <span class="category-list-title">Thương hiệu</span>
                            <ul class="category-list" id="list__brand">

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
                    </div>
                    <!-- Show Products -->
                    <div class="home-product">
                        <div class="grid__row" id="home__product">

                        </div>
                    </div>

                    <!-- pagination -->
                    <ul class="pagination home-product__pagination" id="number-page">

                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
