<div class="main">
	
	

	
	<? if(count($images->items) == 0):  ?>
			<p>You have no images</p>
	<? else: ?>	
	<ul>
	
		<? foreach($images->items as $image):?>
		<? if( $image->user_id == Auth::user_id() ): ?>
			
			<li>
				
						<img src="<?= $image->url ?>" alt="">
						<p><?= $image->caption ?></p>
						
						<a href="edit_image.php?id=<?= $image->id ?>">Edit Image</a>
						
						<a href="delete_image.php?id=<?= $image->id ?>">Delete Image</a>

					
			</li>

			

			<? endif; ?>
		<? endforeach; ?>
	
	</ul>
	<? endif; ?>

	


</div>