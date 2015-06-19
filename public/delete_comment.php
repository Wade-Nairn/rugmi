<?php 

# delete_comment.php

# 1. Libraries and Models:

require_once '../libraries/auth.lib.php';
require_once '../libraries/url.lib.php';
require_once '../models/comment.model.php';

require_once '../models/image.model.php';

# 2. Logic:

Auth::kickout('login.php');

$comment = new Comment();
$comment -> load($_GET['id']);

$image = new Image();
$image->load($_GET['image_id']);

if( $comment->user_id == Auth::user_id() || $image->user_id == Auth::user_id()){
	$comment -> delete();
}
# 3. Redirect:

URL::redirect('index.php'); //comment_form.php or login.php