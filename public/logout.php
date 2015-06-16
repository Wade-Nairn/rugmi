<?php

# logout.php

require_once '../libs/auth.lib.php';
require_once '../libs/url.lib.php';

Auth::log_out();


URL::redirect('login.php');