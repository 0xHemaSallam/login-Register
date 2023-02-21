<?php  include('inc/header.php');  ?> 
<?php  include('inc/db.php');  ?> 
    <div class="container">
        <div class="row">
            <div class="col-sm-12 ">
                <?php if(isset($_SESSION['user_name'])): ?>
                <h1 class="text-center display-4 border p-3 my-5 bg-primary text-light "> منور يا حبيب اخوك </h1>
                    <img src="img/hema.jpg" alt="">
                <?php else: ?>
                    <h1 class="text-center display-4 border p-3 my-5 bg-primary text-light "> سجل دخول يا ابن عمي وتعالي</h1>

                <?php endif; ?>
            </div>
        </div>
    </div>

<?php  include('inc/footer.php');  ?> 
