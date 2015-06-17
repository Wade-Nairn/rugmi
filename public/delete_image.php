<?php 

# delete_image.php

# 1. Libraries and Models:

require_once '../libraries/form.lib.php';
require_once '../libraries/upload.lib.php';
require_once '../libraries/url.lib.php';
require_once '../model/image.model.php';

# 2. Logic:

Auth::kickout('login.php');

$image = new Image();

$image = $_GET($image['id']);

$image->delete();


# 3. Redirect:

URL::redirect('user.php');