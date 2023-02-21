<?php include('inc/header.php'); ?>
<div class="container">
    <div class="row">
    <div class="col-sm-12">
        <h3 class="text-center p-3 bg-primary text-white">View All admins</h3>
        <table class="table table-dark table-bordered">
            <thead>
                <tr class="text-center">
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Action</th>
       
                </tr>
            </thead>
            <tbody>
                <?php 
                include 'classes/user.php'; $i=1?>
                <?php foreach(user::getAllUsers() as $row): ?>
                    <tr>
                        <th scope="row"><?php echo $i++;?></th>
                        <th><?php echo $row->name;?></th>
                        <th><?php echo $row->email;?></th>
                        <th><?php echo $row->mobile;?></th>
                    </tr>
                <?php endforeach;?>
            </tbody>
            </div>
        </div>
    </div>
</div>

<?php include('inc/footer.php'); ?>