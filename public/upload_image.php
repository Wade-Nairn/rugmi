<?php  
//not to sure.. so just change whatever.

# upload_image.php

# 1. Libraries and Models:

require_once '../libraries/form.lib.php';
require_once '../libraries/upload.lib.php';
require_once '../libraries/url.lib.php';

require_once '../model/image.model.php';
require_once '../model/images.collection.php';

# 2. Logic:

Auth::kickout('login.php');

//if any files were uploaded:
if($_FILES){

 	//get the temp name, and the filename:
 	$tmp      = $_FILES['file']['tmp_name'][0];
 	$filename = $_FILES['file']['name'][0];

 	//move the files into the "uploads" folder:
 	move_uploaded_file($tmp, 'uploads/' .$filename);
 }

 	//redirect to the newly uploaded file:
 	URL::redirect('uploads/'.$filename);


}

# 3. Views:
include '../views/header.php';
//include '../views/login_form.php';
include '../views/upload_form.php';
include '../views/comment_form.php';

include '../views/footer.php';
