<?php 
//not sure.. change whatever.
# delete_image.php

# 1. Libraries and Models:

require_once '../libraries/form.lib.php';
require_once '../libraries/upload.lib.php';
require_once '../libraries/url.lib.php';

require_once '../model/image.model.php';

# 2. Logic:

Auth::kickout('login.php');

$file = new File();
$file -> load($_GET['id']);

//$file-> (int)$_GET['id'];
$file -> delete();

# 3. Redirect:

URL::redirect('image_list.php'); //image_list.php or login.php?
