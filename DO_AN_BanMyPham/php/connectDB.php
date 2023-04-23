<?php
class connectDB
    {
        public function connection($sql = '')
        {
            $conn = mysqli_connect("localhost", "root", "", "cosmetics");
            mysqli_query($conn, "SET NAMES 'utf8'");
            $query = mysqli_query($conn, $sql);
            mysqli_close($conn);
            return $query;
        }
        public function getConnection()
        {
            $conn = mysqli_connect("localhost", "root", "", "cosmetics");
            return $conn;
        }
    }
?>
