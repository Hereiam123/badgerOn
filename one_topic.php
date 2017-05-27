<?php require('core/init.php'); ?>

<?php
    //Creat eTopic Object
    $topic = new Topic;

    //Get ID from URL
    $topic_id=$_GET['id'];

    //Get Template & Assign Vars
    $template = new Template('templates/one_topic.php');

    //Assign Vars
    $template->topic=$topic->getTopic($topic_id);
    $template->replies=$topic->getReplies($topic_id);
    $template->title=$topic->getTopic($topic_id)->title;

    //Display template
    echo $template;