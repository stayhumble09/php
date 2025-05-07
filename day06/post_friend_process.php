<?php

$user_name = $_POST["userName"];
$address = $_POST["address"];
$tel = $_POST["tel"];
$servername = "localhost";
$username = "humble9";
$password = "1234";
$db = "sample03";
$conn = mysqli_connect($servername, $username, $password, $db);
if (!$conn) {
    die("연결오류: " . mysqli_connect_error());
}
$sql = "insert into frined values (null, '$user_name','$tel','$address')";
$result = mysqli_query($conn, $sql);
if($result) {
    echo "insert 성공";
} else {
    echo "insert 실패";
}
mysqli_close($conn);
//echo "연결 성공";
?>