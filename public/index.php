<?php

# index.php

# 1. Load Libraries & models

require_once '../libraries/auth.lib.php';
require_once '../libraries/xss.lib.php';

require_once '../models/user.model.php';
require_once '../models/image.model.php';

require_once '../models/images.collection.php';


#2. Logic




#3. Load Views

include '../views/header.php';
include '../views/image_list.php';
include '../views/footer.php';