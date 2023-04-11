<?php
    include 'connect_Database.php';

    $sql_total = "SELECT COUNT(*) as total FROM products";
    $result_total = mysqli_query($conn,$sql_total);
    $row_total = mysqli_fetch_assoc($result_total);
    $total_record = $row_total['total'];
    
    $total_pages = ceil($total_record/$limit_per_page);
    if ($total_pages > 1) {
        for ($i = 1; $i <= $total_pages; $i++) {
            echo '<li class="pagination-item" id="'. $i .'">';
            if ($i == $page) {
                echo  '<div class="pagination-item__link pagination-item__link--active">' . $i . '</div>';
            } 
            else {
                echo '<div id="' . $i . '" class="pagination-item__link">' . $i . '</div>';
            }
            echo '</li>';
        }
    }

    mysqli_close($conn);
?>
