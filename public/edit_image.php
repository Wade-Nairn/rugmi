<?php

// libraries

require_once "../libraries/auth.lib.php";
require_once "../libraries/form.lib.php";
require_once "../libraries/upload.lib.php";
require_once "../libraries/url.lib.php";

require_once "../models/image.model.php";
require_once "../models/user.model.php";



// logic

// Auth::kickout('login.php');

$image = new Image();

if($_POST){

$image->caption = $_POST('caption');

$image->save();

}


//  views / redirect

include '../views/header.php';
include '../views/edit_image_form.php';
include '../views/footer.php';