<?php
    include 'connect_Database.php';

    $limit_per_page = 8;
    $sql_total = "SELECT COUNT(*) as total FROM products WHERE STATUS_PRO NOT IN ('đã xóa')";
    $result_total = mysqli_query($conn,$sql_total);
    $row_total = mysqli_fetch_assoc($result_total);
    $total_record = $row_total['total'];
    
    $page = $_GET['page_no'];
    $total_pages = ceil($total_record/$limit_per_page);
    
    if ($total_pages > 1) { 
        if ($page > 1) {
            echo    '<li class="pagination-item pagination-item--prev" pageid="' . ($page - 1) . '">
                        <div class="pagination-item__link pagination-item__fontsize--text">
                            <i class="fas fa-angle-left"></i>
                        </div>
                    </li>';
        } else {
            echo    '<li class="pagination-item pagination-item--prev pagination-item--disabled">
                        <div class="pagination-item__link pagination-item__fontsize--text">
                            <i class="fas fa-angle-left"></i>
                        </div>
                    </li>';
        }

        for ($i = 1; $i <= $total_pages; $i++) {
            echo '<li class="pagination-item" pageid="'. $i .'">';
            if ($i == $page) {
                echo  '<div class="pagination-item__link pagination-item__link--active" pageid="'.$i.'">' . $i . '</div>';
            } 
            else {
                echo '<div pageid="' . $i . '" class="pagination-item__link">' . $i . '</div>';
            }
            echo '</li>';
        }

        if ($page < $total_pages) {
            echo    '<li class="pagination-item pagination-item--next" pageid="' . ($page + 1) . '">
                        <div class="pagination-item__link pagination-item__fontsize--text">
                            <i class="fas fa-angle-right"></i>
                        </div>
                    </li>';
        } else {
            echo    '<li class="pagination-item pagination-item--next pagination-item--disabled">
                        <div class="pagination-item__link pagination-item__fontsize--text">
                            <i class="fas fa-angle-right"></i>
                        </div>
                    </li>';
        }
    }

    // mysqli_close($conn);
?>
