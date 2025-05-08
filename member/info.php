<?php
    require_once "include/header.php";
    require_once "include/db.php";

    $sql =  "select * from members where userid = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt,"s",$userID);
    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt); 
    $user = mysqli_fetch_assoc($result); //연관배열을 던져준다....
    
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
?>
<h2 class="my-5">INFO</h2>
<table class="table">
    <colgroup>
        <col style="width:20%">
        <col>
    </colgroup>
    <tbody>
        <tr>
            <th>User Name</th>
            <td><?=$user["username"]?></td>
        </tr>
        <tr>
            <th>Email</th>
            <td><?=$user["userEmail"]?></td>
        </tr>
        <tr>
            <th>Level1</th>
            <td><?=$user["level"]?></td>
        </tr>
        <tr>
            <th>Point</th>
            <td><?=$user["point"]?></td>
        <tr>
    </tbody>
</table>
<?php
    require_once "include/footer.php";
?>
