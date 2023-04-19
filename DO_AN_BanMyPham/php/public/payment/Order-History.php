<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order history</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <div class="container mt-3">
        <h1 class="text-center mb-3">Lịch sử đơn hàng</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Mã đơn hàng</th>
                    <th scope="col">Ngày tạo</th>
                    <th scope="col">Trạng thái</th>
                    <th scope="col">Tổng tiền</th>
                </tr>
            </thead>
            <tbody class="show--order">
                <?php
                    include 'connect_Database.php';

                    $sql = "SELECT EXPORT_ID, DATE_CREATE, TOTAL, STATUS_EX FROM export";
                    $result = mysqli_query($conn, $sql);

                    if(isset($_GET['order_no'])) {
                        if(mysqli_num_rows($result) > 0) {
                            while($row = mysqli_fetch_assoc($result)) {
                                echo    '<tr>
                                            <th scope="row">'. $row["EXPORT_ID"] .'</th>
                                            <td>'. $row["DATE_CREATE"] .'</td>
                                            <td>'. $row["TOTAL"] .'</td>
                                            <td>'. $row["STATUS_EX"] .'</td>
                                            <td>
                                                <form method="get">
                                                    <input type="hidden" name="order_no" value="'. $row["EXPORT_ID"] .'">
                                                    <button type="submit" class="btn btn-danger">Hủy đơn hàng</button>
                                                </form>
                                            </td>
                                        </tr>';
                            }
                        }
                    }
                    mysqli_close($conn);
                ?>
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <script src="../assets/js/indexProduct.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>