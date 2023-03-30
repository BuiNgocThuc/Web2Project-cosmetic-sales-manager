<div id="fix-brand">
        <i onclick="hiddenForm()" style="cursor: pointer;" class="fa-sharp fa-light fa-xmark" id="close"></i>
        <div class="title">cập nhật thương hiệu</div>
        <form action="" class="content">
            <div>
                <label for="" class="name-brand">tên thương hiệu: </label>
                <input class="textfield" type="text">
            </div>
            <div>
                <label for="" class="img-brand">hình ảnh: </label>
                <label for="file-input" class="image-upload">
                    <input id="file-input" type="file" accept="image/png,img/jpg,img/jpeg">
                    <label for="file-input" class="icon-upload">
                        <i class="fa-duotone fa-plus fa-2xl"></i>
                        <span>đăng tải</span>
                    </label>
                </label>
            </div>
            <div>
                <label for="">Trạng Thái: </label>
                <input type="checkbox" class="switch" data-content="ngừng hoạt động" onclick="changeDataContent()">
            </div>
        </form>
        <div class="tool">
            <button class="btnAdd btn">Cập nhật</button>
            <button class="btnRemove btn">Hủy Bỏ</button>
        </div>
    </div>