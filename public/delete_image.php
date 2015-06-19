<?php 

# delete_image.php

# 1. Libraries and Models:

require_once '../libraries/form.lib.php';
require_once '../libraries/upload.lib.php';
require_once '../libraries/url.lib.php';
require_once '../libraries/auth.lib.php';

require_once '../models/image.model.php';

# 2. Logic:

Auth::kickout('login.php');

$image = new Image();

$image->load($_GET['id']);
if( $image->user_id == Auth::user_id()){
	 $image->delete();
}




# 3. Redirect:

URL::redirect('user.php');