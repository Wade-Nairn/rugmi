<?php
# images.collection.php
require_once '../libs/collection.lib.php';
class Images_Collection extends Collection{
	# Tell the page model what table it belongs to
	protected $table = 'images';
	# We need to do this for the model to work
	public function __construct($where = false){
		parent::__construct($this->table, $where);
	}
}