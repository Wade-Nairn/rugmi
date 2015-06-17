<?php 

# delete_comment.php

# 1. Libraries and Models:

require_once '../libraries/login.lib.php';
require_once '../libraries/url.lib.php';
require_once '../model/comment.model.php';

# 2. Logic:

<<<<<<< HEAD
//Auth::kickout('login.php');
=======
Auth::kickout('login.php');
>>>>>>> 0b5ae8e394080aae62031a29619c046896f84479

$comment = new Comment();
$comment -> load($_GET['id']);
$comment -> delete();

# 3. Redirect:

<<<<<<< HEAD
URL::redirect('comment_form.php'); //comment_form.php or login.php
=======
URL::redirect('comment_form.php'); //comment_form.php or login.php
>>>>>>> 0b5ae8e394080aae62031a29619c046896f84479
