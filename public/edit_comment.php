<?php 
# edit_comment.php

# 1. Libraries and Models:

require_once '../libraries/form.lib.php';
require_once '../libraries/auth.lib.php';
require_once '../models/comment.model.php';
require_once '../models/comments.collection.php';

# 2. Logic:

Auth::kickout('login.php');

$comment = new Comment();
$comment->load($_GET['id']);

if($_POST && $_POST['content'] != ''){
	$comment->content = $_POST['content'];
	$comment->save();
}
# 3. Views:

include '../views/header.php';
// include '../views/login_form.php';
include '../views/comment_form.php';
include '../views/footer.php';