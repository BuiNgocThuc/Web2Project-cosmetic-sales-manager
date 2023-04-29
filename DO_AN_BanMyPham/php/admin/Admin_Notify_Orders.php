<span class="count-notify">
    <?php
    require_once 'connectDB.php';
    $db = new ConnectDB();
    $sql = "SELECT * FROM export WHERE STATUS_EX = 'đang chờ'";
    $result = $db->connection($sql);
    $count = mysqli_num_rows($result);
    echo $count;
    ?>
</span>
<ul class="notification">
    <?php
    require_once 'connectDB.php';
    $db = new ConnectDB();
    $sql = "SELECT EXPORT_ID FROM export WHERE STATUS_EX = 'đang chờ'";
    $result = $db->connection($sql);
    while ($row = mysqli_fetch_array($result)) {
        echo '<li>
                                    <span>Đơn hàng ' . $row['EXPORT_ID'] . ' đang chờ xác nhận</span>
                                    <button class="btnConfirmExport" data-id="' . $row['EXPORT_ID'] . '">Xác nhận</button>
                                </li>';
    }
    ?>
</ul>