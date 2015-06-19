<?php

# single_image.php

# 1. Load Libraries & models

require_once '../libraries/auth.lib.php';
require_once '../libraries/xss.lib.php';

require_once '../models/user.model.php';
require_once '../models/image.model.php';
require_once '../models/comment.model.php';

require_once '../models/images.collection.php';
require_once '../models/comments.collection.php';


#2. Logic

$image = new Image();
$comments = new Comments_Collection(['deleted' => '0']);

$image->load($_GET['id']);

#3. Load Views

include '../views/header.php';
include '../views/image_page.php';
include '../views/footer.php';