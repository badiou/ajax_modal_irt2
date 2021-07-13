//dbcon.php
<?php
$conn = new mysqli('localhost','root','','db_ajaxmodal');
if ($conn->connect_error) {
    die('Error : ('. $conn->connect_errno .') '. $conn->connect_error);
}
?>