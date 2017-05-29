<?php include('core/init.php'); ?>

<?php

//Alow user to logout on logout button press

if(isset($_POST['do_logout'])){
    //Create user object
    $user = new User;

    if($user->logout()){
        redirect('index.php','You are now logged out','success');
    }else{
        redirect('index.php');
    }
}