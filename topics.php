<?php require('core/init.php'); ?>

<?php
    //create Topics Object
    $topic = new Topic;

    $category = isset($_GET['category']) ? $_GET['category'] : null;

    //Get Template & Assign Vars
    $template = new Template('templates/topics.php');

    if(isset($category)){
        $template->topics = $topic->getByCategory($category);
        $template->title = 'Posts In "'.$topic->getCategory($category)->name.'"';
    }

    if(!isset($category)){
        $template->topics = $topics->getAllTopics();
    }

    //Assign Vars
    $template->totalTopics = $topic->getTotalTopics();
    $template->totalCategories = $topic->getTotalCategories();

    //Display template
    echo $template;