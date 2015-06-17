<?php 
<<<<<<< HEAD

=======
>>>>>>> 0b5ae8e394080aae62031a29619c046896f84479
# edit_comment.php

# 1. Libraries and Models:

require_once '../libraries/form.lib.php';
require_once '../libraries/login.lib.php';
<<<<<<< HEAD

require_once '../models/comment.model.php';
require_once '../models/comments.collection.php';


# 2. Logic:

//Auth::kickout('login.php');

$comment = new Comment();
$comment->load($_GET['id']);

if($_POST && $_POST['content'] != ''){

	$comment->content = $_POST['content'];

	$comment->save();
}



=======
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
>>>>>>> 0b5ae8e394080aae62031a29619c046896f84479
# 3. Views:

include '../views/header.php';
include '../views/login_form.php';
include '../views/comment_form.php';
<<<<<<< HEAD

include '../views/footer.php';
=======
include '../views/footer.php';
>>>>>>> 0b5ae8e394080aae62031a29619c046896f84479
