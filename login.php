<?php  include('inc/header.php');  
 require_once('functions/validation.php');

require_once('inc/db.php'); ?>
<?php if(isset($_SESSION['user_name'])) header('location:index.php');?>
<?php

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    if(checkEmpty($email) and checkEmpty($password) ){
        if(validEmail($email)){
            $sql = "SELECT * FROM users WHERE email=?";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$email]);

            $data = $stmt->fetchObject();
            if($data){
                $check_password = password_verify($password,$data->password);
                if($check_password){
                        $_SESSION['user_id'] = $data->id;
                        $_SESSION['user_name'] = $data->name;
                        $_SESSION['user_email'] = $data->email;
                        $_SESSION['user_mobile'] = $data->mobile;

                        header('location:index.php');
                        
                }else{
                    $error_message = "Email or Password Not Correct";
                }
            }else{
                $error_message = "Email or Password Not Correct";
            }
        }else{
            $error_message = "Data Not Correct";
        }
    }else{
        $error_message = "Please Fill All Filds";
    }
    
}
?>

    <div class="container">
        <div class="row">
            <div class="col-12 ">
                <h1 class="text-center display-4 border my-5 p-2"> Login</h1>
            </div>
            <?php require 'functions/messages.php'; ?>

            <div class="col-sm-6 mx-auto">
                <div class="border p-5 my-3">
                    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST">
                        <div class="form-group">
                            <input type="text" class="form-control" name="email" placeholder="Your Email">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="Your Password">
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" class="btn btn-block btn-primary"  value="Login">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php  include('inc/footer.php');  ?> 
