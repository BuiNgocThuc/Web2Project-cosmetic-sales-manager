<?php
class connectDB
{
    public function connection($sql = '')
    {
        $conn = mysqli_connect("localhost", "root", "", "quanlybanmypham");
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        mysqli_query($conn, "SET NAMES 'utf8'");
        $query = mysqli_query($conn, $sql);
        // if ($query === TRUE) {
        //     echo "New record created successfully";
        // } else {
        //     echo "Error: " . $sql . "<br>" . $conn->error;
        // }
        mysqli_close($conn);
        return $query;
    }
}
?>
