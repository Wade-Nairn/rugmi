<?php 
<<<<<<< HEAD
//not sure.. change whatever.
=======

>>>>>>> 0b5ae8e394080aae62031a29619c046896f84479
# delete_image.php

# 1. Libraries and Models:

require_once '../libraries/form.lib.php';
require_once '../libraries/upload.lib.php';
require_once '../libraries/url.lib.php';
<<<<<<< HEAD

=======
>>>>>>> 0b5ae8e394080aae62031a29619c046896f84479
require_once '../model/image.model.php';

# 2. Logic:

Auth::kickout('login.php');

<<<<<<< HEAD
$file = new File();
$file -> load($_GET['id']);

//$file-> (int)$_GET['id'];
$file -> delete();

# 3. Redirect:

URL::redirect('image_list.php'); //image_list.php or login.php?
=======
$image = new Image();

$image = $_GET($image['id']);

$image->delete();


# 3. Redirect:

URL::redirect('user.php');
>>>>>>> 0b5ae8e394080aae62031a29619c046896f84479
