<?php
    include 'connect_Database.php';

    $limit_per_page = 8;
    $sql_total = "SELECT COUNT(*) as total FROM products";
    $result_total = mysqli_query($conn,$sql_total);
    $row_total = mysqli_fetch_assoc($result_total);
    $total_record = $row_total['total'];
    
    $page = $_GET['page_no'];
    $total_pages = ceil($total_record/$limit_per_page);
    if ($total_pages > 1) {
        for ($i = 1; $i <= $total_pages; $i++) {
            echo '<li class="pagination-item" pageid="'. $i .'">';
            if ($i == $page) {
                echo  '<div class="pagination-item__link pagination-item__link--active">' . $i . '</div>';
            } 
            else {
                echo '<div pageid="' . $i . '" class="pagination-item__link">' . $i . '</div>';
            }
            echo '</li>';
        }
    }
    

    // mysqli_close($conn);
?>