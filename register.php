<?php
include_once "layouts/header.php";
include_once "layouts/nav.php ";
include_once "app/validations/userValidation.php";

include_once "app/models/User.php";

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
require 'vendor/autoload.php';

if (isset($_POST['submit'])) {

    $errors = [];
    $validation = new userValidation;

    $validation->setPassword($_POST['password']);
    $validation->setConfirm($_POST['confirmPassword']);
    $passwordValidation = $validation->passwordValidation();

    $validation->setEmail($_POST['email']);
    $emailValidation = $validation->emailValidation();

    if (empty($emailValidation) and empty($passwordValidation)) {
        $user = new User;

        $user->setName($_POST['name']);
        $user->setPassword($_POST['password']);
        $user->setEmail($_POST['email']);
        $user->setPhone($_POST['phone']);
        $user->setGender($_POST['gender']);
        $code = rand(10000, 99999);
        // print_r(($code));
        $user->setCode($code);
        $result = $user->insertData();
        if ($result) {

            //Import PHPMailer classes into the global namespace
            //These must be at the top of your script, not inside a function

            //Load Composer's autoloader

            //Create an instance; passing `true` enables exceptions
            $mail = new PHPMailer(true);

            try {
                //Server settings
                $mail->SMTPDebug = SMTP::DEBUG_SERVER; //Enable verbose debug output
                $mail->isSMTP(); //Send using SMTP
                $mail->Host = 'smtp.example.com'; //Set the SMTP server to send through
                $mail->SMTPAuth = true; //Enable SMTP authentication
                $mail->Username = 'user@example.com'; //SMTP username
                $mail->Password = 'secret'; //SMTP password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; //Enable implicit TLS encryption
                $mail->Port = 465; //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

                //Recipients
                $mail->setFrom('from@example.com', 'Mailer');
                $mail->addAddress('joe@example.net', 'Joe User'); //Add a recipient
                $mail->addAddress('ellen@example.com'); //Name is optional
                $mail->addReplyTo('info@example.com', 'Information');
                $mail->addCC('cc@example.com');
                $mail->addBCC('bcc@example.com');

                //Attachments
                $mail->addAttachment('/var/tmp/file.tar.gz'); //Add attachments
                $mail->addAttachment('/tmp/image.jpg', 'new.jpg'); //Optional name

                //Content
                $mail->isHTML(true); //Set email format to HTML
                $mail->Subject = 'Here is the subject';
                $mail->Body = 'This is the HTML message body <b>in bold!</b>';
                $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

                $mail->send();
                echo 'Message has been sent';
            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }
            header('location:check-code.php');

        } else {
            $errors['something'] = "<div class='alert alert-danger>Something went wrong</div>";
        }
    }

}

?>



        <!-- Breadcrumb Area Start -->
        <div class="breadcrumb-area bg-image-3 ptb-150">
            <div class="container">
                <div class="breadcrumb-content text-center">
					<h3>REGISTER</h3>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li class="active">register</li>
                    </ul>
                </div>
            </div>
        </div>
		<!-- Breadcrumb Area End -->
        <div class="login-register-area ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-12 ml-auto mr-auto">
                        <div class="login-register-wrapper">
                            <div class="login-register-tab-list nav">
                                <a class="active" data-toggle="tab" href="#lg2">
                                    <h4> register </h4>
                                    <?php if (isset($errors) && $errors) {
    foreach ($errors as $key => $value) {
        echo $value;
    }
}?>
                                </a>
                            </div>

                                <div id="lg2" class="tab-pane active">
                                    <div class="login-form-container">
                                        <div class="login-register-form">
                                            <form   method="POST">
                                                <input type="text" name="name" placeholder="Username">
                                                <input name="email" placeholder="Email" type="email">
                                               <?php
if (isset($emailValidation) && !empty($emailValidation)) {
    foreach ($emailValidation as $key => $value) {
        echo $value;
    }
}
?>
                                                <input type="phone" name="phone" placeholder="Phone" >
                                                <input type="password" name="password" placeholder="Password">
                                                <?php
if (isset($passwordValidation) && !empty($passwordValidation)) {
    foreach ($passwordValidation as $key => $value) {
        echo $value;
    }
}
?>
                                                <input type="password" name="confirmPassword" placeholder="Confirm Password">
                                                <select name="gender" class="form-control mb-4" id="">
                                                    <option value="m">Male</option>
                                                    <option value="f">Female</option>
                                                </select>
                                                <div class="button-box">
                                                    <button type="submit" name="submit"><span>Register</span></button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




 <?php include_once "layouts/footer.php ";?>

