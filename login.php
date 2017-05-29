<?php require('core/init.php'); ?>

<?php

    if(isset($_POST['do_login'])){
        //Get user name and password
        $username=$_POST['username'];
        $password=md5($_POST['password']);


        $user = new User;

        if($user->login($username,$password)){
            redirect('index.php','You have logged in!','success');
        }
        else{
            redirect('index.php','You have failed to log in','error');
        }

    }else{
        redirect('index.php');
    }




