<?php 

# edit_comment.php

# 1. Libraries and Models:

require_once '../libraries/form.lib.php';
require_once '../libraries/auth.lib.php';
require_once '../libraries/url.lib.php';

require_once '../models/image.model.php';

require_once '../models/comment.model.php';
require_once '../models/comments.collection.php';

# 2. Logic:

Auth::kickout('login.php');

$comments = new Comments_Collection(['deleted' => '0']);


$comment = new Comment();
$comment->load($_GET['id']);

$image = new Image();
$image->load($comment->image_id);

if($_POST && $_POST['content'] != ''){
	$comment->content = $_POST['content'];
	$comment->save();
}
# 3. Views:

include '../views/header.php';
include '../views/edit_comment_form.php';
include '../views/footer.php';