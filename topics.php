<?php require('core/init.php'); ?>

<?php
    //create Topics Object
    $topic = new Topic;

    //Get category from url
    $category = isset($_GET['category']) ? $_GET['category'] : null;

    $user_id = isset($_GET['user']) ? $_GET['user'] : null;

    //Get Template & Assign Vars
    $template = new Template('templates/topics.php');

    if(isset($category)){
        $template->topics = $topic->getByCategory($category);
        $template->title = 'Posts In "'.$topic->getCategory($category)->name.'"';
    }

    if(!isset($category)){
        $template->topics = $topics->getAllTopics();
    }

    if(isset($user_id)){
        $template->topics = $topics->getByUser($user_id);
        $template->title = 'Posts By "'.$user->getUser($user_id)->username.'"';
    }

    if(!isset($user_id)){
        $template->topics = $topics->getAllTopics();
    }

    //Assign Vars
    $template->totalTopics = $topic->getTotalTopics();
    $template->totalCategories = $topic->getTotalCategories();

    //Display template
    echo $template;