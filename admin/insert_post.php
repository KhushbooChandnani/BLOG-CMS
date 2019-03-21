<?php
require_once("includes/admin-bootstrap.php");
if(isset($_POST['post_submit'])){
    $db = new Database();
    $conn = $db->getConnection();
    $post = new Posts($conn);
    $array = array("post_category_id"=>$_POST['post_category_id'],"post_title"=>$_POST['post_title'],"post_body"=>$_POST['post_body'],"post_tags"=>$_POST['post_tags'],"post_status"=>$_POST['post_status']);
    $post->createPost($array);
        
}

?>