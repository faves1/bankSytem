<?php
session_start();
    include_once 'dbh.inc.php';

if  (isset($_POST['pay'])) {
    // Get the withdrawal amount from the form
    $withdrawalAmount = $_POST["amount"];
    $acctDes = $_POST["acctDes"];
    $acctAddress = $_POST["dest"];
    $reasonFor = $_POST["reason"];


    $sql = "INSERT INTO transtab(`acNo`, `dbAmt`, `tranDetails`, `transInfo`) values ('$acctAddress','$withdrawalAmount','$acctDes','$reasonFor')";
    $result = mysqli_query($conn, $sql);

    $_SESSION['u_id'] = $row['user_id'];
    $_SESSION['u_first'] = $row['user_first'];
    $_SESSION['u_last'] = $row['user_last'];
    $_SESSION['u_email'] = $row['user_email'];
    $_SESSION['u_uid'] = $row['user_uid'];
    $_SESSION['u_acBal'] = $row['actBalance'];
    header("Location: ../user.php?login=success");
    exit();
}
?>
