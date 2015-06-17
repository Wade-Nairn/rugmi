<?php  

# add_comment.php

# 1. Libraries and Models:

require_once '../libraries/form.lib.php';
require_once '../libraries/login.lib.php';
require_once '../libraries/url.lib.php';
<<<<<<< HEAD

=======
>>>>>>> 0b5ae8e394080aae62031a29619c046896f84479
require_once '../model/comment.model.php';
require_once '../model/comments.collection.php';

# 2. Logic:

<<<<<<< HEAD
//Auth::kickout('login.php');

if($_POST && $_POST['content'] != ''){

	$comment = new Comment();
	$comment ->content = $_POST['content'];
	$comment -> save();

=======
Auth::kickout('login.php');
if($_POST && $_POST['content'] != ''){
	$comment = new Comment();
	$comment ->content = $_POST['content'];
	$comment -> save();
>>>>>>> 0b5ae8e394080aae62031a29619c046896f84479
	URL::redirect('edit_comment.php?id='.$comment->id);
}

# 3. Views:
<<<<<<< HEAD
include '../views/header.php';
include '../views/login_form.php';
include '../views/comment_form.php';
include '../views/upload_form.php';
include '../views/footer.php';
=======

include '../views/header.php';
include '../views/login_form.php';
include '../views/comment_form.php';
include '../views/footer.php';
>>>>>>> 0b5ae8e394080aae62031a29619c046896f84479
