<?php 
# image.model.php

# load the model library if it hasn't already been done
require_once '../libraries/model.lib.php';
class Image extends Model{
	# Tell the page model what table it belongs to
	protected $table = 'images';
}