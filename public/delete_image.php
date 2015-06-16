<?php

// libraries

require_once "../libraries/auth.lib.php";
require_once "../libraries/form.lib.php";
require_once "../libraries/upload.lib.php";
require_once "../libraries/url.lib.php";

require_once "../models/image.model.php";



// logic

Auth::kickout('login.php');

$image = new Image();
$image = $_GET($image['id']);
$image->delete();



//  views / redirect

URL::redirect('user.php');