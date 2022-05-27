<?php
include_once "layouts/header.php";
include_once "layouts/nav.php ";
include_once "app/validations/userValidation.php";
 
// include_once "app/models/User.php";

if (isset($_POST['submit'])) {

    
    $errors = [];
    $validation = new userValidation;

    $validation->setPassword($_POST['password']);
    $validation->setConfirm($_POST['confirmPassword']);
    $passwordValidation = $validation->passwordValidation();

    $validation->setEmail($_POST['email']);
    $emailValidation = $validation->emailValidation();

    if(empty($emailValidation) AND empty($passwordValidation)){
        // $user = new User;
        echo 5454;
        // $user->setName($_POST['name']);
        // $user->setPassword($_POST['password']);
        // $user->setPhone($_POST['phone']);
        // $user->setEmail($_POST['email']);
 

        // $user->insertData();
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
                                </a>
                            </div>
   
                                <div id="lg2" class="tab-pane active">
                                    <div class="login-form-container">
                                        <div class="login-register-form">
                                            <form   method="POST">
                                                <input type="text" name="name" placeholder="Username">
                                                <input name="email" placeholder="Email" type="email">
                                               <?php
                                                if(isset($emailValidation) && !empty($emailValidation)){
                                                    foreach($emailValidation as $key=>$value)
                                                    {
                                                        echo $value;
                                                    }
                                                }
                                                ?>
                                                <input type="phone" placeholder="Phone" >
                                                <input type="password" name="password" placeholder="Password">
                                                <?php
                                                if(isset($passwordValidation) && !empty($passwordValidation)){
                                                    foreach($passwordValidation as $key=>$value)
                                                    {
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

        


 <?php       include_once "layouts/footer.php "; ?> 
  
