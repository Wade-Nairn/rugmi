<div class="container">
	
		<? if(count($images->items) == 0): ?>
				<p>No images to display</p>
			<? elseif(count($images->items) > 0): ?>		
				<?foreach($images->items as $image):?>
					<div class="image">
						<h2><?= XSS::filter($image->title) ?></h2>
						<p><?= XSS::filter($image->content) ?></p>
						<p><?= XSS::filter($image->username) ?></p>

						<a href="edit_image.php?id=<?=$image->id?>">Edit</a>
						<a href="delete_image.php?id=<?=$image->id?>" class='delete'>Delete</a>
					</div>
				<? endforeach; ?>
			<? endif; ?>

</div>