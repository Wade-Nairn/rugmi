<?php 
//change whatever needs to be changed.

# delete_image.php

# 1. Libraries and Models:

require_once '../libraries/login.lib.php';
require_once '../libraries/url.lib.php';
require_once '../model/image.model.php';

# 2. Logic:

Auth::kickout('login.php');

$image = new Image();
$image -> load($_GET['id']);
$image -> delete();

# 3. Redirect:

URL::redirect('image_list.php'); //image_list.php or login.php?
