<?php
session_start();
    include_once 'dbh.inc.php';
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    //Load Composer's autoloader
    require 'C:\xampp\htdocs\trinex\vendor\autoload.php';

if  (isset($_POST['submit'])) {
    // Get the withdrawal amount from the form
    $firstname = $_POST["fname"];
    $lastname= $_POST["lname"];
    $uname= $_POST["uname"];
    $email= $_POST["email"];
    $country = $_POST["country"];
    $dob = $_POST["dob"];
    $gender= $_POST["gen"];
    $phonenum= $_POST["num"];
    $countryCode = $_POST['countryCode'];
    $pword= $_POST["password"];
    $rpword= $_POST["rpassword"];
    $acct= $_POST["acct"];
    $phoneNumber = "+".$countryCode . $phonenum;

    
     //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'fayvehz@gmail.com';                     //SMTP username
        $mail->Password   = 'ceal qhki adgf cqdd ';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('fayvehz@gmail.com', 'Mailer');
        $mail->addAddress($email, $firstname);     //Add a recipient
    
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $verCode = substr(number_format(time() * rand(), 0, '', ''), 0, 6);
        $mail->Subject = 'Email Verification';
        $mail->Body    = '<p>Your verification code is: <b style="font-size: 30px;">' . $verCode . '</b></p>';
        

        $mail->send();
        echo 'Message has been sent';
        if ($pword == $rpword){
            $sql = "INSERT INTO users (`user_first`, `user_last`, `user_email`, `user_uid`, `user_pwd`, `gender`, `country`, `dob`, `phonenum`, `actype`,`verify`)
        values ('$firstname','$lastname','$email','$uname','$pword','$gender','$country','$dob','$phoneNumber','$acct','$verCode')";
        $result = mysqli_query($conn, $sql);
                        $_SESSION['u_first'] = $firstname;
                        $_SESSION['u_last'] = $lastname;
                        $_SESSION['u_email'] = $email;
                        $_SESSION['u_uid'] = $uname;
                        header("Location: ../otp.php?login=success");
                        exit();
                    
                
        }
        else {
            echo '<script>alert("Password do not match!")</script>';
        }
            
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }


    
        
    
}
?>