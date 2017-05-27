<?php require('core/init.php'); ?>

<?php
    $topic = new Topic;

    if(isset($_POST['register'])){
        //Create Data Array
        $data = array();
        $data['name']=$_POST['name'];
        $data['email']=$_POST['email'];
        $data['username']=$_POST['username'];
        $data['password']=md5($_POST['password']);
        $data['password2']=md5($_POST['password2']);
        $data['about']=$_POST['about'];
        $data[';ast_activity']=date("Y-m-d H:i:s");
    }

    //Get Template & Assign Vars
    $template = new Template('templates/register.php');

    //Display template
    echo $template;