<?php
Session::start_session();

$conn = (new Database())->getConnection();

$posts = new Posts($conn);

$page_no = $_GET('page_no');

$categories = new Categories($conn);

$start = ($page_no-1)*MAX_NUMBER;

$results = $posts->readAllPostsOfAuthor($_SESSION['user_id'],$start,MAX_NUMBER);

$count = count($posts->readAllPostsOfAuthor($_SESSION['user_id']));

?>
<div class="container">
<table class="table">
    <thead>
        <tr>
           <th>Post Title</th>
           <th>Post Body</th>
            <th>Post Tage</th>
            <th>Post Author</th>
            <th>Post Date</th>
            <th>Post Image</th>
            <th>Post Status</th>
            <th>View Post</th>
            <th>Delete Post</th>
            <th>Toggle Status</th>
        </tr>
    </thead>
</table>
</div>