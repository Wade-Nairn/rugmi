<?php

# login.php

# 1. Require libraries and models

require_once '../libraries/login.lib.php';
require_once '../libraries/url.lib.php';
require_once '../libraries/form.lib.php'; 

require_once '../models/user.model.php';


#2. Logic


if($_POST){
	
	$user = new User();

	$user->username  = $_POST['username'];
	$user->password  = $_POST['password'];

	$user->save();

	URL::redirect('index.php');
}

#3. Load Views

include '../views/header.php';
include '../views/register_form.php';
include '../views/footer.php';