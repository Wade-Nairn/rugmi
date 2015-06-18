<div class="main">
	
	<ul>
		<li>
			<? if(count($images->items) == 0):  ?>
			<p>You have no images</p>
		</li>	

	<? else: ?>
		<li>

			<? foreach($images->items as $image):?>
					<img src="<?= $image->url ?>" alt="">
					<p><?= $image->caption ?></p>
					
					<a href="edit_image.php?id=<?= $image->id ?>">Edit Image</a>
					
					<a href="delete_image.php?id=<?= $image->id ?>">Delete Image</a>
			<? endforeach; ?>		
		</li>

	<? endif; ?>
	</ul>


</div>