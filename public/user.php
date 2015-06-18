<?php

//  libraries
require_once "../libraries/auth.lib.php";
require_once "../libraries/form.lib.php";
require_once "../libraries/upload.lib.php";
require_once "../libraries/url.lib.php";
require_once "../libraries/xss.lib.php";


require_once "../models/user.model.php";
require_once "../models/image.model.php";
require_once "../models/images.collection.php";


//  logic

 Auth::kickout();

$user = new User();

$images = new Images_Collection();

//  views

include '../views/header.php';
include '../views/user_page.php';
include '../views/footer.php';