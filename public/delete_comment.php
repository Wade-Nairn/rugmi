<?php 


# delete_comment.php

# 1. Libraries and Models:

require_once '../libraries/auth.lib.php';
require_once '../libraries/url.lib.php';
require_once '../models/comment.model.php';

# 2. Logic:

Auth::kickout('login.php');
$comment = new Comment();
$comment -> load($_GET['id']);
$comment -> delete();

# 3. Redirect:

URL::redirect('index.php'); //comment_form.php or login.php