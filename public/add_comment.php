<?php  

# add_comment.php

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

$image = new Image();
$image->load($_GET['id']);


if($_POST && $_POST['content'] != ''){

	$comment = new Comment();
	$comment->user_id = Auth::user_id();
	$comment->content = $_POST['content'];

	$comment->image_id = $image->id;
	$comment -> save();

	URL::redirect('image_page.php?id='.$image->id);
}

# 3. Views:

include '../views/header.php';
include '../views/add_comment_form.php';
include '../views/footer.php';