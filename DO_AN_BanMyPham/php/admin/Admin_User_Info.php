<?php
include_once("ConnectDB.php");
$db = new ConnectDB();

$name = $_SESSION['NAME'];

$userID = $_SESSION['USERNAME'];
$sql = "SELECT NAME_TYPE_USER FROM type_users
                    join users on type_users.TYPE_USER_ID = users.TYPE_USER_ID
                    where users.USER_ID = '" . $userID . "'";
$result = $db->connection($sql);
while ($row = mysqli_fetch_array($result)) {
    $type = $row['NAME_TYPE_USER'];
    echo '<div class="user__avatar">
                        <img src="../image/avatar.png">
                    </div>
                    <div class="user__info">
                    <h3>' . $name . '</h3>
                    <small>' . $type . '</small>
                    </div>';
}
