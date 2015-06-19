<?php
# logout.php
# 1. Load Libraries
require_once '../libraries/auth.lib.php';
require_once '../libraries/url.lib.php';
# 2. Logic
Auth::log_out();
# 3. Redirect
URL::redirect('login.php');