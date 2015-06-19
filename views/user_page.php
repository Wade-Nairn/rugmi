<div class="main">
	
	

	
	<? if(count($images->items) == 0):  ?>
			<p>You have no images</p>
	<? else: ?>	
	<ul>
	
		<? foreach($images->items as $image):?>
		<? if( $image->user_id == Auth::user_id() ): ?>
			
			<li class="block">
				
						<a href="image_page.php?id=<?=$image->id ?>"><img src="<?= $image->url ?>" alt=""></a>
						<p><?= $image->caption ?></p>

						
						<a href="edit_image.php?id=<?= $image->id ?>" class="img">Edit Image</a>
						
						<a href="delete_image.php?id=<?= $image->id ?>" class="img">Delete Image</a>
						
					
			</li>

			

			<? endif; ?>
		<? endforeach; ?>
	
	</ul>
	<? endif; ?>

	


</div>