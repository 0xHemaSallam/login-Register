<?php  include('inc/header.php');  
 require_once('functions/validation.php');

require_once('inc/db.php'); ?>
<?php if(isset($_SESSION['user_name'])) header('location:index.php');?>

<?php

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];
    if(checkEmpty($name) and checkEmpty($email) and checkEmpty($password) ){
            if(validEmail($email)){
                $hashed_password = password_hash($password,PASSWORD_DEFAULT);
                $sql = "INSERT INTO users (`name`,`email`,`mobile`,`password`) VALUES (?,?,?,?)";
                $stmt = $pdo->prepare($sql);
                $stmt->execute([$name,$email,$mobile,$hashed_password]);
                $success_message = "Add Success";
                header( "refresh:2");
            }else{
                $error_message = "Please Type Correct email";
            }
    }else{
        $error_message = "Please Fill All Filds";
    }
    
}
?>


    <div class="container ">
        <div class="row">
            <div class="col-12 ">
                <h1 class="text-center display-4 border my-5 p-2"> Register</h1>
            </div>
            <?php require 'functions/messages.php'; ?>
            <div class="col-sm-6 mx-auto">
                <div class="border p-5 my-3">
                    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST">
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" placeholder="Your Name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="email" placeholder="Your Email">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="mobile" placeholder="Your Mobile">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="Your Password">
                        </div>
                        <div class="form-group">
                            <input type="submit" name = "submit" class="btn btn-block btn-primary"  value="Register">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php  include('inc/footer.php');  ?> 
