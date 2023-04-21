<?php
session_start();
if (isset($_POST['idImport'])) {
    echo $_POST['idImport'];
    $_SESSION['IMPORT_ID'] = $_POST['idImport'];
} else {
    echo "Không có idImport";
}