<?php include('inc/header.php');?>
<?php  require_once('functions/validation.php');?>
<?php  include('inc/db.php'); ?>
<?php 

if(isset($_POST['submit'])){
    $old_password = $_POST['old_password'];
    $new_password = $_POST['new_password'];
    $confirm_password = $_POST['confirm_password'];
    if(checkEmpty($old_password) and checkEmpty($new_password) and checkEmpty($new_password)){
            $sql = "SELECT * FROM users WHERE email=?";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$_SESSION['user_email']]);
            $data = $stmt->fetchObject();
            if($data){
                $check_password = password_verify($old_password,$data->password);
                if($check_password){
                if($new_password === $confirm_password){
                    $new_password = password_hash($new_password,PASSWORD_DEFAULT);
                    $sql = "UPDATE users SET password=? WHERE email=?";
                    $stmt = $pdo->prepare($sql);
                    $stmt->execute([$new_password,$_SESSION['user_email']]);
                    $success_message = "Password Has Been Updated";
                    header( "refresh:2;url=http://localhost/registration/show-data.php");
                    
                }else{
                    $error_message = "Passwords Not The Same";
                }
                
                
                }else{
                    $error_message = "Password Not Correct";
                }
            }
            
        
    }else{
        $error_message = "Please Fill All Filds";
    }
}
?>

<div class="container">
        <div class="row">
            <div class="col-12 ">
                <h1 class="text-center display-4 border my-5 p-2"> Change Password</h1>
            </div>
            <?php require 'functions/messages.php'; ?>

            <div class="col-sm-6 mx-auto">
                <div class="border p-5 my-3">
                    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST">
                        <div class="form-group">
                            <input type="password" class="form-control" name="old_password" placeholder="Your Old Password">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="new_password" placeholder="Your New Password">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="confirm_password" placeholder="Confirm New Password">
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" class="btn btn-block btn-primary"  value="Save">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


<?php include('inc/footer.php');?>
