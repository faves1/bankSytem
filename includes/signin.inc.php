<?php
session_start();
    include_once 'dbh.inc.php';



    if (isset($_POST['submit'])) {
        $username = mysqli_real_escape_string($conn, $_POST['username']) ;
        $pwd = mysqli_real_escape_string($conn, $_POST['password']);

        if (empty($username) || empty($pwd)) {
            header("Location: ../loginpage.php?login=empty");
            exit();
        } else {
            $sql = "SELECT * FROM users WHERE user_uid = '$username'";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);
            if ($resultCheck < 1) {
                header("Location: ../loginpage.php?login=error");
                exit();
            }  else {
                if ($row = mysqli_fetch_assoc($result)) {
                    if ($row['user_pwd'] == $pwd) {
                        $_SESSION['u_id'] = $row['user_id'];
                        $_SESSION['u_first'] = $row['user_first'];
                        $_SESSION['u_last'] = $row['user_last'];
                        $_SESSION['u_email'] = $row['user_email'];
                        $_SESSION['u_uid'] = $row['user_uid'];
                        $_SESSION['u_acBal'] = $row['actBalance'];
                        $_SESSION['u_actype'] = $row['actype'];
                        header("Location: ../user.php?login=success");
                        exit();
                    }
                    else {
                        echo '<script>alert("Wrong Password, Try Again!")</script>';
                        header("Location: ../loginpage.php?login=error");
                    }
                }
            }
        }

       
    } else{
        header("Location: ..\loginpage.php?login=error");
        exit();

    }
    

   